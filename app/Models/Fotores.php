<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotores extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table='fotores';
    public $timestamp=true;
    protected $fillable=['id','value'];
}
