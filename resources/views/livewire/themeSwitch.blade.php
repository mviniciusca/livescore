<div>
    {{-- Swith Dark Theme Toggle Button Switcher  --}}

    <div class="flex justify-center items-center">
        <div>
            {{-- create a toogle checkbox with tailwind and animate to slide --}}
            <label for="toggle" class="flex items-center cursor-pointer">
                <!-- toggle -->
                <div class="relative">
                    <!-- input -->
                    <input id="toggle" type="checkbox" class="sr-only" wire:model.live="active">
                    <!-- line -->
                    <div class="w-10 h-4 bg-gray-400 rounded-full shadow-inner"></div>
                    <!-- dot -->
                    <div class="dot absolute w-6 h-6 bg-white rounded-full shadow -left-1 -top-1 transition"></div>
                </div>
                <!-- label -->
                <div class="ml-3 text-gray-700 font-medium">
                    <span class="text-gray-900 dark:text-gray-400">{{ $theme }} Mode</span>
                </div>
            </label>
        </div>
    </div>

    <style>
        /* Toggle */
        .dot {
            top: -3px;
            left: -1px;
            transition: all 0.3s ease-in-out;
        }

        input:checked~.dot {
            transform: translateX(100%);
            /** orange 700 in tailwind hex color */
            background-color: #c05621;
        }
    </style>
</div>
