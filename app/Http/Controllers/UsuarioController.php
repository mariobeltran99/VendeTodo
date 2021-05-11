<?php

namespace App\Http\Controllers;

use App\Models\baneo;
use Illuminate\Http\Request;
use App\Models\usuario;
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
    public function cover()
    {
        return view('Product.coverProduct');
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
    public function plogin(Request $request)
    {
        $array = usuario::where('nombre_usuario', $request->email)->where('clave', md5($request->passs))->get()->first();
        if (!empty($array)) {
            session([
                'id' => $array->id,
                'nombre' => $array->nombre,
                'foto' => $array->foto,
                'rol' => strtoupper($array->rol)
            ]);
            return redirect()->to('home/')->send();
        } else {
            return redirect()->to('login/')->send()->with('alertLogin', true);
        }
    }
    public function Pregister(Request $request)
    {
        return redirect()->to('preferences/')->send();
    }
    public function cerrar_sesion(){
        Session::flush();
        return redirect()->to('/');
    }
    public function admonUser(Request $request)
    {
        return 0;
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
                            <img class="rounded-full w-6 h-6"
                                 src="/img/' . $item->foto . '"
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
                $user = usuario::find($id);
                $user->activo =intval(!$user->activo);
                $user->save();
                return redirect()->to('/admin/viewUsers')->send()->with('alertaNormal', 'Su registro se ha actualizado con exito');
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
