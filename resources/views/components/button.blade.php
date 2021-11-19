<button
    {{ $attributes->merge(['type' => 'submit', 'class' => '
    inline-block border border-gray-900 p-2 px-6 rounded-full bg-gray-900 text-gray-100 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-300
']) }}
>
    {{ $slot }}
</button>
