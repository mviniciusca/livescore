<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex
    items-center px-4 py-2 bg-slate-100 dark:bg-zinc-950 dark:border-black
    dark:hover:text-zinc-100
    dark:hover:bg-zinc-800 border
    border-transparent rounded-md
    font-semibold text-xs uppercase tracking-widest
    hover:bg-slate-200
    focus:bg-slate-100 active:bg-slate-400 dark:active:bg-zinc-800
    focus:outline-none focus:ring-2
    focus:ring-indigo-500 dark:focus:ring-orange-500 focus:ring-offset-2
    transition ease-in-out
    duration-150']) }}>
    {{ $slot }}
</button>
