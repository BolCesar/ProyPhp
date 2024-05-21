@php
use App\Models\Producto;

@endphp

@extends('layouts.plantilla')

@section('title', 'Crear')

@section('content')
    <h1>Se va a crear un producto</h1><br/>

    @component('_components.formulario')
        @slot('producto', Producto::createEmpty()  )
    @endcomponent

@endsection
