<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function list() {
        dd("Esto es un echo de la funcion listar en el controlador de Usuarios, esta funcion deberia retornar la lista de los usuarios leyendo desde la tabla faq de la base de datos.");
    }

    public function roles() {
    return $this->belongsToMany('\App\Role');
    }
    public function hasRole($name) {
    foreach ($this->roles as $role) 
    {
        if ($role->name == $name) return true;
    }

    return false;
    }
}
