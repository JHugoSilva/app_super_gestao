 <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name) }}" placeholder="{{ $placeholder }}"
     class="{{ $classe }}" @component('site.layouts._partials.borda', ['campo' => $name]) @endcomponent>
