<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    //public function list() {
    //    dd ("Esto es un echo de la funcion listar en el controlador de Products, esta funcion deberia retornar la lista de los productos leyendo desde la tabla productos de la base de datos.");
    //}

    public function list(){
        $products = Product::paginate(5);

        $vac = compact('products');

        return view ('products', $vac);
    }

    public function detail($id) {
        
        $product = Product::find($id);

        $vac = compact('product');

        return view('productDetail', $vac);
    }
        
    //INTENTO DE FUNCION PARA UNA VISTA POR CATEGORIA.
    //public function cat($category_id) {

    //    $product = Product::where('category_id', '>', 0)
    //        ->orderBy('category_id')
    //        ->get();
    //    $vac = compact('product');

    //    return view('productCategories', $vac);
    //}

    public function add(Request $req) {
        
        $newProduct = new Product();
        
        $newProduct->name = $req['name'];
        $newProduct->unit_price = $req['unit_price'];
        $newProduct->unit_cost = $req['unit_cost'];
        $newProduct->category_id = $req['category_id'];
        $newProduct->description = $req['description'];

        $newProduct->save();
        
        return redirect('/products');
    }
}
