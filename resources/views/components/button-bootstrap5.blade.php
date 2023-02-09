@props(['type', 'text'])
<button type="{{ $type }}" {{ $attributes->merge(['class' => 'btn']) }}>
    {{ $text }}
</button>
