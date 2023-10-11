@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex font-extrabold items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm leading-5
text-gray-900 focus:outline-none focus:border-purple-500 transition duration-150 ease-in-out dark:focus:text-white
dark:text-zinc-500 dark:border-zinc-500'
: 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm leading-5 text-slate-500 dark:text-zinc-500
hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition
duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
