<div class="py-12 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:text-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="my-8 mx-5 text-lg">
                Añadir producto
            </div>
            <div class="mx-5">
                <form method="POST" action="{{route('productos.store')}}" autocomplete="off" class="max-w-5xl mx-auto">
                    @csrf
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <div class="mb-5">
                                <label for="code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Código</label>
                                <input placeholder="B1001" name="code" type="text" id="code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <div class="mb-5">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                                <input placeholder="BALONCHETO" type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <div class="mb-5">
                                <label for="presentation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Presentación (kg)</label>
                                <input type="text" name="presentation" id="presentation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="12" required="">
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-4 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="purchase_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio de compra</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </span>
                                <input type="number" step="0.01" wire:model="purchasePrice" id="purchase_price" name="purchase_price" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="100">
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="ganancia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ganancia</label>
                            <div class="flex">
                                <input step="0.01" type="number" wire:model="ganancia" id="ganancia" name="ganancia" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="100">
                                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-percentage" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M17 17m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M7 7m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M6 18l12 -12" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="sale_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio de venta</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </span>
                                <input readonly step="0.01" type="number" wire:model="salePrice" id="sale_price" name="sale_price" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="100">
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="ganancia_pesos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ganancia en pesos</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </span>
                                <input readonly step="0.01" type="number" wire:model="ganancia_pesos" id="ganancia_pesos" name="ganancia_pesos" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="100">
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div class="relative z-0 w-full my-5 group">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona una categoría</label>
                            <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Selecciona una categria</option>
                                @foreach($categorys as $category)
                                <option value="{{$category->name}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="relative z-0 w-full my-5 group">
                            <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                            <div class="flex">
                                <input type="number" id="stock" name="stock" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="100">
                            </div>
                        </div>
                        <div class="relative z-0 w-full my-5 group">
                            <label for="stock_min" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock mínimo</label>
                            <div class="flex">
                                <input type="number" id="stock_min" name="stock_min" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="20">
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end my-5">
                        <button type="reset" class="bg-green-600-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cancelar</button>
                        <button type="submit" class="bg-blue-500 mr-5 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const purchasePriceInput = document.getElementById("purchase_price");
            const gananciaInput = document.getElementById("ganancia");
            const salePriceInput = document.getElementById("sale_price");
            const gananciapesosInput = document.getElementById("ganancia_pesos");

            purchasePriceInput.addEventListener("input", calculateSalePrice);
            gananciaInput.addEventListener("input", calculateSalePrice);
            gananciapesosInput.addEventListener("input", calculateganancia);

            function calculateSalePrice() {
                const purchasePrice = parseFloat(purchasePriceInput.value);
                const ganancia = parseFloat(gananciaInput.value);
                const salePrice = purchasePrice + (purchasePrice * ganancia / 100);
                salePriceInput.value = salePrice.toFixed(2);

                const ganancia_pesos = salePrice - purchasePrice;
                gananciapesosInput.value = ganancia_pesos.toFixed(2);
            }
        });
    </script>

</div>