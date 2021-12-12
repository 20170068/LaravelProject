<?php

namespace App\Http\Controllers;
use App\Models\Ultrasonico;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class UltrasonicoController extends Controller
{
    public function getdata(){
        $response = Http::get('https://io.adafruit.com/api/v2/ValeriaGuapa/feeds/ultra/data');
        $jsonData = $response->object();
        foreach($jsonData as $data){
            $model = new Ultrasonico();
            $model ->id=$data->id;
            $model->value=$data->value;
            $model->save();
        }
    }


    public function Verdat(){
        $response = Http::get('https://io.adafruit.com/api/v2/ValeriaGuapa/feeds/ultra/data');
        return Ultrasonico::all();
    }
}