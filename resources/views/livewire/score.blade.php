<div>
    <div id="counters-group" class="bg-slate-50 p-4 uppercase
     dark:bg-zinc-900 dark:border dark:border-zinc-800">
        <div class="p-2 inline-block -mt-4 absolute text-xs bg-slate-100
             dark:bg-orange-700 font-extrabold dark:text-white">
            {{ $status }}
        </div>

        <div class="flex">
            <div class="mt-8 font-bold">{{ $result }}</div>
        </div>

        <div>
            <x-squad :mode="'Home'" :maxPoint='$maxPoint' :squad='$teamHome' :logo='$homeTeamLogo' :score='$homeScore'
                :status='$status' />
            <x-squad :mode="'Guest'" :maxPoint='$maxPoint' :squad='$teamGuest' :logo='$guestTeamLogo'
                :score='$guestScore' :status='$status' />
        </div>

        <div id="card-group-details" class="grid">
            <div class="mt-4">Group {{ $group }}</div>
            <div class="-mt-2 font-bold">{{ $locale }}</div>
        </div>
    </div>
</div>
