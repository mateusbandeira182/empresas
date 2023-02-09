@props(['message', 'type'])
<div class="alert alert-{{ $type }}">
    {{ $message }}
</div>
