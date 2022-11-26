<select name="{{ $name }}" class="{{ $classe }}">
    <option value="0">{{ $informacao }}</option>
    @foreach ($valores as $valor)
        <option value="{{ $valor->id }}" {{ old({{ $name }}) == $valor->id ? 'selected' : '' }}>
            {{ $valor->motivo_contato }}
        </option>
    @endforeach
</select>
