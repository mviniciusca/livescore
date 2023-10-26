<div>
    @if($team)
    <div class="flex gap-4 justify-between flex-wrap p-4">
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
