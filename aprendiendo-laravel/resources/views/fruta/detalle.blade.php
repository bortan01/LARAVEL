<h1>{{$fruta->nombre}}</h1>
<p>{{$fruta->descripcion}}</p>

<a href="{{action('frutaController@delete', ["id"=>$fruta->id ])}}">eliminar</a>
<a href="{{action('frutaController@edit', ["id"=>$fruta->id ])}}">editar</a>