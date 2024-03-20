<div class="py-12 px-10 dark:bg-gray-800">
    <!-- descargar lista de precios -->
    <div class="flex justify-end mb-5">
        <a href="{{ route('productos.pdf') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Descargar lista de precios
        </a>
    </div>
    <div class="relative z-0 w-full mb-5 group">
        @livewire('ProductosDatatable')
    </div>
</div>