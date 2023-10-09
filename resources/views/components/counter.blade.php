@props(['score' => 0, 'mode' => '', 'status'])
<div>
    <div class="flex text-xl items-center justify-center">

        @if($status == 'progress')
        <button class="bg-indigo-100 text-indigo-500 px-2 py-1" wire:click='decrement{{ $mode }}'>-</button>
        @endif

        <p class="text-indigo-400 px-4">{{ $score }}</p>

        @if($status == 'progress')
        <button class="bg-indigo-100 text-indigo-500 px-2 py-1" wire:click='increment{{ $mode }}'>+</button>
        @endif

    </div>
</div>
