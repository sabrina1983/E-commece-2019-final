@extends('layouts.master')
@section('content')
<div class="container">
    <form class="" action="/addQuestion" method="POST">
        @csrf
        <div class="form-group">
            <label for="question">Pregunta</label>
            <input type="text" class="form-control" name="question" value="">
        </div>
        <div class="form-group">
            <label for="answer">Respuesta</label>
            <input type="text" class="form-control" name="answer" value="">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="" value="Agregar pregunta">
        </div>
    </form>
</div>
@endsection