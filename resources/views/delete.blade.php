@extends('parts.skelly')

@section('content')

<div>
    <h2>Sei sicuro di voler eliminare {{$comic->title}}?</h2>
    <div>
        <form action='{{ route('comics.destroy', $comic->id) }}' method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger m-2">Elimina</button>
        </form>
        <button><a href="{{route('welcome')}}"></a></button>
    </div>
</div>