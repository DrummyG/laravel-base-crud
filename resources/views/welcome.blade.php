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
        <button><a href="{{route('comics.show', $comic->id)}}">Info</a></button>
        <form action='{{ route('comics.destroy', $comic->id) }}' method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger m-2">Elimina</button>
      </form>
      </div>
      @endforeach
    </div>
    <button>load more</button>
    <button><a href="{{route('comics.create', $comic->id)}}">crea</a></button>

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

