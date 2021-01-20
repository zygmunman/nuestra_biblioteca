<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

     protected $table = 'roles';
     protected $fillable = ['nombre'];
     protected $guarded = ['id'];

}
