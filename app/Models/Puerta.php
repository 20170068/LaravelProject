<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puerta extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table='puerta';
    public $timestamp=true;
    protected $fillable=['id','value'];
}
