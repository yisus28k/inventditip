<div class="py-12 px-10 dark:bg-gray-800">
    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <form  action="{{route('categorys.store')}}" method="post">
                @csrf
                <!-- <div class="grid md:grid-cols-2 md:gap-6"> -->
                    <div class="mb-5">
                        <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                <!-- </div> -->
                <div class="flex mt-8 justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-500 dark:focus:ring-offset-2">Guardar</button>
                    <button type="reset" class="ml-3 bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-500 dark:focus:ring-offset-2">Cancelar</button>
                </div>
            </form>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            @livewire('CategoryDatatable')
        </div>
    </div>
</div>