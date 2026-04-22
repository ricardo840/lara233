<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between gap-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Productos
            </h2>
            <a href="{{ route('products.create') }}" class="rounded-md bg-emerald-600 px-4 py-2 text-white hover:bg-emerald-700">
                Nuevo producto
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
                                    <th class="px-4 py-3 text-left font-semibold text-gray-700">Precio</th>
                                    <th class="px-4 py-3 text-left font-semibold text-gray-700">Categoría</th>
                                    <th class="px-4 py-3 text-right font-semibold text-gray-700">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @forelse($products as $product)
                                    <tr>
                                        <td class="px-4 py-3">{{ $product->id }}</td>
                                        <td class="px-4 py-3 font-medium">{{ $product->name }}</td>
                                        <td class="px-4 py-3">${{ number_format($product->price, 2) }}</td>
                                        <td class="px-4 py-3">{{ $product->category?->name ?? 'Sin categoría' }}</td>
                                        <td class="px-4 py-3 text-right space-x-2">
                                            <a href="{{ route('products.edit', $product) }}" class="inline-flex rounded-md bg-amber-500 px-3 py-2 text-white hover:bg-amber-600">Editar</a>
                                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Eliminar este producto?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-white hover:bg-red-700">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-4 py-8 text-center text-gray-500">No hay productos registrados.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>