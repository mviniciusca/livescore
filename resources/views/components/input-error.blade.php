@props(['messages'])

@if ($messages)
<ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1
    dark:font-semibold dark:text-red-700']) }}>
    @foreach ((array) $messages as $message)
    <li>{{ $message }}</li>
    @endforeach
</ul>
@endif
