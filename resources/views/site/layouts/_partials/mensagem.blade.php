@if ($errors->has($campo))
    <div style="color: tomato;text-align: center;">
        {{ $errors->first($campo) }}
    </div>
@endif
