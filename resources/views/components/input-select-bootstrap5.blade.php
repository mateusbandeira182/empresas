@props(['selectOption','options' => [], 'disabled' => false,])
<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-select input-estoque']) !!}>
    @if(!is_null($selectOption))
        @foreach($options as $option)
            @if($selectOption == $option->id)
                <option value="{{ $option->id }}" selected>{{ $option->name }}</option>
            @else
                <option value="{{ $option->id }}">{{ $option->name }}</option>
            @endif
        @endforeach
    @else
        <option selected>Selecione uma opção</option>
    @foreach($options as $option)
            <option value="{{ $option->id }}">{{ $option->name }}</option>
    @endforeach
    @endif
</select>
