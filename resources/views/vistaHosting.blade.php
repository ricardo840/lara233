<div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
    <div class="mb-6 flex items-end justify-between gap-4">
        <div>
            <h1 class="text-3xl font-bold text-slate-900">Lista de Pokémon</h1>
            
        </div>
        <a href="{{ route('dashboard') }}" class="rounded-md bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-700">
            Volver al dashboard
        </a>
    </div>

    @if (!empty($enlace))
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($enlace as $pokemon)
                <article class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">#{{ $pokemon['id'] }}</p>
                    <h3 class="mt-1 text-lg font-bold text-slate-900">{{ $pokemon['name']['english'] ?? 'Sin nombre' }}</h3>

                    <div class="mt-4">
                        <button type="button" onclick="window.location.href='{{ route('pokemon-detalles', $pokemon['id']) }}'" class="inline-flex flex-1 items-center justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-700">
                            Detalles
                        </button>
                    </div>
                </article>
            @endforeach
        </div>
    @else
        <div class="rounded-lg border border-amber-200 bg-amber-50 p-4 text-amber-800">
            No hay datos disponibles desde la API.
        </div>
    @endif
</div>

