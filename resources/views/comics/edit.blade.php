@extends('parts.skelly')

@section('content')
<form action="{{ route('comics.update', $comic->id) }}" method="POST" class="boot">
    @csrf
    @method('PUT')
    <div class="mb-3 row justify-content-center">
        <label for="title" class="col-sm-8 col-form-label">Title</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
        </div>

        <div class="col-sm-8">
            <label for="description" class="col-sm-4">Description</label>
            <textarea name="description" cols="50" rows="10" type="text" class="form-control" id="description" value="{{$comic->description}}">{{$comic->description}}
        </textarea>
        </div>

        <div class="col-sm-8">
            <label for="type" class="col-sm-4 col-form-label">Select type: </label>
            <select type="select" class="form-control" id="type" name="type">
                <option value="comic book" {{$comic->title == 'comic book' ? 'selected' : '' }}>Comic Book</option>
                <option value="graphic novel" {{$comic->title == 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
            </select>

        </div>

        <div class="col-sm-8">
            <label for="thumb" class="col-sm-4 col-form-label">Image: </label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>
          <div class="col-sm-8">
            <label for="price" class="col-sm-4 col-form-label">Price: </label>
            <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
        </div>
           <div class="col-sm-8">
            <label for="sale_date" class="col-sm-4 col-form-label">Sale_Date: </label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
        </div>
    </div>
    <button class="btn btn-warning"><strong>Modifica</strong></button>
</form>
@endsection