<div>
    <div class="max-w-xs uppercase">
        <div>
            <div class="bg-gray-50 text-slate-500 p-2 text-sm flex justify-between items-center">
                <div class="p-4 bg-slate-200 rounded "></div>
                <div></div>
                <div class="border-slate-200 border py-2 px-3 bg-slate-50 text-center text-slate-500 text-xl">

                </div>
                <div class="flex gap-1">
                    <div wire:click='decrement'
                        class="bg-slate-300 px-2 rounded hover:opacity-80 cursor-pointer items-center text-slate-500 text-xl">
                        -
                    </div>
                    <div wire:click='increment'
                        class="bg-slate-300 px-2 rounded hover:opacity-80 cursor-pointer items-center text-slate-500 text-xl">
                        +
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
