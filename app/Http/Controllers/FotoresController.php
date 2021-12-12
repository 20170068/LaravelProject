<?php

namespace App\Http\Controllers;
use App\Models\Fotores;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class FotoresController extends Controller
{
    public function GuardarDatosFot(){
        $response = Http::get('https://io.adafruit.com/api/v2/ValeriaGuapa/feeds/tempsen/data');
        $jsonData = $response->object();
        foreach($jsonData as $data){
            $model = new Fotores();
            $model ->id=$data->id;
            $model->value=$data->value;
            $model->save();
        }
    }
    public function VerDatosFot(){
        $response = Http::get('https://io.adafruit.com/api/v2/ValeriaGuapa/feeds/tempsen/data');
        return Fotores::all();
    }
}
