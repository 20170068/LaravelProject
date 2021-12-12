<?php

namespace App\Http\Controllers;
use App\Models\Puerta;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PuertaController extends Controller
{
    public function GuardarDatosPuerta(){
        $response = Http::get('https://io.adafruit.com/api/v2/ValeriaGuapa/feeds/tempsen/data');
        $jsonData = $response->object();
        foreach($jsonData as $data){
            $model = new Puerta();
            $model ->id=$data->id;
            $model->value=$data->value;
            $model->save();
        }
    }
    public function VerDatosPuerta(){
        $response = Http::get('https://io.adafruit.com/api/v2/ValeriaGuapa/feeds/tempsen/data');
        return Puerta::all();
    }
}
