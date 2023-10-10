<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <h2 class="uppercase font-bold text-2xl text-slate-500 tracking-tigh">Predictions</h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap -m-4">

                        {{-- Score APP --}}
                        <livewire:score :group="'A'" :matchStatus="'Live'" :locale="'Los Angeles, US'"
                            :teamHome="'Boston Uprising'" :teamGuest="'London Spitfire'" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
