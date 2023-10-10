<div class="px-12 py-8">

    <div class="grid uppercase font-bold text-xs mb-4">
        <p>Group {{ $group }} </p>
        <p>{{ $locale }}</p>
    </div>

    @if($status != 'final')
    <div
        class="text-white bg-indigo-400 p-1 font-medium uppercase inline-block  rounded text-xs mb-1 animate-fade-in-out">
        {{ $matchStatus }}
    </div>
    @endif

    @if($status == 'final')
    <div class="text-white bg-red-400 p-1 font-medium uppercase inline-block rounded text-xs mb-1">
        finished
    </div>
    @endif

    <div class="gap-4 grid text-xl">
        <div>

            <span class="text-xs font-medium uppercase">{{ $teamHome }}</span>
            <x-counter :status='$status' :mode="'Home'" :score='$homeScore' />

            <span class="text-xs font-medium uppercase">{{ $teamGuest }}</span>
            <x-counter :status='$status' :mode="'Guest'" :score='$guestScore' />

        </div>
    </div>
    <span class="text-xs font-medium uppercase inline-block bg-green-400 text-white p-1 rounded my-2">
        {{ $result }}
    </span>

    <style>
        @keyframes fadeInOut {
            0% {
                opacity: 0.5;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0.5;
            }
        }

        .animate-fade-in-out {
            animation: fadeInOut 2s ease-in-out infinite;
        }
    </style>
</div>
