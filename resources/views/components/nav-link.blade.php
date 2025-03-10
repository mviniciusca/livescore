@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex font-extrabold items-center px-1 pt-1 border-b-2 border-slate-400
text-md leading-5
focus:outline-none focus:border-orange-500 transition duration-150
ease-in-out dark:focus:text-zinc-400
dark:text-zinc-500 dark:border-zinc-500 dark:focus:border-orange-500'
: 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-md
leading-5 dark:text-zinc-500
hover:text-gray-700 hover:border-zinc-300 focus:outline-none focus:text-zinc-700
focus:border-zinc-300 transition
duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
