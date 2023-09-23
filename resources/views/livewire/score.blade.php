<div>
    <div class="text-3xl uppercase font-bold mb-8">Overwatch League 2023</div>
    <div class="max-w-xs uppercase">
        <div>
            <div class="bg-gray-50 text-slate-500 p-2 text-sm flex justify-between items-center">
                <div class="p-1 bg-slate-50 border-slate-300 border rounded ">
                    <img class="w-10 h-10" src="https://pickem-cdn.overwatchleague.com/teams/hangzhou-spark.svg" />
                </div>
                <div id="teamName">Guest Team</div>
                <div id="teamScore"
                    class="border-slate-200 border w-10 p-2 bg-slate-50 text-center text-slate-500 text-xl">
                    {{ $guest_score }}
                </div>
                <div class="flex gap-1">
                    <div wire:click="decrement('guest')"
                        class="bg-slate-300 px-2 rounded hover:opacity-80 cursor-pointer items-center text-slate-500 text-xl">
                        -
                    </div>
                    <div wire:click="increment('guest')"
                        class="bg-slate-300 px-2 rounded hover:opacity-80 cursor-pointer items-center text-slate-500 text-xl">
                        +
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 text-slate-500 p-2 text-sm flex justify-between items-center">
                <div class="p-1 bg-slate-50 border-slate-300 border rounded ">
                    <img class="w-10 h-10" src="https://pickem-cdn.overwatchleague.com/teams/houston-outlaws.svg" />
                </div>
                <div id="teamName">Home Team</div>
                <div id="teamScore"
                    class="border-slate-200 border w-10 p-2 bg-slate-50 text-center text-slate-500 text-xl">
                    {{ $home_score }}
                </div>
                <div class="flex gap-1">
                    <div wire:click="decrement('home')"
                        class="bg-slate-300 px-2 rounded hover:opacity-80 cursor-pointer items-center text-slate-500 text-xl">
                        -
                    </div>
                    <div wire:click="increment('home')"
                        class="bg-slate-300 px-2 rounded hover:opacity-80 cursor-pointer items-center text-slate-500 text-xl">
                        +
                    </div>
                </div>

            </div>

        </div>
        <div class="bg-green-400 inline-block text-center rounded text-xs p-1 text-green-50">
            {{ $result }}
        </div>
    </div>


</div>
