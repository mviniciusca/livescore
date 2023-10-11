<div>
    <div id="counters-group" class="bg-slate-50 p-4 uppercase dark:bg-zinc-900 dark:border dark:border-zinc-800">

        <div
            class="p-1 inline-block -mt-4 absolute text-xs bg-indigo-50 dark:bg-orange-700 font-semibold dark:text-white">
            {{ $status }}
        </div>

        <div id="card-group-details text-xs flex">
            <p class="mt-6 font-bold">{{ $result }}</p>
        </div>
        <div>
            <x-squad :mode="'Home'" :maxPoint='$maxPoint' :squad='$teamHome' :logo='$homeTeamLogo' :score='$homeScore'
                :status='$status' />
            <x-squad :mode="'Guest'" :maxPoint='$maxPoint' :squad='$teamGuest' :logo='$guestTeamLogo'
                :score='$guestScore' :status='$status' />
        </div>
        <div id="card-group-details" class="grid">
            <span class="mt-4">Group {{ $group }}</span>
            <span class="-mt-2 font-bold">{{ $locale }}</span>
        </div>
    </div>
</div>
