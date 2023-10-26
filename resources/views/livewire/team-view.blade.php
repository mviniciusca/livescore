<div>
    @if($team)
    <div class="flex bg-green-100 gap-4 justify-between">
        <div class="w-32 h-32 p-4 text-center">

            <img class="h-full object-cover" src="{{ $team->logo }}" />
        </div>
        <div class="w-1/2">
            <div class="text-xl tracking-tight font-extrabold">{{ $team->name }}</div>
            <x-team-status :teamName="$team->name" />
        </div>
    </div>
    @endif
</div>
