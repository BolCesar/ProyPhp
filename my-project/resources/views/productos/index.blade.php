@extends('layouts.plantilla')

@section('title', 'Listado de productos')

@section('content')
    <h1>Página de productos</h1>

   @foreach ($productos as $p)
    @component('_components.ficha')
        @slot('title', $p->nombre)
        @slot('content')
            <strong>Descripcion:</strong>{{$p->descripcion}}
        @endslot
        @slot('id', $p->id)


    @endcomponent
   @endforeach
   {{$productos->links()}}
@endsection
