@extends('layouts.master')
@section('title','Login-Register')


@section('header')
@parent
@stop





@section('content')

<h2>Bienvenido </h2>
<h6>crea tu cuenta</h6>

<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Escribe aqui tu Nombre" id="first_name" type="text" class="validate">
          <label for="first_name">Nombres</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Escribe aqui tu Apellido" id="last_name" type="text" class="validate">
          <label for="last_name">Apellidos</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Nueva Clave</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Confirmar Clave</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <br>
<div class="d-grid gap-2">
  <button class="btn btn-primary" type="button">Registrarse</button>
</div>



<br>
      
    </form>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Ingresar a tu cuenta
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="staticBackdropLabel">Bienvenido <p>Si ya estás registrado en PollosHermano.cl puedes ingresar con el mismo mail y clave</p></h6> 
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     
      <div class="row">
    <form class="col s12">
     
        
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
     
    </form>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Ingresa</button>
      </div>
    </div>
  </div>
</div>

  </div>

  


@stop

@section('footer')
    
    @parent
@stop