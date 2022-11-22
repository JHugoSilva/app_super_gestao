@if (!empty($errors->any()))
    <div style="padding:10px;background-color: tomato;text-align: center;border-radius:5px;">
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif

