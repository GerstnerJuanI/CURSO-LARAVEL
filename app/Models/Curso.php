<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    // protected $fillable = ['name','descripcion','categoria']; // se colocan los campos permitidos
    protected $guarded= [];// se colocan los campos protegidos
    
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //protected $table = "users";

}
