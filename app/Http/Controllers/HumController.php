<?php

namespace App\Http\Controllers;
use App\Models\Hum;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HumController extends Controller
{
    public function GuardarDatos(){
        $response = Http::get('https://io.adafruit.com/api/v2/ValeriaGuapa/feeds/humedadsen/data');
        $jsonData = $response->object();
        foreach($jsonData as $data){
            $model = new Hum();
            $model ->id=$data->id;
            $model->value=$data->value;
            $model->save();
        }
    }

    public function VerDatos(){
        $response = Http::get('https://io.adafruit.com/api/v2/ValeriaGuapa/feeds/humedadsen/data');
        return Hum::all();
    }
}
