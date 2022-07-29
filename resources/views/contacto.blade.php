@extends('layouts.master')
@section('title','Contacto')

@section('content')


hello word {{$nombre}} tiene {{$edad}} años

<hr>

{{-- comentaario --}}

validaciones con if <hr>

<!-- @if(!is_null($edad))
La variable existe
@else
    La variable no existe
@endif  -->    

@if($edad >= 18)
    Es mayor de edad
@else
    Es menor de edad
@endif 

<hr>

Bucle for <br>

@for($i=1; $i <= 10; $i++)

{{'7x'.$i. '='.($i*7)}} <br>

@endfor
<hr>

Bucle while <br>

<?php $a= 1; ?>

@while($a <= 7)
    {{ 'recorrido de a= '. $a}} <br>

    <?php $a++; ?>

@endwhile {{-- aqui conbinamos php  --}} 

<hr>

@stop