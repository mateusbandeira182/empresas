@props(['messages'])
@if($messages)
    <div class="invalid-feedback">
        <ul>
            @foreach($messages as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif
