@extends('layouts.master')
@section('title','Frutas-agrgar')


@section('header')
@parent

<h2>Nueva Fruta</h2>
<hr>

@stop

@section('content')
<div class="container">
<form method="post" action="{{route('guardarfruta' ,'guardarfrutaprecio ') }}">
  <div class="mb-3">
    <label for="exampleNombre" class="form-label">nombre</label>
    <input type="name" class="form-control" id="nombre" name="nombre" >
    
  </div>
  <div class="mb-3">
    <label for="exampleNumber" class="form-label">Precio</label>
    <input type="number" class="form-control" id="precio" name="precio">
  </div>
  
  <button type="submit" class="btn btn-primary">agregar</button>
  
  @if($errors->any())
  
  <div class="alert alert-danger">
    <ul>
    <br>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>

        @endforeach
    </ul>

  </div>
  @endif
</form>

</div>
<br>
@stop

@section('footer')
   
    @parent
@stop