<div style = "border: 2px solid black; border-radius: 10px; padding 15 px; margin: 10px; background: silver;">
    <p><strong>Nombre:</strong>{{ $nombre }}</p>
    <p><strong>Descripción:</strong>{{ $descripcion }}</p>
    <p><strong>Precio:</strong>{{ $precio }} {{ $moneda }}</p>
    <p><strong>Estado:</strong>
        @if($disponible)
            Producto disponible
        @else
            Producto no disponible
        @endif
</div>
