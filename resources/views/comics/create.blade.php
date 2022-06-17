<form action="{{ route('comics.store') }}" method="POST" class="boot">
    @csrf
    <div class="mb-3 row justify-content-center">
        <label for="title" class="col-sm-8 col-form-label">Title</label>
        <div class="col-sm-8">
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Inserisci un titolo" name="title">
        </div>
        @error
        <div>
            {{ $message }}
        </div>
        @enderror
        <div class="col-sm-8">
            <label for="description" class="col-sm-4 col-form-label">Description</label>
            <textarea name="description" type="text" cols="50" rows="10" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Inserisci un titolo">
        </textarea>
        </div>
        @error
        <div>
            {{ $message }}
        </div>
        @enderror
        <div class="col-sm-8">
            <label for="type" class="col-sm-4 col-form-label">Select type: </label>
            <select type="select" class="form-control" id="type" name="type">
                <option value="comic book">Comic Book</option>
                <option value="graphic novel">Graphic Novel</option>
            </select>

        </div>

        <div class="col-sm-8">
            <label for="thumb" class="col-sm-4 col-form-label">Image: </label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" id="thumb" name="thumb">
        </div>
        @error
        <div>
            {{ $message }}
        </div>
        @enderror
          <div class="col-sm-8">
            <label for="price" class="col-sm-4 col-form-label">Price: </label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
        </div>
        <div>
            {{ $message }}
        </div>
           <div class="col-sm-8">
            <label for="sale_date" class="col-sm-4 col-form-label">Sale_Date: </label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date">
        </div>
        <div>
            {{ $message }}
        </div>
    </div>
    <button class="btn btn-warning"><strong>Save</strong></button>
</form>