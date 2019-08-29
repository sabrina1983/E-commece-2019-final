@extends('layouts.master')
@section('content')
<div class="container">
    <form class="form" action="/addProduct" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" value="">
        </div>
        <div class="form-group">
            <label for="unit_price">Precio de venta</label>
            <input type="text" class="form-control" name="unit_price" value="">
        </div>
        <div class="form-group">
            <label for="unit_cost">Precio de costo</label>
            <input type="text" class="form-control" name="unit_cost" value="">
        </div>
        <div class="form-group">
            <label for="category_id">Categoria</label>
            <input type="text" class="form-control" name="category_id" value="">
        </div>
        <div class="form-group">
            <label for="description">Descripcion</label>
            <input type="text" class="form-control" name="description" value="">
        </div>
        <div class="custom-file">
                <input type="file" name="avatar" class="custom-file-input" value="" />
                <label class="custom-file-label" for="validatedCustomFile" style="text-align: left;">Seleccione un avatar</label>
              <div class="invalid-feedback">Example invalid custom file feedback</div>
               <span><?= (isset($errores['avatar'])) ? $errores["avatar"] : "" ?></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="" value="Agregar producto">
        </div>
    </form>
</div>
@endsection