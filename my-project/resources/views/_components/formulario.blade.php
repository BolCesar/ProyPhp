@php
    use App\Models\Producto;

    $modoCreacion = true;
    if (isset($producto->nombre)) {
        $modoCreacion = false;
    }

    $rutaAction = route('productos.store');
    if(!$modoCreacion){
        $rutaAction = route('productos.update', $producto);
    }
@endphp

<form action = " {{$rutaAction}}" method="post">

    @csrf

    @if(!$modoCreacion)
        @method('put')
    @endif


    <label>Nombre:
            <input type="text" name ="nombre" value="{{$producto->nombre}}"">
    </label>

    <label>descripcion:
            <input type="text" name ="descripcion" value="{{$producto->descripcion}}"">
    </label>

    <label>precio:
            <input type="number" name ="precio" value="{{$producto->precio}}"">
    </label>

    <fieldset>
        <legend>Moneda:</legend>
        <label>Euro
            <input type="radio" name ="moneda" id="euro" value="euro" @checked($producto->moneda=="euro")/>
        </label>
        <label>Dolar
            <input type="radio" name ="moneda" id="dolar" value="dolar" @checked($producto->moneda=="dolar")/>
        </label>
    <fieldset>

    <label>Disponible:
        <input type="checkbox"  name ="disponible"  @checked($producto->disponible)/>
    </label>

    <br/>
    <button type="submit">Enviar</button>
</form>
