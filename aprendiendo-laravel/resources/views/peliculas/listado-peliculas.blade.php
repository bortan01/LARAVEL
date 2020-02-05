<h1>{{$titulo}}</h1>


<?php $titulo = ''; ?>


<!--CONDICIONALES-->
@if($titulo)
    el titulo existe y es este {{$titulo}}
@else
    el titulo no existe
@endif

