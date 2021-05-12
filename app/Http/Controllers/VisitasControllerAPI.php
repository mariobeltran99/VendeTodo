<?php

namespace App\Http\Controllers;

use App\Models\visita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitasControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reenvio = DB::select("SELECT u.departamento, COUNT(*) as visita FROM usuarios u INNER JOIN visitas v ON u.id = v.id_usuario GROUP BY u.departamento");
        return json_encode($reenvio);
    }
    public function index_2()
    {
        $reenvio = DB::select("SELECT departamento, COUNT(*) as 'cantidad_usuarios' FROM `usuarios` GROUP BY departamento");
        return json_encode($reenvio);
    }
    public function index_3()
    {
        $reenvio = DB::select("SELECT p.nombre, AVG(v.estrella) AS 'promedio_estrellas' FROM valoracions v INNER JOIN productos p ON v.id_producto = p.id GROUP BY id_producto ORDER BY promedio_estrellas DESC");
        return json_encode($reenvio);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
