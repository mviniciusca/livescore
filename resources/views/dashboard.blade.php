<x-app-layout>

    <x-slot name="header">
        {{ __('Overwatch League Predictions') }}
    </x-slot>

    <div class="mx-auto p-6 sm:px-6 lg:px-8 space-y-6">
        <div class="-m-4 flex flex-wrap">
            {{-- Squad --}}
            <div class="p-4 w-full  md:w-1/2 lg:w-1/3 xl:w-1/4 ">
                <livewire:score :group="'A'" :matchStatus="'Live'"
                    :locale="'Los Angeles, US'" :teamHome="'Boston Uprising'"
                    :teamGuest="'London Spitfire'" />
            </div>

            <div class="p-4 w-full  md:w-1/2 lg:w-1/3 xl:w-1/4   ">
                <livewire:score :group="'B'" :matchStatus="'Live'"
                    :locale="'Toronto, CA'" :teamHome="'Guangzhou Charge'"
                    :teamGuest="'Houston Outlaws'" />
            </div>
            <div class="p-4 w-full  md:w-1/2 lg:w-1/3 xl:w-1/4   ">
                <livewire:score :group="'C'" :matchStatus="'Live'"
                    :locale="'Los Angeles, Us'"
                    :teamHome="'Los Angeles Gladiators'"
                    :teamGuest="'Los Angeles Valiant'" />
            </div>
            <div class="p-4 w-full  md:w-1/2 lg:w-1/3 xl:w-1/4   ">
                <livewire:score :group="'D'" :matchStatus="'Live'"
                    :locale="'Rio de Janeiro, BR'"
                    :teamHome="'New York Excelsior'"
                    :teamGuest="'Paris Eternal'" />
            </div>

            <div class="p-4 w-full  md:w-1/2 lg:w-1/3 xl:w-1/4  ">
                <livewire:score :group="'A'" :matchStatus="'Live'"
                    :locale="'Los Angeles, US'"
                    :teamHome="'San Francisco Shock'"
                    :teamGuest="'Seoul Dynasty'" />
            </div>

            <div class="p-4 w-full  md:w-1/2 lg:w-1/3 xl:w-1/4  ">
                <livewire:score :group="'B'" :matchStatus="'Live'"
                    :locale="'Toronto, CA'" :teamHome="'Shanghai Dragons'"
                    :teamGuest="'Toronto Defiant'" />
            </div>

            <div class="p-4 w-full  md:w-1/2 lg:w-1/3 xl:w-1/4  ">
                <livewire:score :group="'C'" :matchStatus="'Live'"
                    :locale="'Los Angeles, US'" :teamHome="'Vancouver Titans'"
                    :teamGuest="'Washington Justice'" />
            </div>

            <div class="p-4 w-full  md:w-1/2 lg:w-1/3 xl:w-1/4  ">
                <livewire:score :group="'D'" :matchStatus="'Live'"
                    :locale="'Rio de Janeiro, BR'" :teamHome="'Atlanta Reign'"
                    :teamGuest="'Florida Mayhem'" />
            </div>

</x-app-layout>
