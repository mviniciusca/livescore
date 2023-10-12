@props(['status'])
<div>
    <div id="counters-group" class="bg-slate-50 p-4 uppercase
     dark:bg-zinc-900 dark:border dark:border-zinc-800">
        <div class="flex px-4 text-xs items-center justify-start gap-1 -mt-2 absolute bg-zinc-100
             dark:bg-zinc-700 font-extrabold dark:text-white">
            {{-- live icon --}}
            <x-icons.live />
            {{ $matchStatus }}
        </div>
        {{-- Match Live Result --}}
        <div class="flex">
            <div class="mt-8 font-bold">{{ $result }}</div>
        </div>
        {{-- Team Cards --}}
        <div id="squad-card">
            <x-squad :mode="'Home'" :maxPoint='$maxPoint' :squad='$teamHome'
                :logo='$homeTeamLogo' :score='$homeScore' :status='$status' />
            <x-squad :mode="'Guest'" :maxPoint='$maxPoint' :squad='$teamGuest'
                :logo='$guestTeamLogo' :score='$guestScore' :status='$status' />
        </div>
        {{-- Match Group Details --}}
        <div id="card-group-details" class="grid">
            <div class="mt-4">Group {{ $group }}</div>
            <div class="-mt-2 font-bold">{{ $locale }}</div>
        </div>
    </div>
    {{-- Component Style --}}
    <style>
        @keyframes fadeInOut {
            0% {
                opacity: 0.6;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0.6;
            }
        }

        #feed-icon {
            animation: fadeInOut 2s ease-in-out infinite;
        }
    </style>
</div>
