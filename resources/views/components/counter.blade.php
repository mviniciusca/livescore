@props(['mode','score','status', 'maxPoint'])

<div>
    <div class="flex items-center justify-between gap-4 py-4">

        <div
            class="font-extrabold text-2xl border bg-white dark:bg-zinc-950
             dark:text-orange-600 dark:border-black border-zinc-500 px-2 py-1 text-center w-8">
            {{ $score }}
        </div>

        <div class="grid -ml-4 items-start">

            {{-- Increment Button --}}
            @if($score < $maxPoint ) <button
                class="text-xl hover:opacity-80 active:opacity-20 transition-all duration-100"
                wire:click='increment{{ $mode }}'>
                <!-- heroicons -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M5 15l7-7 7 7" />
                </svg>
                </button>
                @endif

                {{-- Decrement Button --}}
                @if($score <= $maxPoint ) <button
                    class="text-xl hover:opacity-80 active:opacity-20 transition-all duration-100"
                    wire:click='decrement{{ $mode }}'>
                    <!-- heroicons -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                    </button>
                    @endif

        </div>

    </div>
</div>
