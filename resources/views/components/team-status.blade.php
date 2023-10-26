@props(['counter' => 0, 'title' => ''])

<div>
    <div
        class="p-6 border border-slate-100 bg-zinc-100 dark:border-zinc-800 dark:bg-zinc-800 text-center inline-block justify-center">
        <div class="text-3xl font-extrabold leading-tight tracking-tighter">{{ $counter }}</div>
        <div class="text-md uppercase">{{ $title }}</div>
    </div>
</div>
