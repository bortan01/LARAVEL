<h1>LISTADO DE FRUTAS</h1>
<h3><a href="{{action('frutaController@crear') }}">crear frutas</a></h3>

@if(session('status'))
    <strong>{{session('status')}}</strong>
@endif
<ul>
    @foreach($frutas as $fr)
    
    <li>
        <a href="{{action('frutaController@detalle', ['id' => $fr->id])}}">
            {{$fr->nombre}}
        </a>
    </li>
    @endforeach

</ul>