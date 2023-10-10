<div>
    <div>
        <div>
            <div id="counters-group">

                <x-squad :mode="'Home'" :squad='$teamHome' :logo="'boston-uprising'" :score='$homeScore'
                    :status='$status' />
                <x-squad :mode="'Guest'" :squad='$teamGuest' :logo="'london-spitfire'" :score='$guestScore'
                    :status='$status' />



            </div>
        </div>
    </div>
</div>
