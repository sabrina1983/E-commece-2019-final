@extends('layouts.master')
@section('content')
<ul>
    <li>{{$product->name}}</li>
    <li>{{$product->description}}</li>
    <li>{{$product->unit_price}}</li>
</ul>   
@endsection