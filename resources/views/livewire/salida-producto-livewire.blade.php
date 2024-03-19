<div class="py-12 px-10 dark:bg-gray-800">
    <div class="mx-5">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">Salida de productos</h1>
            
        </div>
        <div class="mt-5">
            <form wire:submit.prevent="store">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="producto_id">
                            Producto
                        </label>
                        <select wire:model="producto_id" class="form-select w-full">
                            <option value="">Seleccione un producto</option>
                            @foreach ($productos as $producto)
                                <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                            @endforeach
                        </select>
                        @error('producto_id') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="cantidad">
                            Cantidad
                        </label>
                        <input wire:model="cantidad" class="form-input w-full" type="number" placeholder="Ingrese la cantidad">
                        @error('cantidad') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-5">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>