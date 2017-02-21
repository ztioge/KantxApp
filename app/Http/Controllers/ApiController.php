<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sensor;
use DB;
class ApiController extends Controller
{
    //
    public function getSensors()
    {
        return Sensor::all();    
    }
    
    public function getSensor($sensor_id)
    {
   
        return response()
            ->json( $sensor = DB::table('sensors')->where('id', $sensor_id)->first());
    }
    public function getSensorRadiacion($sensor_id)
    {
   
        return response()
            ->json( $sensor = DB::table('sensors')->select('radiacion')->where('id', $sensor_id)->first());
    }
    public function getSensorHumedad($sensor_id)
    {
   
        return response()
            ->json( $sensor = DB::table('sensors')->select('humedad')->where('id', $sensor_id)->first());
    }
    public function getSensorTemperatura($sensor_id)
    {
   
        return response()
            ->json( $sensor = DB::table('sensors')->select('temperatura')->where('id', $sensor_id)->first());
    }
    public function getSensorOcupado($sensor_id)
    {
   
        return response()
            ->json( $sensor = DB::table('sensors')->select('ocupado')->where('id', $sensor_id)->first());
    }
    public function getSensorLlover($sensor_id)
    {
   
        return response()
            ->json( $sensor = DB::table('sensors')->select('llover')->where('id', $sensor_id)->first());
    }
    public function getSensorViento($sensor_id)
    {
   
        return response()
            ->json( $sensor = DB::table('sensors')->select('viento')->where('id', $sensor_id)->first());
    }
}
