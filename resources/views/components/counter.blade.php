@props(['mode' => '','score' => 0,'status' => ''])

<div>
    <div class="flex items-center justify-between gap-4">

        <div
            class="font-extrabold text-2xl border bg-white dark:bg-zinc-950 dark:text-orange-600 dark:border-black border-zinc-500 px-2 py-1 text-center w-8">
            {{ $score }}
        </div>

        <div class="grid gap-2 items-start">
            {{-- Show button if match is active  --}}
            <button class="text-4xl hover:opacity-80 active:opacity-20 transition-all duration-100 mt-2"
                wire:click='increment{{ $mode }}'>
                +
            </button>

            {{-- Show button if match is active  --}}
            <button class="text-4xl hover:opacity-80 active:opacity-20 transition-all duration-100 -mt-2"
                wire:click='decrement{{ $mode }}'>
                -
            </button>
        </div>

    </div>
</div>
