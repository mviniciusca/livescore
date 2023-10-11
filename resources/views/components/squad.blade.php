@props(['squad' => '', 'logo' => '', 'mode' => '', 'score' => 0, 'status'])

<div class="my-2 flex items-center justify-between gap-4
    @if ($score < 3) bg-slate-100 @endif
    @if($score == 3) bg-indigo-100 @endif
     p-2">
    {{-- Logo --}}
    <div id="squad-logo" class="flex h-12 w-12 justify-start gap-3">
        <img class="h-12 w-12" src="https://pickem-cdn.overwatchleague.com/teams/{{ $logo }}.svg"
            alt="{{ $squad }} - logo" />
        {{-- Squad Name --}}
        <div id="squad-name">
            <div class="grid items-start justify-start leading-snug tracking-tighter">
                <!-- get everything but the last name from squad -->
                <span class="text-xs">
                    {{ implode(' ', array_slice(explode(' ', $squad), 0, -1)) }}
                </span>
                <!-- get the last name from squad -->
                <span class="-mt-2 text-xl font-extrabold">
                    {{ explode(' ', $squad)[count(explode(' ', $squad)) - 1] }}
                </span>
            </div>
        </div>
    </div>

    {{-- Counter --}}
    <div id="counter-app">
        <x-counter :mode='$mode' :score='$score' :status='$status' />
    </div>

</div>
