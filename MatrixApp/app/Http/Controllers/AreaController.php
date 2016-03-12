<?php

namespace PlanillaFenix\Http\Controllers;

use Illuminate\Http\Request;
use PlanillaFenix\Http\Requests;
use PlanillaFenix\Http\Controllers\Controller;
use PlanillaFenix\Area;
use Session;
use Redirect;

class AreaController extends Controller
{
    //
    public function index()
    {
   	  	$areas = Area::All();//Areas();
   	  	
   	  	return view('planilla.areas.verAreas', compact('areas'));
   	}

   	public function create()
   	{
      Session::forget('editar');
      Session::flash('nuevo','nuevo');

   		return view('planilla.areas.detalleArea');
   	}

    public function store(Request $request)
    {
        Area::create($request->all());

        Session::flash('message','¡Área Registrada Exitosamente!');

        return Redirect::to('/area');
    }

    public function edit($id)
    {
      $area = Area::find($id);

      Session::forget('nuevo');
      Session::flash('editar','editar');

      return view('planilla.areas.detalleArea', ['area' => $area]);
    }

    public function update($id, Request $request)
    {
      $area = Area::find($id);
      $area -> fill($request -> all());
      $area -> save();

      Session::flash('message','¡Área Editada Exitosamente!');      

      return Redirect::to('/area');
    }

    public function destroy($id)
    {
      $area = Area::find($id);
      $area -> delete();


      Session::flash('message','¡Área Removida Exitosamente!');      
      return Redirect::to('/area');

    }

}
