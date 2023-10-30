@props(['mode' => 'full', 'search' => ''])
<div>
    <div class="mb-8 px-2 inline-block bg-zinc-100 border border-zinc-100 dark:border-zinc-900 dark:bg-zinc-900">
        <div class="flex items-center">
            {{-- search icon --}}
            @if($search == '')
            <svg class="w-6 h-6 text-zinc-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 18a7 7 0 100-14 7 7 0 000 14z">
                </path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35"></path>
            </svg>
            @endif

            {{-- clear search --}}
            @if($search != '')
            <form class="grid items-center">
                <button wire:click='clear'>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </form>
            @endif

            <x-text-input
                class="border-none shadow-none ring-0 bg-transparent outline-0 outline-none focus:outline-none focus:border-none active:border-none active:outline-none dark:active:ring-0 dark:focus:ring-0 dark:ring-0 dark:border-none focus:ring-transparent"
                wire:model.live="search" name="search" id="search" placeholder="Search for a team" />
        </div>
    </div>
    <div class="flex flex-wrap  -m-4 items-center justify-self-auto gap-4 p-4">
        @foreach ($teams as $team)
        {{-- card --}}
        <div class="grid">
            <div wire:key='{{ $team->id }}' wire:click='show({{ $team->id }})'
                class="cursor-pointer  hover:opacity-80 active:opacity-90 bg-zinc-50 dark:bg-zinc-800">
                <a class="h-20 w-20 grid text-center items-center justify-center overflow-hidden">
                    <img alt="{{ $team->name }}-logo" class="w-12 h-12 m-auto" src="{{ $team->logo }}">
                    <span
                        class="text-xs -mt-2 font-extrabold">{{ explode(' ',trim($team->name))[count(explode(' ',trim($team->name)))-1]  }}
                    </span>
                </a>
            </div>
        </div>
        {{-- end card --}}
        @endforeach
    </div>
</div>
