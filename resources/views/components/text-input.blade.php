@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' =>
'border-slate-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md
shadow-sm dark:bg-zinc-950 dark:border-black dark:focus:ring-zinc-800
dark:text-zinc-500 dark:font-semibold']) !!}>
