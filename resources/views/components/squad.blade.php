@props(['squad' => '', 'logo' => '', 'mode' => '', 'score' => 0, 'status', 'maxPoint'])

<div class="flex gap-2 p-2 my-2 items-center opacity-90 hover:opacity-100 transition-all duration-100
@if ($score < $maxPoint) bg-slate-100 dark:bg-zinc-900 @endif
@if($score == $maxPoint) bg-indigo-100 dark:bg-orange-700 dark:text-white @endif
">
    <div class="w-full flex gap-4">
        <div>
            <img class="h-12 w-12 dark:opacity-80" src="https://pickem-cdn.overwatchleague.com/teams/{{ $logo }}.svg"
                alt="{{ $squad }} - logo" />
        </div>
        <div class="grid">
            <!-- get everything but the last name from squad -->
            <span class="text-sm">
                {{ implode(' ', array_slice(explode(' ', $squad), 0, -1)) }}
            </span>
            <!-- get the last name from squad -->
            <span class="-mt-2 text-xl font-extrabold">
                {{ explode(' ', $squad)[count(explode(' ', $squad)) - 1] }}
            </span>
        </div>
    </div>
    <div class="w-1/4">
        <x-counter :mode='$mode' :score='$score' :status='$status' />
    </div>
</div>
