<button {{ $attributes->merge(['type' => 'button', 'class' => 'w-96 mt-1 mb-1 pt-1 pb-1 hover:bg-sky-700 text-lg rounded-md text-center text-slate-200 bg-gray-800']) }}>
    {{ $slot }}
</button>