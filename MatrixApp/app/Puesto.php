<?php

namespace PlanillaFenix;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Puesto extends Model
{
	use SoftDeletes;
    //    
    protected $table = 'puestos';

    protected $fillable = ['nombre'];
    protected $dates = ['deleted_at'];

    public static function Puestos()
    {
    	return DB::table("puestos")    			
    			->select('puestos.*')
    			->get();

    }
}