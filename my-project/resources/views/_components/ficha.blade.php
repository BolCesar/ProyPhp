<div style = "border: 2px solid black; border-radius: 10px; padding 15 px; margin: 10px; background: silver;">
    <h2>{{ $title }}</h2>
    <p>{{ $content }}</p>
    <a href="{{ route('productos.show', $id ) }}">Ver detalle de: {{ $title }}</a>
</div>
