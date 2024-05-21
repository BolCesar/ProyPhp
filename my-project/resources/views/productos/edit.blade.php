@extends('layouts.plantilla')

@section('title', 'Modificar')

@section('content')
    <h1>Modificar Producto</h1><br/>


    @component('_components.formulario')
        @slot('producto', $producto  )
    @endcomponent

@endsection
