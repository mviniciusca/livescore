<div>
    @if($team)
    <div class="flex gap-4 justify-between flex-wrap p-4">
        <!-- heroicons close icon -->
        <div class="grid">
            <div wire:click='clear' class="cursor-pointer hover:opacity-80 active:opacity-90 -mt-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
        </div>
        <div class="w-48 h-48">
            <img class="h-full object-cover" src="{{ $team->logo }}" />
        </div>
        <div class="">
            <div class="text-2xl tracking-tight font-extrabold mb-4">
                {{ $team->name }}
            </div>
            <div class="flex gap-4 flex-wrap justify-between">
                <x-team-status :title="'Ranking'" :counter='$team->id' />
                <x-team-status :title="'Victory'" :counter="'15'" />
                <x-team-status :title="'Draw'" :counter="'5'" />
                <x-team-status :title="'Defeat'" :counter="'2'" />
            </div>
        </div>
    </div>
    @endif
</div>
