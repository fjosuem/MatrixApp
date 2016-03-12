<?php

namespace PlanillaFenix\Http\Controllers;

use Illuminate\Http\Request;
use PlanillaFenix\Http\Requests;
use PlanillaFenix\Http\Controllers\Controller;
use PlanillaFenix\Puesto;
use Session;
use Redirect;

class PuestoController extends Controller
{
    //
    //
    public function index()
    {
   	  	$puestos = Puesto::All();
   	  	
   	  	return view('planilla.puestos.verPuestos', compact('puestos'));
   	}

   	public function create()
   	{
      Session::forget('editar');
      Session::flash('nuevo','nuevo');

   		return view('planilla.puestos.detallePuesto');
   	}

    public function store(Request $request)
    {
        Puesto::create($request->all());

        Session::flash('message','¡Puesto Registrado Exitosamente!');

        return Redirect::to('/puesto');
    }

    public function edit($id)
    {
      $puesto = Puesto::find($id);

      Session::forget('nuevo');
      Session::flash('editar','editar');

      return view('planilla.puestos.detallePuesto', ['puesto' => $puesto]);
    }

    public function update($id, Request $request)
    {
      $puesto = Puesto::find($id);
      $puesto -> fill($request -> all());
      $puesto -> save();

      Session::flash('message','¡Puesto Editado Exitosamente!');      

      return Redirect::to('/puesto');
    }

    public function destroy($id)
    {
      $puesto = puesto::find($id);
      $puesto -> delete();


      Session::flash('message','¡Puesto Removido Exitosamente!');      
      return Redirect::to('/puesto');

    }
}
