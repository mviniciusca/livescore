<div>
    <div class="max-w-xs uppercase">
        <div class="mb-2 grid bg-gray-50 p-3 font-bold uppercase">
            <span>Group A</span>
            <span class="font-normal text-sm">11 January, 2024 </span>
        </div>

        <div>
            <div class="bg-gray-50 text-slate-500 p-2 text-sm flex justify-between items-center">
                <div class="p-4 bg-slate-200 rounded "></div>
                <div class="font-light">Team Name A</div>
                <div class="border-black bg-white text-center text-slate-500 text-xl">
                    {{ $homeScore }}
                </div>

                <div class="font-light">Team Name A</div>
                <div class="border-black bg-white text-center text-slate-500 text-xl">
                    {{ $visitScore }}
                </div>


                <div class="flex gap-1">
                    <div wire:click='decrement'
                        class="bg-slate-300 px-2 rounded hover:opacity-80 cursor-pointer items-center text-slate-500 text-3xl">
                        -
                    </div>
                    <div wire:click='increment'
                        class="bg-slate-300 px-2 rounded hover:opacity-80 cursor-pointer items-center text-slate-500 text-3xl">
                        +
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
