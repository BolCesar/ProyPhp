@extends('layouts.plantilla')

@section('title', 'Detalle')

@section('content')
    <h1>Detalle del producto: {{ $producto->nombre }} </h1>

    <a href="{{ route('productos.edit', $producto->id) }}">Modificar el producto</a>

    @component('_components.detalle')
        @slot('nombre', $producto->nombre  )
        @slot('descripcion', $producto->descripcion  )
        @slot('precio', $producto->precio  )
        @slot('moneda', $producto->moneda  )
        @slot('disponible', $producto->disponible  )
    @endcomponent

    <a href="{{ route('productos') }}">Ir al listado</a>
@endsection
