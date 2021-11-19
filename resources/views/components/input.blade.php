@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-sm shadow-sm border-gray-900 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50']) !!}>
