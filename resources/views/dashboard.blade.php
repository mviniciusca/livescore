<x-app-layout>

    <x-slot name="header">
        <h2 class=" text-2xl font-semibold py-20 leading-tighter">
            {{ __('Overwatch League Predictions') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-5">
        <div class="-m-4 flex flex-wrap ">

            {{-- Squad --}}
            <div class="w-full p-4 md:w-1/2 lg:w-1/4">
                <livewire:score :group="'A'" :matchStatus="'Live'"
                    :locale="'Los Angeles, US'" :teamHome="'Boston Uprising'"
                    :teamGuest="'London Spitfire'" />
            </div>

            <div class="w-full p-4 md:w-1/2 lg:w-1/4 ">
                <livewire:score :group="'B'" :matchStatus="'Live'"
                    :locale="'Toronto, CA'" :teamHome="'Guangzhou Charge'"
                    :teamGuest="'Houston Outlaws'" />
            </div>
            <div class="w-full p-4 md:w-1/2 lg:w-1/4 ">
                <livewire:score :group="'C'" :matchStatus="'Live'"
                    :locale="'Los Angeles, Us'"
                    :teamHome="'Los Angeles Gladiators'"
                    :teamGuest="'Los Angeles Valiant'" />
            </div>
            <div class="w-full p-4 md:w-1/2 lg:w-1/4 ">
                <livewire:score :group="'D'" :matchStatus="'Live'"
                    :locale="'Rio de Janeiro, BR'"
                    :teamHome="'New York Excelsior'"
                    :teamGuest="'Paris Eternal'" />
            </div>

            <div class="w-full p-4 md:w-1/2 lg:w-1/4">
                <livewire:score :group="'A'" :matchStatus="'Live'"
                    :locale="'Los Angeles, US'"
                    :teamHome="'San Francisco Shock'"
                    :teamGuest="'Seoul Dynasty'" />
            </div>

            <div class="w-full p-4 md:w-1/2 lg:w-1/4">
                <livewire:score :group="'B'" :matchStatus="'Live'"
                    :locale="'Toronto, CA'" :teamHome="'Shanghai Dragons'"
                    :teamGuest="'Toronto Defiant'" />
            </div>

            <div class="w-full p-4 md:w-1/2 lg:w-1/4">
                <livewire:score :group="'C'" :matchStatus="'Live'"
                    :locale="'Los Angeles, US'" :teamHome="'Vancouver Titans'"
                    :teamGuest="'Washington Justice'" />
            </div>

            <div class="w-full p-4 md:w-1/2 lg:w-1/4">
                <livewire:score :group="'D'" :matchStatus="'Live'"
                    :locale="'Rio de Janeiro, BR'" :teamHome="'Atlanta Reign'"
                    :teamGuest="'Florida Mayhem'" />
            </div>

</x-app-layout>
