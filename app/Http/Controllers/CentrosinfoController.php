<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centrosinfo;

class CentrosinfoController extends Controller
{
  // funcion retorno todos los valores
  public function index()
  {
    $centros = Centrosinfo::all();
    foreach ($centros as $centro) {
      if ($centro->foto != null) {
        $centro->foto = stream_get_contents($centro->foto);
      }
    }
    return $centros;
  }
  public function store(Request $request)
  {

    $centros = new Centrosinfo();
    $centros->centro_diagnostico = $request->centro_diagnostico;
    $centros->sede = $request->sede;
    $centros->centro = $request->centro;
    $centros->foto = $request->foto;
    $centros->telefono = $request->telefono;
    $centros->dirreccion = $request->dirreccion;
    $centros->save();

    return response()->json(["mensaje" => "Creado satisfactoriamente"], 201);
  }
  public function update(Request $request, $id)
  {
    $centros = Centrosinfo::find($id);
    $centros->centro_diagnostico = $request->centro_diagnostico;
    $centros->sede = $request->sede;
    $centros->centro = $request->centro;
    $centros->foto = $request->foto;
    $centros->telefono = $request->telefono;
    $centros->dirreccion = $request->dirreccion;


    $centros->save();

    return response()->json(["mensaje" => "Modificado satisfactoriamente"], 201);
  }

  public function destroy($id)
  {
    return Centrosinfo::destroy($id);
  }
}
