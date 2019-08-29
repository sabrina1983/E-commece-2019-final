<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function list() {
        dd ("Esto es un echo de la funcion detalle en el controlador de ProductDetail, esta funcion deberia retornar el detalle del producto seleccionado en la vista de Products leyendo desde la tabla productos de la base de datos.");
    }
}
