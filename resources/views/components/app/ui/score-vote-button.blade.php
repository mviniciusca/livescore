@props(['method' => '', 'icon' => '', 'team_mode' => ''])
<div>
    <div wire:click="{{ $method }}('{{ $team_mode }}')"
        class="bg-slate-200 px-2 w-6 hover:opacity-60 transition-all duration-100 cursor-pointer items-center text-slate-500 text-xl">
        {{ $icon }}
    </div>
</div>
