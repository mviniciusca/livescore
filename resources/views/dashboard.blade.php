<x-app-layout>

    <div class="container text-2xl font-bold uppercase text-slate-500 tracking-tight px-5 py-16 mx-auto">
        <h2>
            Overwacth League 2023 / Predictions
        </h2>
    </div>

    <div class="container px-5  mx-auto">
        <div class="flex flex-wrap -m-4">
            <div class="lg:w-1/5  md:w-1/2 p-4 w-full">
                <livewire:score :group="'A'" :matchStatus="'Live'" :locale="'Los Angeles, US'"
                    :teamHome="'Boston Uprising'" :teamGuest="'London Spitfire'" />
            </div>
            <div class="lg:w-1/5  md:w-1/2 p-4 w-full">
                <livewire:score :group="'B'" :matchStatus="'Live'" :locale="'Los Angeles, US'" :teamHome="'Dallas Fuel'"
                    :teamGuest="'Houston Outlaws'" />
            </div>
            <div class="lg:w-1/5  md:w-1/2 p-4 w-full">
                <livewire:score :group="'C'" :matchStatus="'Live'" :locale="'Los Angeles, US'"
                    :teamHome="'Los Angeles Gladiators'" :teamGuest="'Los Angeles Valiant'" />
            </div>
            <div class="lg:w-1/5  md:w-1/2 p-4 w-full">
                <livewire:score :group="'D'" :matchStatus="'Live'" :locale="'Los Angeles, US'"
                    :teamHome="'New York Excelsior'" :teamGuest="'Paris Eternal'" />
            </div>

            <div class="lg:w-1/5  md:w-1/2 p-4 w-full">
                <livewire:score :group="'A'" :matchStatus="'Live'" :locale="'Los Angeles, US'"
                    :teamHome="'San Francisco Shock'" :teamGuest="'Seoul Dynasty'" />
            </div>

            <div class="lg:w-1/5  md:w-1/2 p-4 w-full">
                <livewire:score :group="'B'" :matchStatus="'Live'" :locale="'Los Angeles, US'"
                    :teamHome="'Shanghai Dragons'" :teamGuest="'Toronto Defiant'" />
            </div>

            <div class="lg:w-1/5  md:w-1/2 p-4 w-full">
                <livewire:score :group="'C'" :matchStatus="'Live'" :locale="'Los Angeles, US'"
                    :teamHome="'Vancouver Titans'" :teamGuest="'Washington Justice'" />
            </div>

            <div class="lg:w-1/5  md:w-1/2 p-4 w-full">
                <livewire:score :group="'D'" :matchStatus="'Live'" :locale="'Los Angeles, US'"
                    :teamHome="'Atlanta Reign'" :teamGuest="'Florida Mayhem'" />
            </div>

</x-app-layout>
