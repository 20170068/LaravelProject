<?php

namespace App\Http\Controllers;
use App\Models\Led;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LedController extends Controller
{
    public function GuardarDa(){
        $response = Http::get('https://io.adafruit.com/api/v2/ValeriaGuapa/feeds/led/data');
        $jsonData = $response->object();
        foreach($jsonData as $data){
            $model = new Led();
            $model->id=$data->id;
            $model->value=$data->value;
            $model->save();
        }
    }


    public function VerDa(){
        $response = Http::get('https://io.adafruit.com/api/v2/ValeriaGuapa/feeds/led/data');
        return Led::all();
    }

}
