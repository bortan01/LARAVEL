<h1>LISTADO DE FRUTAS</h1>

<ul>
    @foreach($frutas as $fr)
        <li>{{$fr->nombre}} </li>
    @endforeach

</ul>