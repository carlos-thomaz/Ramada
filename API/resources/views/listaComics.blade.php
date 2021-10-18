<ul>
    <li>Carlos</li>
@foreach($comics as $comic)
<li>{{$comic->title}} - {{$comic->prices}}</li>

@endforeach

</ul>