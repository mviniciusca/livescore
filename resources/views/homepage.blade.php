<x-app-layout>

    <x-slot name="header">
        {{ __('Overwatch League Predictions') }}
    </x-slot>

    <div class="mx-auto p-6 sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 w-1/2 rounded-lg items-center justify-between">
            <livewire:team-search />
            <livewire:team-view />
        </div>
        <div class="-m-4 flex flex-wrap">
            {{-- Squad --}}
            @foreach ($events as $event )
            <div class="p-4 w-full  md:w-1/2 lg:w-1/3 xl:w-1/4 ">
                <livewire:score :group='$event->group' :matchStatus='$event->start' :locale='$event->location'
                    :teamHome='$event->teamHome->name' :homeScore='$event->score_home' :guestScore='$event->score_guest'
                    :teamGuest='$event->teamGuest->name' />
            </div>
            @endforeach

</x-app-layout>
