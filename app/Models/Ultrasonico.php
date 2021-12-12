<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ultrasonico extends Model
{
    use HasFactory;
    //primary key (opcional)
    protected $primaryKey='id';
    protected $table='ultrasonico';
    public $timestamp=true;
    protected $fillable=['id','value'];
}
