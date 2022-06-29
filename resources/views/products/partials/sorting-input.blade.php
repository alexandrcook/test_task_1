<form action="{{route('filter')}}" method="GET">
    @foreach(array_merge(request()->query(), ['sort' => array_merge(request()->has('sort') ? request()->get('sort') : [] , ["{$sort_column}" => 'asc'])]) as $name => $value)
        @if(is_array($value))
            @foreach($value as $k => $v)
                <input type="hidden" name="{{$name}}[{{$k}}]" value="{{$v}}">
            @endforeach
        @else
            <input type="hidden" name="{{$name}}" value="{{$value}}">
        @endif
    @endforeach
    <input class="mr-2" type="submit" value="&#8593">
</form>

<form action="{{route('filter')}}" method="GET">
    @foreach(array_merge(request()->query(), ['sort' => array_merge(request()->has('sort') ? request()->get('sort') : [], ["{$sort_column}" => 'desc'])]) as $name => $value)
        @if(is_array($value))
            @foreach($value as $k => $v)
                <input type="hidden" name="{{$name}}[{{$k}}]" value="{{$v}}">
            @endforeach
        @else
            <input type="hidden" name="{{$name}}" value="{{$value}}">
        @endif
    @endforeach
    <input type="submit" value="&#8595">
</form>
