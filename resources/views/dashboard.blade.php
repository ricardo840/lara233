<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between gap-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-6">
                    <div class="space-y-2">
                        <p class="text-lg font-semibold">Sistema CRUD </p>
                        <p class="text-sm text-gray-600 dark:text-gray-300">
                            Aquí administras categorías y productos, y también entras a la vista de Pokémon para consultar la lista simple con botón de detalles.
                        </p>
                    </div>

                    <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
