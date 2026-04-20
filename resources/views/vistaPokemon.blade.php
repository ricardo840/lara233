<h1>Lista de datos de la API</h1>

@foreach ($enlace as $traducida)
    <div style="background-color: rgb(90, 90, 90); margin-bottom: 16px; padding: 12px; border-radius: 8px; color: #fff;">
        <h2 style="margin-top: 0;">{{ $traducida['name'] ?? 'Sin nombre' }} ({{ $traducida['alias'] ?? 'sin-alias' }})</h2>

        <ul style="list-style: none; padding: 0; margin: 0; line-height: 1.6;">
            <li><strong>id:</strong> {{ $traducida['id'] ?? '' }}</li>
            <li><strong>national:</strong> {{ $traducida['national'] ?? '' }}</li>
            <li><strong>name:</strong> {{ $traducida['name'] ?? '' }}</li>
            <li><strong>alias:</strong> {{ $traducida['alias'] ?? '' }}</li>
            <li><strong>form:</strong> {{ $traducida['form'] ?? '' }}</li>
            <li><strong>formalias:</strong> {{ $traducida['formalias'] ?? '' }}</li>
            <li><strong>published:</strong> {{ $traducida['published'] ?? '' }}</li>
            <li><strong>genid:</strong> {{ $traducida['genid'] ?? '' }}</li>
            <li><strong>releaseid:</strong> {{ $traducida['releaseid'] ?? '' }}</li>
            <li><strong>type1:</strong> {{ $traducida['type1'] ?? '' }}</li>
            <li><strong>type2:</strong> {{ $traducida['type2'] ?? '' }}</li>
            <li><strong>hp:</strong> {{ $traducida['hp'] ?? '' }}</li>
            <li><strong>attack:</strong> {{ $traducida['attack'] ?? '' }}</li>
            <li><strong>defense:</strong> {{ $traducida['defense'] ?? '' }}</li>
            <li><strong>spatk:</strong> {{ $traducida['spatk'] ?? '' }}</li>
            <li><strong>spdef:</strong> {{ $traducida['spdef'] ?? '' }}</li>
            <li><strong>speed:</strong> {{ $traducida['speed'] ?? '' }}</li>
            <li><strong>fullname:</strong> {{ $traducida['fullname'] ?? '' }}</li>
            <li><strong>img:</strong> {{ $traducida['img'] ?? '' }}</li>
        </ul>

        @if (!empty($traducida['img']))
            <div style="margin-top: 10px;">
                <img src="{{ $traducida['img'] }}" alt="{{ $traducida['name'] ?? 'pokemon' }}" style="max-width: 150px; height: auto; border-radius: 6px;">
            </div>
        @endif
    </div>

@endforeach