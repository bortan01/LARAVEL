
@if(isset($fruta) && is_object($fruta))
<h1>EDITAR FRUTA</h1>
{{$action = 'frutaController@update'}}

@else
<h1>CREAR FRUTA</h1>
{{$action = 'frutaController@save'}}

@endif
<form action="{{action($action) }}" method="post">
    {{csrf_field()}}
    <br>

    @if(isset($fruta) && is_object($fruta))
    <input type="hidden" value="{{$fruta->id}}" name="id" /> 
    @endif

    <label for="nombre">nombre</label>
    <input type="text" value="{{$fruta->nombre? $fruta->nombre : ''}}" name="nombre" id="nombre "/> 
    <br>
    <label for="precio">precio</label>
    <input type="text" value="{{$fruta->precio? $fruta->precio : 0}}" name="precio" id="nombre"/> 
    <br>
    <label for="descripcion">descripcion</label>
    <input type="text" value="{{$fruta->descripcion? $fruta->descripcion : ''}} " name="descripcion" id="nombre"/> 
    <br>
    <input type="submit" value="enviar"/>
</form>