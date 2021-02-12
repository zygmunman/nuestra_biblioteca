<?php

namespace App\Models\Seguridad;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Admin\Rol;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class Usuario extends Authenticatable
{
    protected $remember_token = false;
    protected $table = 'usuarios';
    protected $fillable = ['usuario', 'nombre', 'email', 'password'];


    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'usuarios_roles');
    }

    public function setSession($roles)
    {
        if (count($roles) == 1) {
            Session::put(
                [
                    'rol_id' => $roles[0]['id'],
                    'rol_nombre' => $roles[0]['nombre'],
                    'usuario' => $this->usuario,
                    'usuario_id' => $this->id,
                    'nombre_usuario' => $this->nombre
                ]
            );
        }
    }
    public function setPasswordAttribute($pass)
    {
        $this->attributes['password'] = Hash::make($pass);
    }
}
