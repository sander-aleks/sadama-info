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
        <ul class="flex flex-col items-center">
            <li class="w-96 mt-3 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Kuivastu sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Virtsu sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Roomassaare sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Heltermaa sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Rohuküla sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Sõru sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Sviby sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Ringsu sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Triigi sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Kihnu sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Munalaiu sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Abruka sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Vikati sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Papissaare sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Laaksaare sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Piirissaare sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Naissaare sadam</li>
            <li class="w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800 ">Manilaiu sadam</li>
        </ul>
    </div>

</x-app-layout>
