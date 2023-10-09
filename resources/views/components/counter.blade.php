@props(['score' => 0, 'mode' => ''])
<div>
    <div class="flex text-xl items-center justify-center">
        <button class="bg-indigo-100 text-indigo-500 px-2 py-1" wire:click='decrement{{ $mode }}'>-</button>
        <p class="text-indigo-400 px-4">{{ $score }}</p>
        <button class="bg-indigo-100 text-indigo-500 px-2 py-1" wire:click='increment{{ $mode }}'>+</button>
    </div>
</div>
