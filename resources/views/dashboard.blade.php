<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <p class="text-xl font-bold">Tere tulemast, {{ auth()->user()->name }}</p>
        </h2>
    </x-slot>

    
    <div class="pt-10 flex justify-center">
        @include('components.logo')
    </div>
    <div class="flex justify-center pt-10">
        <p class="text-5xl font-bold">Saarte Liinid Logiraamat</p>
    </div>
    <div>
        <p class="flex justify-center pt-10 text-2xl italic">Tere tulemast Saarte Liinide sadamahaldussüsteemi</p>
    </div>

</x-app-layout>
