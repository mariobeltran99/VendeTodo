<?php

namespace App\Http\Controllers;

use App\Models\baneo;
use App\Models\visita;
use Illuminate\Http\Request;
use App\Models\usuario;
use App\Models\valoracion;
use Illuminate\Support\Str;
use Session;

class UsuarioController extends Controller
{
    public function login()
    {
        if (empty(session('rol'))) {
            return view('user.login');
        } else {
            return redirect()->to('home/')->send();
        }
    }
    public function crearComentario(Request $request){
        $user_id = session('id');
        $valoracion = new valoracion();
        $valoracion->estrella = $request->Valoracion;
        $valoracion->comentario = $request->Comentario;
        $valoracion->id_usuario = $user_id;
        $valoracion->id_producto = $request->Producto;
        $valoracion->save();
        return redirect()->to('viewProduct/' . $request->Producto)->send()->with('alertaNormal', 'Su registro se ha actualizado con exito');
    }
    public function register()
    {
        if (empty(session('rol'))) {
            $listd = file_get_contents("http://my-json-server.typicode.com/joseolivares/elsalvador_states/deptos");
            $listd = json_decode($listd);
            return view('user.register', compact('listd'));
        } else {
            return redirect()->to('home/')->send();
        }
    }
    public function viewUsers()
    {
        if (session('rol') == 'A') {
            $listUser = usuario::all()->take(5);
            return view('cpanel.adminUsers', compact('listUser'));
        } else {
            return redirect()->to('home/')->send();
        }
    }
    public function home()
    {
        if (!empty(session('id'))) {
            $verificar = usuario::find(session('id'));
            if ($verificar->clave == "81dc9bdb52d04dc20036dbd8313ed055") {
                $contra = true;
            } else {
                $contra = false;
            }
            return view('user.home', compact('contra'));
        } else {
            return redirect()->to('login/')->send();
        }
    }
    public function editUser()
    {
        if (!empty(session('id'))) {
            $arrayUser = usuario::find(session('id'));
            return view('user.editUser', compact('arrayUser'));
        } else {
            return redirect()->to('login/')->send();
        }
    }
    public function editMeUser(Request $request)
    {
        if ($request->corregir) {
            if (!$this->meemail($request->input("correo"),session("id"))) {
                $Meuser = usuario::find(session('id'));
                $Meuser->nombre=$request->nombre;
                $Meuser->nombre=$request->correo;
                $Meuser->clave=($request->pass == "")?$Meuser->clave:md5($request->pass);
                if ($request->file('imagenperfil') != "") {
                    $image = $request->file('imagenperfil');
                    $nombre = time() . "_" . $image->getClientOriginalName();
                    $image->move('storage', $nombre);
                    $Meuser->foto=$nombre;
                    $Meuser->save();
                    session(["foto"=>$nombre]);
                } else {
                    $Meuser->save();
                }
                return redirect()->to('/user/edit')->send()->with('alertaNormal', 'Se actualizo');
            } else {
                return redirect()->to('/user/edit')->send()->with('alertaError', 'Hubo un conflicto de correos');
            }
        }
        if ($request->borrar) {
            $Meuser = usuario::find(session('id'));
            $Meuser->activo=0;
            $Meuser->save();
            return redirect()->to('/logout')->send();
        }
    }

