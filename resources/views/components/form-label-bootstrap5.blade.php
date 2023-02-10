@props(['content'])
<label {{ $attributes->merge(['class' => 'form-label']) }}>
    {{ $content }}
</label>
