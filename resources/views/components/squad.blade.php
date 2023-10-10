@props(['squad' => '', 'logo' => '', 'mode' => '', 'score' => 0, 'status'])

<div>
    <div @if($score==3) class="flex items-center bg-slate-100 p-4 my-1" @else
        class="flex items-center bg-white p-4 my-1" @endif>

        <div id="squad-logo" class="w-12 h-12">
            <img src="https://pickem-cdn.overwatchleague.com/teams/{{ $logo }}.svg" alt="{{ $squad }} - logo">
        </div>
        <div class="flex items-center justify-center">
            <div id="squad-name" @if($score==3) class="text-md flex   text-indigo-500 uppercase font-semibold" @else
                class="text-md flex   text-slate-500 uppercase font-semibold" @endif>

                <span class="mt-1 ml-2 mr-2 text-md tracking-tighter leading-snug">
                    {{ $squad }}
                </span>

            </div>
            <x-counter :mode='$mode' :score='$score' :status='$status' />
        </div>
    </div>
</div>
