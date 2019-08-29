@extends('layouts.master')
@section('content')
<div id="cart-container">
  <h1>Items en tu carrito:</h1>
  <!-- Item -->
  <div id="item1" class="cart-item">
  <div class="pic"><img src="#" width="80" height="80" alt="Some photo" /></div>
  <div class="item-details">
    <h3>Name of product</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, illum officiis voluptates, incidunt minima magni beatae est sint ratione illo ipsa, dolores tempora nisi a aliquam. Excepturi magni aliquid sunt.</p>
  </div>
  <div class="item-quantity"><input type="number" name="quantity" min="1" placeholder="1"></div>
  <div class="item-actions">
    <ul>
      <li><button><a href="#">Quitar Item</a></button></li>
      <li><button><a href="#">Mas detalles</a></button></li>
    </ul>
  </div>
  </div>
  <!-- Fin del Item -->
  <hr />
  <!-- Item -->
  <div id="item2" class="cart-item">
      <div class="pic"><img src="#" width="80" height="80" alt="Some photo" /></div>
      <div class="item-details">
        <h3>Name of product</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, illum officiis voluptates, incidunt minima magni beatae est sint ratione illo ipsa, dolores tempora nisi a aliquam. Excepturi magni aliquid sunt.</p>
      </div>
      <div class="item-quantity"><input type="number" name="quantity" min="1" placeholder="1"></div>
      <div class="item-actions">
        <ul>
          <li><button><a href="#">Quitar Item</a></button></li>
          <li><button><a href="#">Mas detalles</a></button></li>
        </ul>
      </div>
  </div>
      <!-- Fin del Item -->
      <hr />
      <!-- Item -->
  <div id="item3" class="cart-item">
      <div class="pic"><img src="#" width="80" height="80" alt="Some photo" /></div>
      <div class="item-details">
        <h3>Name of product</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, illum officiis voluptates, incidunt minima magni beatae est sint ratione illo ipsa, dolores tempora nisi a aliquam. Excepturi magni aliquid sunt.</p>
      </div>
      <div class="item-quantity"><input type="number" name="quantity" min="1" placeholder="1"></div>
      <div class="item-actions">
        <ul>
          <li><button><a href="#">Quitar Item</a></button></li>
          <li><button><a href="#">Mas detalles</a></button></li>
        </ul>
      </div>
    </div>
      <!-- Fin del Item -->
    <hr />
    <div id="final-action">
      <button>Proceder a comprar >></button>
      <button>Cambiar método de pago</button>
      <button>Limpiar el carro</button>
    </div>
  </div>
</div>
  @endsection