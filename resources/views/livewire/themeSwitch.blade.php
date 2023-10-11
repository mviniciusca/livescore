<div>
    {{-- Swith Dark Theme Toggle Button Switcher  --}}

    <div class="flex justify-center items-center">
        <div>
            <input wire:model.live='active' @if(cookie('theme')=='dark' ) value="{{ cookie('theme') }}" checked @endif
                type="checkbox" />

        </div>
    </div>
</div>
