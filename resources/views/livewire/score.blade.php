<div>

    @if($status == 'progress')
    <div class="text-white bg-green-500 px-2 font-medium uppercase inline-block py-1 rounded text-xs mb-1">
        match in progress
    </div>
    @endif

    @if($status == 'final')
    <div class="text-white bg-red-500 px-2 font-medium uppercase inline-block py-1 rounded text-xs mb-1">
        finished
    </div>
    @endif

    <div class="gap-4 flex text-xl">
        <div>
            <p>{{ $teamHome }}</p>
            <x-counter :status='$status' :mode="'Home'" :score='$homeScore' />
            {{ $teamGuest }}
            <x-counter :status='$status' :mode="'Guest'" :score='$guestScore' />
        </div>
        <p>{{ $result }}</p>
    </div>
</div>
