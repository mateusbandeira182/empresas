@props(['message', 'type'])
<div class="alert alert-{{ $type }} mt-5">
    {{ $message }}
</div>
