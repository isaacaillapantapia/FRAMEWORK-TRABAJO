@extends('layouts.master')
@section('title','Frutas')


@section('header')
<h2>Listado de Frutas </h2>
@stop

@section('content')


<div class="container">
   
    <hr>
    @foreach($frutas as $fruta) {{--guarda frutas en una variable --}}
    <p> {{ $fruta }}</p>
    @endforeach
</div>

@stop

@section('footer')
    <h4>Gracias por visitarnos</h4>
    @parent
@stop