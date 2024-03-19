<div class="py-12 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:text-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="my-8 mx-5 text-lg">
                Agregar inventario
            </div>
            <div class="mx-5">
                <form method="POST" action="{{route('productos.store')}}" autocomplete="off" class="max-w-5xl mx-auto">
                    @csrf
                    <div class="mb-5">
                        <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del producto</label>
                        <input type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <!-- botones guardar y cancelar -->
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- resultados de busqueda -->
    
</div>