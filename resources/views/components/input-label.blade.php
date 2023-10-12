@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm
    dark:bg-font-semibold']) }}>
    {{ $value ?? $slot }}
</label>
