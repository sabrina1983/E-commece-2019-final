@extends('layouts/master')
@section('content')
<body>
<div class="container">
    <h3 class="display-4">Listado de productos</h3>
    <div class="wrapper">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            @forelse ($products as $product)
            <img src="/img/malla.jpg"  alt="..." class="img-responsive">
                <div class="caption">
                        {{$product->name}}
                    <p class="description">
                        {{$product->description}}
                    </p>
                <div class="clearfix">
                     <div class="pull-right price">{{$product->unit_price}}</div>
                        <a href="productDetail" class="btn btn-secondary pull-right" role="button">Detalles</a>
                        <a href="/carrito/add/{{$product->id}}" class="btn btn-success pull-right" role="button">Agregar al carrito</a>
                            @empty
                        <p>No hay productos para mostrar</p>    
                    @endforelse
                </div>
            </div>
        </div>
    </div>    
</div>
</div>
{{$products->links()}};
</body>
@endsection