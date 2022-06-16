@extends('parts.skelly')

@section('content')
    <main>
    <div class="jumbo"></div>

    <div class="box">
      <p class="current">current series</p>
      @foreach ($comics as $comic)
      <div class="card">
        <img src="{{ $comic['thumb'] }}" alt="type">
        <p>{{$comic['title']}}</p>
        <button><a href="{{route('show', $comic->id)}}">Info</a></button>
        <button><a href="{{route('delete', $comic->id)}}">Cancella</a></button>
      </div>
      @endforeach
      <button>load more</button>
    </div>

    <div class="info">
      <ul>
        @foreach ($menu as $button)
            <li>
            <img src="{{$button['img']}}" alt="item.cosa" />
            <p>{{$button['cosa']}}</p>
            </li>
        @endforeach
      </ul>
    </div>
  </main>
@endsection

