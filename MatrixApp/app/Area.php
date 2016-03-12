<?php

namespace PlanillaFenix;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Area extends Model
{
	use SoftDeletes;
    //
    protected $table = 'areas';

    protected $fillable = ['nombre'];
    protected $dates = ['deleted_at'];

    public static function Areas()
    {
    	return DB::table("areas")    			
    			->select('areas.*')
    			->get();

    }
}