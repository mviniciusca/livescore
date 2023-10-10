@props(['score' => 0, 'mode' => '', 'status'])
<div>
    <div class="flex items-center">

        @if($status != 'final')
        <button class="text-slate-500 p-1" wire:click='decrement{{ $mode }}'>-</button>
        @endif

        <p class="text-indigo-400 px-4">{{ $score }}</p>

        @if($status != 'final')
        <button class="text-slate-500 p-1" wire:click='increment{{ $mode }}'>+</button>
        @endif



    </div>
</div>
