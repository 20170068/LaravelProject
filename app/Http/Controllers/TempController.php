<?php

namespace App\Http\Controllers;
use App\Models\Temp;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TempController extends Controller
{
    public function GuardarData(){
        $response = Http::get('https://io.adafruit.com/api/v2/ValeriaGuapa/feeds/tempsen/data');
        $jsonData = $response->object();
        foreach($jsonData as $data){
            $model = new Temp();
            $model ->id=$data->id;
            $model->value=$data->value;
            $model->save();
        }
    }


    public function VerData(){
        $response = Http::get('https://io.adafruit.com/api/v2/ValeriaGuapa/feeds/tempsen/data');
        return Hum::all();
    }
}
