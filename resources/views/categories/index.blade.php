<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between gap-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Categorías
            </h2>
            <a href="{{ route('categories.create') }}" class="rounded-md bg-indigo-600 px-4 py-2 text-white hover:bg-indigo-700">
                Nueva categoría
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if(session('success'))
                <div class="rounded-md bg-green-100 px-4 py-3 text-green-800">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 text-sm">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-3 text-left font-semibold text-gray-700">ID</th>
                                    <th class="px-4 py-3 text-left font-semibold text-gray-700">Nombre</th>
                                    <th class="px-4 py-3 text-left font-semibold text-gray-700">Descripción</th>
                                    <th class="px-4 py-3 text-left font-semibold text-gray-700">Productos</th>
                                    <th class="px-4 py-3 text-right font-semibold text-gray-700">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @forelse($categories as $category)
                                    <tr>
                                        <td class="px-4 py-3">{{ $category->id }}</td>
                                        <td class="px-4 py-3 font-medium">{{ $category->name }}</td>
                                        <td class="px-4 py-3">{{ $category->description ?? 'Sin descripción' }}</td>
                                        <td class="px-4 py-3">{{ $category->products_count }}</td>
                                        <td class="px-4 py-3 text-right space-x-2">
                                            <a href="{{ route('categories.edit', $category) }}" class="inline-flex rounded-md bg-amber-500 px-3 py-2 text-white hover:bg-amber-600">Editar</a>
                                            <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Eliminar esta categoría?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-white hover:bg-red-700">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-4 py-8 text-center text-gray-500">No hay categorías registradas.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>