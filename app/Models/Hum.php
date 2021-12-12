<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hum extends Model
{
    use HasFactory;
    //primary key (opcional)
    protected $primaryKey='id';
    protected $table='hum';
    public $timestamp=true;
    protected $fillable=['id','value'];
}
