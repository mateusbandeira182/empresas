@props(['messages'])
@if($messages)
    <div class="is-invalid invalid-feedback">
        <ul>
            @foreach($messages as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif
