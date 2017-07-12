<div class="row">
    {{--{!! $script !!}  Исполнение скрипта--}}
    {{--{{ isset($bvar) ? $bvar : $title  }}--}}
    {{--{{ $bvar or $title }} --}}
    @if(count($data)< 3)
        В массиве меньше 3-х элементов
    @elseif(count($data)>10)
        В массиве больше 10-ти элементов
    @else
        В массиве неизвестное кол-во элементов
    @endif


    <ul>
        @for($i = 0; $i<count($dataI);$i++)
            <li>{{ $dataI[$i] }}</li>
            @endfor
    </ul>

    <ul>
        @foreach($data as $k=>$value)
            <li>{{ $k.'->'.$value }}</li>
        @endforeach
    </ul>

    <ul>
        @forelse($data as $k=>$value)
            <li>{{ $k.'->'.$value }}</li>
            @empty
            <p>No items</p>
        @endforelse
    </ul>

    @each('Default.list',$dataI,'value')

    @myDir('hello')
    <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
</div>