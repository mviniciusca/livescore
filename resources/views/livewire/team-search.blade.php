<div>
    <div class="mb-2">
        <x-text-input wire:model.live="teamName" :placeholder="'serach'" class="w-full" />
    </div>
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-8">
            @foreach ($teams as $team )
            <div class="w-1/6 p-4 flex gap-4 items-center justify-between">
                <div class="bg-zinc-50 p-4 w-full flex justify-between">
                    <img class="w-16 h-16" src="{{ $team->logo }}">
                    <div class="grid items-center justify-start">
                        <span class="text-md mt-2">
                            {{ implode(' ',array_slice(explode(' ',trim($team->name)),0,-1)) }}
                        </span>
                        <span class="text-2xl -mt-3 font-extrabold">
                            {{ explode(' ',trim($team->name))[count(explode(' ',trim($team->name)))-1]  }}
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

















    {{-- <div class="dark:bg-zinc-800">

        <div class="md:flex flex-wrap items-center justify-between gap-4">
            @foreach ($teams as $team )
            <div class="p-4 flex bg-zinc-400  w-1/6 justify-between gap-4 items-center font-semibold leading-tight">
                <div>
                    <div>
                        <img class="w-16 h-16" src="{{ $team->logo }}" alt="">
</div>
</div>
<div class="grid items-start justify-start">
    <!-- get all the words from the string except the last word -->
    <span class="text-md -mt-4">{{ implode(' ',array_slice(explode(' ',trim($team->name)),0,-1)) }}
    </span>
    <!-- get the last word from the string -->
    <span class="text-2xl -mt-2 font-extrabold">
        {{ explode(' ',trim($team->name))[count(explode(' ',trim($team->name)))-1]  }}
    </span>
</div>
</div>
@endforeach
</div>
</div> --}}
