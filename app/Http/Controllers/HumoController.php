<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Humo;
use Illuminate\Support\Facades\Http;
class HumoController extends Controller
{
    public function GuardarDatosHumo(){
        $response = Http::get('https://io.adafruit.com/api/v2/ValeriaGuapa/feeds/humo/data');
        $jsonData = $response->object();
        foreach($jsonData as $data){
            $model = new Humo();
            $model->id=$data->id;
            $model->value=$data->value;
            $model->save();
        }
    }


    public function VerDatosHumo(){
        $response = Http::get('https://io.adafruit.com/api/v2/ValeriaGuapa/feeds/humo/data');
        return Humo::all();
    }
}
