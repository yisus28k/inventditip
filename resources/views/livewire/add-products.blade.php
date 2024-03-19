<div class="py-12 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:text-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="my-8 mx-5 text-lg">
                Añadir producto
            </div>
            <div class="mx-5">
                <form wire:submit.prevent="guardarProducto" autocomplete="off" class="max-w-5xl mx-auto">
                    @csrf
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div class="mb-5">
                            <label for="code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Código</label>
                            <input type="text" id="code" wire:model="codigo" maxlength="50" placeholder="Código del producto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                            <input type="text" id="name" wire:model="nombre" placeholder="Ingrese el nombre del producto" maxlength="50" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">
                            <label for="presentation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Presentación</label>
                            <input type="text" id="presentation" wire:model="presentacion" placeholder="Presentación del producto" maxlength="50" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-4 my-5 md:gap-6">
                        <div class="mb-5">
                            <label for="purchase_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio de compra</label>
                            <input type="number" id="purchase_price" wire:model="preciocompra" step="any" placeholder="Precio de compra" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:input="calcularPrecioVenta">
                        </div>
                        <div class="mb-5">
                            <label for="ganancia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ganancia (%)</label>
                            <input type="number" id="ganancia" wire:model="ganancia" placeholder="Ganancia" step="any" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">
                            <label for="sale_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio de venta</label>
                            <input type="number" id="purchase_price" wire:model="preciocompra" step="any" placeholder="Precio de compra" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:input="calcularPrecioVenta">
                        </div>
                        <div class="mb-5">
                            <label for="ganancia_pesos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ganancia (pesos)</label>
                            <input type="number" id="ganancia_pesos" wire:model="gananciapesos" readonly placeholder="Ganancia en pesos" step="any" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div class="mb-5">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoría</label>
                            <select id="category" wire:model="categoria" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Selecciona una categria</option>
                                <option value="1">Categoría 1</option>
                                <option value="2">Categoría 2</option>
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                            <input type="number" id="stock" wire:model="stock" placeholder="Stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">
                            <label for="stock_min" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock mínimo</label>
                            <input type="number" id="stock_min" wire:model="stockminimo" placeholder="Stock mínimo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>

                    <div class="flex mt-5 justify-end">
                        <button type="submit" wire:click.prevent="guardarProducto" wire:loading.attr="disabled" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-500 dark:focus:ring-offset-2">
                            <span wire:loading wire:target="guardarProducto" class="mr-2">
                                <svg aria-hidden="true" role="status" class="inline w-4 h-4 me-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB" />
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.119 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor" />
                                </svg>
                                Guardando...
                            </span>
                            <span wire:loading.remove>Guardar</span>
                        </button>
                        <button type="reset" class="ml-3 bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-500 dark:focus:ring-offset-2">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>