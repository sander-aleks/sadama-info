<x-app-layout>
    <x-slot name="header">
        <div class="flex max-w-3xl">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <p class="text-xl font-bold">Tere tulemast, {{ auth()->user()->name }}</p>
            </h2>
        </div>
        <div class="flex justify-center">
            <x-input id="" class="block mt-1 w-96" type="text" placeholder="" name="search" :value="old('name')" />
            <x-button class="ml-2 mt-1">
                {{ __('Otsi') }}
            </x-button>
        </div>
    </x-slot>
    <div class="w-full">
        <div class="grid grid-cols-2 items-center gap-x-8">
            <x-harbor-button class="mt-3 justify-self-end">Kuivastu sadam</x-harbor-button>
            <x-harbor-button class="mt-3">Virtsu sadam</x-harbor-button>
            <x-harbor-button class="justify-self-end">Roomassaare sadam</x-harbor-button>
            <x-harbor-button>Heltermaa sadam</x-harbor-button>
            <x-harbor-button class="justify-self-end">Rohuküla sadam</x-harbor-button>
            <x-harbor-button>Sõru sadam</x-harbor-button>
            <x-harbor-button class="justify-self-end">Sviby sadam</x-harbor-button>
            <x-harbor-button>Ringsu sadam</x-harbor-button>
            <x-harbor-button class="justify-self-end">Triigi sadam</x-harbor-button>
            <x-harbor-button>Kihnu sadam</x-harbor-button>
            <x-harbor-button class="justify-self-end">Munalaiu sadam</x-harbor-button>
            <x-harbor-button>Abruka sadam</x-harbor-button>
            <x-harbor-button class="justify-self-end">Vikati sadam</x-harbor-button>
            <x-harbor-button>Papissaare sadam</x-harbor-button>
            <x-harbor-button class="justify-self-end">Laaksaare sadam</x-harbor-button>
            <x-harbor-button>Piirissaare sadam</x-harbor-button>
            <x-harbor-button class="justify-self-end">Naissaare sadam</x-harbor-button>
            <x-harbor-button>Manilaiu sadam</x-harbor-button>
        </div>
    </div>

</x-app-layout>
