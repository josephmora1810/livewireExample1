<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @livewire('create-post',[
                'title' => "Hola mundo desde el array",
                'user' => 1
            ])
            <h2>Hola Mundo desde la vista dashboard.blade.php</h2>
        </div>
    </div>
</x-app-layout>
