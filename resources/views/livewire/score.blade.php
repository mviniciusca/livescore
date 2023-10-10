<div>
    <div id="counters-group" class="bg-white p-4">
        <x-squad :mode="'Home'" :squad='$teamHome' :logo='$homeTeamLogo' :score='$homeScore' :status='$status' />
        <x-squad :mode="'Guest'" :squad='$teamGuest' :logo='$guestTeamLogo' :score='$guestScore' :status='$status' />
    </div>
</div>
