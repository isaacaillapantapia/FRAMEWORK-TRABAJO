@extends('layouts.master')
@section('title','Sucursales')

@section('header')

@parent
@stop

@section('content')

<div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img src="https://www.elchiguirebipolar.net/wp/wp-content/uploads/2019/11/Los-Pollos-Hermanos-sorprenden-con-nueva-sede-en-Caracas670X351.jpg">
          <span class="card-title">Pollos Hermanos S.A.</span>
        </div>
        <div class="card-content">
          <p>Nos esforzamos por cumplir y superar las expectativas de nuestros clientes en cada experiencia de compra, tanto en nuestras tiendas como canales digitales. Nos preocupamos por mejorar la calidad de vida de nuestra comunidad y proveedores, siendo responsables con el cuidado del medio ambiente. </p>
        </div>
        <div class="card-action">
        </div>
      </div>
    </div>
  </div>

  


<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>Sucursales disponibles</option>
  <option value="1">Lo Prado</option>
  <option value="2">Maipu</option>
  <option value="3">Etacion Central</option>
</select>

<select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Productos disponibles </option>
  <option value="1">Papas Fritas Marca Lays</option>
  <option value="2">Bebida Coca Cola 1 Lts</option>
  <option value="3">Cervesa Stella Artois 330 cc</option>
</select>
<br>
<div class="d-grid gap-2">
  <button class="btn btn-primary" type="button">Consultar Stock Disponible</button>
</div>

<br>

@stop

@section('footer')


    
    @parent
@stop