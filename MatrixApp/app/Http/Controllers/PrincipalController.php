<?php

namespace PlanillaFenix\Http\Controllers;

use Illuminate\Http\Request;

use PlanillaFenix\Http\Requests;
use PlanillaFenix\Http\Controllers\Controller;

class PrincipalController extends Controller
{
    //Página de Inicio
    public function index()
    {
    	return view('index');
    }

    public function admin()
    {
        return view('admin');
    }

    //Página de Módulo Contable
    public function contabilidad()
    {
    	return view('contabilidad.contabilidad');
    }

    public function planilla()
    {
        return view('planilla.planilla');
    }
}
