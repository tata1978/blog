<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    /* protected $fillable=['name','descripcion','categoria'];*///campos permitidos y se ignora los campos protegidos

    protected $guarded=[];//aca colocamos los campos protegidos e ignorar los campos permitidos
    
}