<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Led extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table='led';
    public $timestamp=true;
    protected $fillable=['id','value'];
}
