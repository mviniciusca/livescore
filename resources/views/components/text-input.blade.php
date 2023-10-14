@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' =>
'border-slate-300 focus:border-indigo-500 focus:ring-indigo-500
shadow-sm dark:bg-zinc-900 dark:border-zinc-700 dark:focus:ring-zinc-800
dark:text-zinc-500 dark:font-semibold']) !!}>
