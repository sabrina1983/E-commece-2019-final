<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\User;
use App\Product;

class CartController extends Controller
{
  //Método que permite mostrar todos los productos del carrito
  public function index()
  {
      $carrito = session('carrito.products');
      return view('cart')->with('carrito', $carrito);
  }
  
  // Método que permite agregar productos al carrito usando la session
  public function add($id)
  {
      $product = collect(session('carrito.products'));
      $product = Product::find($id);
      $product[$product->id]=$product;
      session()->push('carrito.products', $product);
      $limit = 10;
      $product = Product::make()->paginate($limit);
      return redirect('products');
  }

  public function remove($id)
  {
      //Método que permite eliminar un producto del carrito    
      session()->pull('carrito.products' . $id, "default");
      return view('perfil');
  }
  
  public function flush(Request $request)
  {
      //Método que permite eliminar todos los productos del carrito
      $request->session()->flush();
      return redirect('products');
  }

  public function checkout()
  {
      //Método que permite efectuar la compra 
      $user = User::all();
      $product = Product::all();
      return view('carrito.checkout')->with('user',$user)
                                      ->with('product',$product);
  }
}













    //public function list() {
      //  dd("Esto es un echo de la funcion listar en el controlador del Carrito, esta funcion deberia retornar la lista de los productos agregados al carrito por el usuario, dando la posibilidad de editar el contenido del mismo.");}

    //    public function __construct()
      //  {
        //  if(!\Session::has('cart')) \Session::put('cart', array());
        //}

     //Esto deberia mostrar el carrito
    //public function show()
    //{
      //return \Session::get('list');
    //}
    //public function list(){
    //  $cart = Cart::all();

     // $vac = compact('cart');

     // return view ('cart', $vac);
    //  }
    
     //}

