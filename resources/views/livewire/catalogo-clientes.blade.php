<div class="py-12 px-10 dark:bg-gray-800">
    <!-- <div class="grid md:grid-cols-2 md:gap-6"> -->
    <div class="relative z-0 w-full mb-5 group">
        <form autocapitalize="characters" autocomplete="off" action="clientes.store" method="post">
            @csrf
            <div class="grid md:grid-cols-3 md:gap-6">
                <div class="mb-5">
                    <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                    <input type="text" wire:model="name" maxlength="50" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="bussines" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del negocio</label>
                    <input type="text" wire:model="business_name" maxlength="50" name="business_name" id="business_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="negocio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de negocio</label>
                    <input type="text" wire:model="negocio" maxlength="50" name="negocio" id="negocio" placeholder="Ej: Mesita de dulces" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-5">
                    <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero de teléfono</label>
                    <input type="tel" wire:model="cell_phone" maxlength="10" name="cell_phone" id="cell_phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dirección</label>
                    <input type="text" wire:model="address" id="address" maxlength="50" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="mb-5">
                    <label for="colonia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Colonia</label>
                    <input type="text" wire:model="colonia" id="colonia" maxlength="50" name="colonia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="horario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Horario</label>
                    <input type="text" wire:model="horario" id="horario" maxlength="50" name="horario" placeholder="ej: 12:00 PM - 4:00 PM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="flex mt-5 justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-500 dark:focus:ring-offset-2">Guardar</button>
                <button type="reset" class="ml-3 bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-500 dark:focus:ring-offset-2">Cancelar</button>
            </div>
        </form>
    </div>
    <div class="relative z-0 w-full my-10 group">
        @livewire('ClientesDatatable')
    </div>
    <!-- </div> -->
</div>