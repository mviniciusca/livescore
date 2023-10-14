@props(['squad', 'logo', 'mode', 'score', 'status', 'maxPoint'])

<div
    class="flex gap-2 border border-slate-200 dark:border-black p-2 my-2 items-center
    opacity-90 hover:opacity-100 transition-all duration-100
    {{ $score < $maxPoint ? 'bg-slate-100 dark:bg-zinc-800'
    : ($score == $maxPoint ? 'bg-indigo-100 dark:bg-zinc-700 dark:text-zinc-400' : '') }}">

    {{-- Squad Card --}}
    <div class="w-full flex gap-4">
        <div id="squad-logo-image">
            <img class="h-12 w-12 dark:opacity-80"
                src="https://pickem-cdn.overwatchleague.com/teams/{{ $logo }}.svg"
                alt="{{ $squad }} - logo" />
        </div>
        <div id="squad-team-name" class="grid">
            <div class="text-xs lg:text-md dark:font-semibold">
                {{ implode(' ', array_slice(explode(' ', $squad), 0, -1)) }}
            </div>
            <div class="-mt-4 text-sm lg:text-2xl font-extrabold">
                {{ explode(' ', $squad)[count(explode(' ', $squad)) - 1] }}
            </div>
        </div>
    </div>

    {{-- Counter App --}}
    <div class="w-1/4">
        <x-counter :mode='$mode' :score='$score' :status='$status'
            :maxPoint='$maxPoint' />
    </div>

</div>
