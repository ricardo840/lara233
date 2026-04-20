<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Pokemon</title>
</head>
<body>
    <h1>
        Detalles de {{ $detalle['name']['english'] ?? 'Pokemon' }} (#{{ $detalle['id'] ?? '' }})
    </h1>

    <ul style="list-style: none; padding: 0; margin: 0; line-height: 1.8;">
        <li><strong>ID:</strong> {{ $detalle['id'] ?? '' }}</li>
        <li><strong>Nombre (EN):</strong> {{ $detalle['name']['english'] ?? '' }}</li>
        <li><strong>Nombre (JP):</strong> {{ $detalle['name']['japanese'] ?? '' }}</li>
        <li><strong>Especie:</strong> {{ $detalle['species'] ?? '' }}</li>
        <li><strong>Descripcion:</strong> {{ $detalle['description'] ?? '' }}</li>
        <li><strong>Tipo(s):</strong> {{ isset($detalle['type']) ? implode(', ', $detalle['type']) : '' }}</li>
        <li><strong>HP:</strong> {{ $detalle['base']['HP'] ?? '' }}</li>
        <li><strong>Attack:</strong> {{ $detalle['base']['Attack'] ?? '' }}</li>
        <li><strong>Defense:</strong> {{ $detalle['base']['Defense'] ?? '' }}</li>
        <li><strong>Sp. Attack:</strong> {{ $detalle['base']['Sp. Attack'] ?? '' }}</li>
        <li><strong>Sp. Defense:</strong> {{ $detalle['base']['Sp. Defense'] ?? '' }}</li>
        <li><strong>Speed:</strong> {{ $detalle['base']['Speed'] ?? '' }}</li>
    </ul>

    @if (!empty($detalle['image']['thumbnail']))
        <div style="margin-top: 14px;">
            <img
                src="{{ $detalle['image']['thumbnail'] }}"
                alt="{{ $detalle['name']['english'] ?? 'Pokemon' }}"
                style="width: 150px; height: auto;"
            >
        </div>
    @endif

    <div style="margin-top: 14px;">
        <a href="{{ route('hosting') }}">
            <button>Regresar</button>
        </a>
    </div>
</body>
</html>
