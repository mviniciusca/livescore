@props(['squad' => '', 'logo' => '', 'mode' => '', 'score' => 0, 'status'])

<div>
    <div class="flex gap-1 items-center">
        <div id="squad-logo" class="w-20 h-20 ml-2 items-center">
            <img src="https://pickem-cdn.overwatchleague.com/teams/{{ $logo }}.svg" alt="{{ $squad }} - logo">
        </div>
        <div class="flex text-center w-full justify-between items-center mb-4">
            <div id="squad-name" class="text-md text-indigo-500 uppercase font-semibold">
                {{ $squad }}
            </div>
            <x-counter :mode='$mode' :score='$score' :status='$status' />
        </div>
    </div>
</div>
