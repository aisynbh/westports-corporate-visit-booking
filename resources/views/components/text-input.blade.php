@props(['disabled' => false])

<input
    @disabled($disabled)

    {{ $attributes->merge([
        'class' => 'w-full rounded-xl border border-gray-300 px-5 py-4 text-lg shadow-sm focus:border-blue-500 focus:ring-blue-500'
    ]) }}
>