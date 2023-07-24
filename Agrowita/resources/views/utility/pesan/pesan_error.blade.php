@if ($errors->any())
    
    <link href="{{ url('./assets/css/warning.css') }}" rel="stylesheet" type="text/css" />

    <div class="alert-alert-danger highlight">
        <ul>
            @foreach($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif