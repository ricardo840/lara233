
@foreach ($enlace as $tj)

    <di> 
        <h3>
            {{ $tj['name']['english'] }}
        </h3>

        <a href="{{ route('pokemon-detalles', $tj['id']) }}">
            <button>Detalles</button>
        </a>
    </di>
@endforeach

<!-- <h1>Lista de datos de la API</h1>



<style>
    .poke-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 10px;
        margin-top: 16px;
    }

    .poke-btn {
        width: 100%;
        border: 0;
        padding: 12px;
        border-radius: 10px;
        background: #1f2937;
        color: #fff;
        cursor: pointer;
        font-weight: 600;
    }

    .poke-btn:hover {
        background: #111827;
    }

    .modal-overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.6);
        z-index: 999;
        padding: 20px;
    }

    .modal-overlay.is-open {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .modal-card {
        background: #fff;
        border-radius: 12px;
        padding: 18px;
        width: min(680px, 100%);
        max-height: 90vh;
        overflow: auto;
        color: #111827;
    }

    .modal-close {
        border: 0;
        border-radius: 8px;
        padding: 8px 12px;
        background: #ef4444;
        color: #fff;
        cursor: pointer;
        margin-top: 12px;
    }
</style>

<div class="poke-list">
@forelse ($enlace as $pokemon)
        <button
            type="button"
            class="poke-btn"
            onclick="openPokemonModal('pokemon-modal-{{ $pokemon['id'] }}')"
        >
            Ver #{{ $pokemon['id'] }} - {{ $pokemon['name']['english'] }}
        </button>
@empty
    <p>No hay datos disponibles.</p>
@endforelse
</div>

@foreach ($enlace as $pokemon)
    <div
        id="pokemon-modal-{{ $pokemon['id'] }}"
        class="modal-overlay"
        onclick="closeOnOverlay(event, 'pokemon-modal-{{ $pokemon['id'] }}')"
    >
        <div class="modal-card" role="dialog" aria-modal="true" aria-labelledby="pokemon-title-{{ $pokemon['id'] }}">
            <h2 id="pokemon-title-{{ $pokemon['id'] }}">#{{ $pokemon['id'] }} - {{ $pokemon['name']['english'] }}</h2>
            <p><strong>Nombre japonés:</strong> {{ $pokemon['name']['japanese'] }}</p>
            <p><strong>Tipos:</strong> {{ implode(', ', $pokemon['type']) }}</p>
            <p><strong>Especie:</strong> {{ $pokemon['species'] }}</p>
            <p><strong>Descripción:</strong> {{ $pokemon['description'] }}</p>

            <p><strong>Stats base:</strong></p>
            <ul>
                <li>HP: {{ $pokemon['base']['HP'] }}</li>
                <li>Attack: {{ $pokemon['base']['Attack'] }}</li>
                <li>Defense: {{ $pokemon['base']['Defense'] }}</li>
                <li>Sp. Attack: {{ $pokemon['base']['Sp. Attack'] }}</li>
                <li>Sp. Defense: {{ $pokemon['base']['Sp. Defense'] }}</li>
                <li>Speed: {{ $pokemon['base']['Speed'] }}</li>
            </ul>

            <img src="{{ $pokemon['image']['thumbnail'] }}" alt="{{ $pokemon['name']['english'] }}" width="120">

            <br>
            <button type="button" class="modal-close" onclick="closePokemonModal('pokemon-modal-{{ $pokemon['id'] }}')">Cerrar</button>
        </div>
    </div>
@endforeach

<script>
    function openPokemonModal(id) {
        const modal = document.getElementById(id);
        if (modal) {
            modal.classList.add('is-open');
            document.body.style.overflow = 'hidden';
        }
    }

    function closePokemonModal(id) {
        const modal = document.getElementById(id);
        if (modal) {
            modal.classList.remove('is-open');
            document.body.style.overflow = '';
        }
    }

    function closeOnOverlay(event, id) {
        if (event.target.id === id) {
            closePokemonModal(id);
        }
    }

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            document.querySelectorAll('.modal-overlay.is-open').forEach(function (modal) {
                modal.classList.remove('is-open');
            });
            document.body.style.overflow = '';
        }
    });
</script> -->

