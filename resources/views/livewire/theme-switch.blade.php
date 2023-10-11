<div>
    {{-- Swith Dark Theme Toggle Button Switcher  --}}

    <div class="flex justify-center items-center">
        <div>
            {{-- create a toogle checkbox with tailwind and animate to slide --}}
            <label for="toggle" class="flex items-center justify-center cursor-pointer">
                <div class="mr-1 text-gray-700 font-medium">
                    <span class="text-gray-900 dark:text-gray-400 flex items-center gap-1">
                        @if ($theme == 'light' )
                        <!-- heroicons moon -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                        </svg>
                        @endif
                    </span>
                </div>
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
                <div class="ml-1 text-gray-700 font-medium">
                    <span class="text-gray-900 dark:text-gray-400 flex items-center gap-1">
                        @if ($theme == 'dark' )
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                        </svg>
                        @endif
                    </span>
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
