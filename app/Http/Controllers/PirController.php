<?php

namespace App\Http\Controllers;
use App\Models\Pir;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PirController extends Controller
{
    public function GuardarDatosPir(){
        $response = Http::get('https://io.adafruit.com/api/v2/ValeriaGuapa/feeds/movimiento/data');
        $jsonData = $response->object();
        foreach($jsonData as $data){
            $model = new Pir();
            $model->id=$data->id;
            $model->value=$data->value;
            $model->save();
        }
    }


    public function VerDatosPir(){
        $response = Http::get('https://io.adafruit.com/api/v2/ValeriaGuapa/feeds/movimiento/data');
        return Pir::all();
    }
}
