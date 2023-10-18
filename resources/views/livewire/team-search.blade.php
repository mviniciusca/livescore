@props(['mode' => 'full'])
<div>
    <div class="inline-block mb-8 -ml-4 px-4 bg-zinc-100 border border-zinc-100 dark:border-zinc-900 dark:bg-zinc-900">
        <div class="flex gap-2 justify-start items-center flex-wrap">
            <svg class="w-6 h-6 text-zinc-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 18a7 7 0 100-14 7 7 0 000 14z">
                </path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35"></path>
            </svg>
            <x-text-input
                class="border-none shadow-none ring-0 bg-transparent outline-none focus:outline-none focus:border-none active:border-none active:outline-none dark:active:ring-0 dark:focus:ring-0 dark:ring-0 dark:border-none"
                wire:model.live="search" placeholder="Search for a team" />
        </div>
    </div>
    <div class="flex flex-wrap -m-4 items-center gap-1">
        @foreach ($teams as $team)
        <div class="grid justify-center items-center">
            <div class="bg-zinc-50 dark:bg-zinc-800">
                <a class="h-20 w-20 grid text-center items-center justify-center overflow-hidden">
                    <img alt="{{ $team->name }}-logo" class="w-12 h-12 m-auto" src="{{ $team->logo }}">
                    <span
                        class="text-xs -mt-3 font-extrabold">{{ explode(' ',trim($team->name))[count(explode(' ',trim($team->name)))-1]  }}
                    </span>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
