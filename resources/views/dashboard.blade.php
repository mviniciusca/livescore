<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-12">
        <h2 class="uppercase font-bold text-2xl text-slate-500 tracking-tighter">Predictions / Livescore</h2>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-slate-500 flex gap-4 items-center">

                    <livewire:score :group="'A'" :matchStatus="'Live'" :locale="'Los Angeles, US'"
                        :teamHome="'Boston Upspring'" :teamGuest="'NY Excelsior'" />
                    <livewire:score :group="'A'" :matchStatus="'Live'" :locale="'Los Angeles, US'"
                        :teamHome="'Boston Upspring'" :teamGuest="'NY Excelsior'" />
                    <livewire:score :group="'B'" :matchStatus="'Next'" :locale="'Brisbane, AU'"
                        :teamHome="'Boston Upspring'" :teamGuest="'NY Excelsior'" />
                    <livewire:score :group="'B'" :matchStatus="'Live'" :locale="'Brisbane, Au'"
                        :teamHome="'Boston Upspring'" :teamGuest="'NY Excelsior'" />
                    <livewire:score :group="'D'" :matchStatus="'Scheduled'" :locale="'Rio de Janeiro, BR'"
                        :teamHome="'Boston Upspring'" :teamGuest="'NY Excelsior'" />


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
