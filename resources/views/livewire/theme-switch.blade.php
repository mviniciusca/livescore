<div>
    <div class="flex justify-center items-center">
        <div>
            <label for="toggle" class="flex items-center justify-center cursor-pointer">
                <div class="mr-1 font-medium">
                    <div class=" flex items-center gap-1">
                        @if ($theme == 'light' )
                        <x-icons.sun />
                        @endif
                    </div>
                </div>

                <div class="relative">
                    <input id="toggle" type="checkbox" class="sr-only" wire:model.live="active">
                    <div class="w-10 h-4 bg-gray-500 rounded-full shadow-inner"></div>
                    <div class="dot absolute w-6 h-6 bg-white rounded-full shadow -left-1 -top-1 transition"></div>
                </div>

                <div class="ml-1 font-medium">
                    <div class="flex items-center gap-1">
                        @if ($theme == 'dark' )
                        <x-icons.moon />
                        @endif
                    </div>
                </div>
            </label>

        </div>
    </div>
    <style>
        .dot {
            top: -4px;
            left: -1px;
            transition: all 0.3s ease-in-out;
        }

        input:checked~.dot {
            transform: translateX(100%);
            /** orange 600 in tailwind hex color */
            background-color: #dd6b20;
        }
    </style>

</div>
