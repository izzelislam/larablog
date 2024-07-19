@extends("layout.app")

@section("title", "Edit Category")

@section("content")
<div class="card">
  <div class="card-header">
      <h5>Edit Category</h5>
  </div>
  <div class="card-body">
  <form method="POST" action="/category/update/{{ $category->id }}">
      @csrf @method("PUT")
      <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Judul Category</label>
          <input type="text" value="{{ $category->title }}" name="title" class="form-control @error("title") is-invalid @enderror " id="exampleFormControlInput1" placeholder="judul">

          @error("title")
              <div class="text-danger">
                  {{ $message }}
              </div>
          @enderror

      </div>
      <div>
          <button class="btn btn-primary">Simpan</button>
      </div>
  </form>
  </div>
 
</div>
@endsection