    public function loginRegister(Request $request)
    {
        if ($this->existEmail($request->name)) {
            return redirect()->route('login')->with('email', $request->name);
        } else {
            return redirect()->route('register')->with('email', $request->name);
        }
    }
    private function existEmail($email)
    {
        $array = usuario::where('nombre_usuario', $email)->get();
        if (count($array) != 0) {
            return true;
        } else {
            return false;
        }
    }
    private function meemail($email, $id)
    {
        $array = usuario::where('nombre_usuario', $email)->where('id','!=',$id)->get();
        if (count($array) != 0) {
            return true;
        } else {
            return false;
        }
    }
    public function plogin(Request $request)
    {
        $array = usuario::where('nombre_usuario', $request->email)->where('clave', md5($request->passs))->get()->first();
        $banned= baneo::where('id_usuario',$array->id)->get();
        $today=date("d-m-Y");
        echo count($banned);
        if (!empty($array)and count($banned)==0) {
            $sss = new visita();
            $sss->id_usuario=$array->id;
            $sss->ip=$request->ip();
            $sss->save();
            session([
                'id' => $array->id,
                'nombre' => $array->nombre,
                'foto' => $array->foto,
                'rol' => strtoupper($array->rol)
            ]);
            return redirect()->to('home/')->send();
        } elseif(empty($array)) {
            return redirect()->to('login/')->send()->with('alertLogin', true);
        }
        elseif(!empty($array) and !empty($banned)){
            $opc=count($banned); 
            switch($opc){
                case 1:
                    $fechab =date("d-m-Y",strtotime($banned[0]->created_at."+ 15 days")); 
                    break;
                case 2:
                   
                    $fechab =date("d-m-Y",strtotime($banned[0]->created_at."+ 3 months"));                 
                    break;
                case 3:
                    return redirect()->to('login/')->send()->with('alertLogin','Su cuenta ha sido baneada permanentemente ');    
                    break;
            }
            if($today>$fechab){
                echo "aaa";
                $sss = new visita();
                $sss->id_usuario=$array->id;
                $sss->ip=$request->ip();
                $sss->save();
                session([
                    'id' => $array->id,
                    'nombre' => $array->nombre,
                    'foto' => $array->foto,
                    'rol' => strtoupper($array->rol)
                ]);
                return redirect()->to('home/')->send();
            }
            else{
                return redirect()->to('login/')->send()->with('alertLogin','Su cuenta ha sido baneada por '.$fechab.'');    

            }
            
        }
    }
    public function Pregister(Request $request)
    {
        if (!$this->existEmail($request->input("correo"))) {
            $array=new usuario();
            $array->nombre_usuario=$request->input("correo");
            $array->nombre=$request->input("nombre");
            $array->clave=md5($request->input("pass"));
            $array->foto="profileDefault.png";
            $array->activo=1;
            $array->rol="u";
            $array->departamento=$request->input("departamento");
            $array->token=Str::random(100);
            $array->save();
            echo $array;
            session([
                'id' => $array->id,
                'nombre' => $array->nombre,
                'foto' => $array->foto,
                'rol' => strtoupper($array->rol)
            ]);
            return redirect()->to('preferences/')->send();
        } else {
            return redirect()->to('/register')->send()->with('alertLogin', 'EL CORREO ESTA SIENDO UTILIZADO');
        }
    }
    public function cerrar_sesion(){
        Session::flush();
        return redirect()->to('/');
    }
    public function renderUsuario(Request $request){
        if (session('rol') == 'A') {
            $salid = "";
            $cosas = usuario::where('nombre', 'like', $request->texto . "%")->orWhere('nombre_usuario', 'like', $request->texto . "%")->take(5)->get();
            foreach ($cosas as $item) {
                $salid .= '
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="rounded-full w-6 h-6"';
                if ($item->foto == "profileDefault.png") {
                    $salid .= 'src="/img/'.$item->foto;
                } else {
                    $salid .= 'src="/storage/'.$item->foto;
                }
                $salid.= '
                                 alt="" />
                        </div>
                        <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                                ' . $item->nombre . '
                            </p>
                        </div>
                    </div>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">';
                if ($item->rol == 'a') {
                    $salid .= "Admin";
                } else {
                    $salid .= "User";
                }
                $salid .= '</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">
                        ' . date_format($item->created_at, 'd-m-y') . '
                    </p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <span
                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">';
                if ($item->activo == 1) {
                    $salid .= '<span aria-hidden  class="relative inset-0 bg-green-200 p-1 rounded-full text-green-900">
                        Activo
                    </span>';
                } else {
                    $salid .= '<span aria-hidden  class="relative inset-0 bg-red-200 p-1 rounded-full text-green-900">
                        Inactivo
                    </span>';
                }
                $salid .= '</span>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">
                        ' . $item->departamento . '
                    </p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">
                    <div class="inline-block mr-2 mt-2">
                        <a href="/resetPass/'.$item->id.'">
                            <button type="button" class="focus:outline-none text-white text-sm py-2 px-3 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">
                                <i class="fas fa-key"></i>
                            </button>
                        </a>
                    </div>
                    </p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">
                    <div class="inline-block mr-2 mt-2">
                        <div class="inline-block mr-2 mt-2">
                            <a href="/activarDesactivar/'.$item->id.'">
                                <button type="button" class="focus:outline-none text-white text-sm py-2 px-3 rounded-md bg-gray-500 hover:bg-gray-600 hover:shadow-lg">
                                    <i class="fas fa-arrow-alt-circle-down"></i>
                                    <i class="fas fa-arrow-alt-circle-up"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    </p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">
                        <div class="inline-block mr-2 mt-2">
                            <a href="/baneo/'.$item->id.'">
                                <button type="button" class="focus:outline-none text-white text-sm py-2 px-3 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">
                                    <i class="fas fa-minus-circle"></i>
                                    <i class="fas fa-circle"></i>
                                </button>
                            </a>
                        </div>
                    </p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">
                        <div class="inline-block mr-2 mt-2">
                            <a href="/upgradeAdmin/'.$item->id.'">
                                <button type="button" class="focus:outline-none text-white text-sm py-2 px-3 rounded-md bg-yellow-500 hover:bg-red-600 hover:shadow-lg">
                                    <i class="fas fa-crown"></i>
                                </button>
                            </a>
                        </div>
                    </p>
                </td>
            </tr> ';
            }
            return $salid;
        } else {
            return redirect()->to('home/')->send();
        }
    }
    public function baneoID($id){
        if (session('rol') == 'A') {
            $siesadmin = usuario::find($id);
            if ($siesadmin->rol != 'a') {
                $baneos = baneo::where('id_usuario', $id)->get();
                if (count($baneos) >= 3) {
                    $baneos[2]->delete();
                    $siesadmin->activo=1;
                    $siesadmin->save();
                } else {
                    for ($i = 1; $i <= 3 - count($baneos); $i++) {
                        $banban = new baneo();
                        $banban->id_usuario = $id;
                        $banban->save();
                    }
                    $siesadmin->activo=0;
                    $siesadmin->save();
                }
                return redirect()->to('/admin/viewUsers')->send()->with('alertaNormal', 'Su registro se ha actualizado con exito');
            } else {
                return redirect()->to('/admin/viewUsers')->send()->with('alertaError', 'No hay baneos para el administrador');
            }
        } else {
            return redirect()->to('home/')->send();
        }
            }
    public function activarDesactivar($id){
        if (session('rol') == 'A') {
            $siesadmin = usuario::find($id);
            if ($siesadmin->rol != 'a') {
                $bansbans = baneo::where('id_usuario',$id);
                if (count($bansbans) == 0) {
                    $user = usuario::find($id);
                    $user->activo = intval(!$user->activo);
                    $user->save();
                    return redirect()->to('/admin/viewUsers')->send()->with('alertaNormal', 'Su registro se ha actualizado con exito');
                } else {
                    return redirect()->to('/admin/viewUsers')->send()->with('alertaError', 'El usuario tiene baneos');
                }
            }else{
                return redirect()->to('/admin/viewUsers')->send()->with('alertaError', 'No se puede desactivar');
            }
        } else {
            return redirect()->to('home/')->send();
        }
    }
    public function resetPass($id){
        if (session('rol') == 'A') {
            $user = usuario::find($id);
            $user->clave=md5("1234");
            $user->save();
            return redirect()->to('/admin/viewUsers')->send()->with('alertaNormal', 'Su registro se ha actualizado con exito');
        } else {
            return redirect()->to('home/')->send();
        }
    }
    public function upgradeAdmin($id){
        if (session('rol') == 'A') {
            $siesadmin = usuario::find($id);
            if ($siesadmin->rol != 'a') {
                $baneos = baneo::where('id_usuario', $id)->get();
                if (count($baneos) == 0) {
                    $user = usuario::find($id);
                    $user->rol = 'a';
                    $user->save();
                    return redirect()->to('/admin/viewUsers')->send()->with('alertaNormal', 'Su registro se ha actualizado con exito');
                } else {
                    return redirect()->to('/admin/viewUsers')->send()->with('alertaError', 'Tiene baneos');
                }
            }else{
                return redirect()->to('/admin/viewUsers')->send()->with('alertaError', 'Ya es admin');
            }
        } else {
            return redirect()->to('home/')->send();
        }
    }
}
