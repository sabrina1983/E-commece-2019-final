@extends('layouts.master')
@section('content')
<div class="container">
    <h3>Carrito de compras</h3>
    {{-- dd(session('carrito.products')) --}}
    <ul>
        @forelse ($carrito as $producto)
            <li>{{$producto->id}}</li>
            <li><a href="#"><i class="fas fa-trash-alt"></i></a></li>
            <li>{{$producto->name}}</li>
            @empty
            <p>No hay productos para mostrar</p>
        @endforelse
    </ul>
</div>
@endsection