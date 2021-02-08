<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{

    protected $table = 'permisos';
    protected $fillable = ['nombre', 'slug'];
    protected $guarded = ['id'];


    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'permisos_roles', 'permiso_id', 'rol_id');
    }
}
