<div>
    <div id="counters-group" class="bg-slate-50 p-4 uppercase dark:bg-zinc-900">
        <div id="card-group-details text-xs flex">
            <p>{{ $status }}</p>
            <p class="-mt-2 font-bold">{{ $result }}</p>
        </div>
        <x-squad :mode="'Home'" :maxPoint='$maxPoint' :squad='$teamHome' :logo='$homeTeamLogo' :score='$homeScore'
            :status='$status' />
        <x-squad :mode="'Guest'" :maxPoint='$maxPoint' :squad='$teamGuest' :logo='$guestTeamLogo' :score='$guestScore'
            :status='$status' />
        <div id="card-group-details text-xs">
            <p>Group {{ $group }}</p>
            <p class="-mt-2 font-bold">{{ $locale }}</p>
        </div>
    </div>
</div>
