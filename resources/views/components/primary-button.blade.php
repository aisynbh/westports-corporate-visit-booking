<button
{{ $attributes->merge([
'type' => 'submit',
'class' => 'w-full inline-flex justify-center items-center px-6 py-4 bg-sky-700 hover:bg-sky-800 rounded-xl font-bold text-white text-base tracking-wide shadow-lg transition duration-200'
]) }}>

    {{ $slot }}

</button>