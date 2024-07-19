@extends('layout.app')

@section("title", "Buat Category")

@section("content")
<div class="card">
        <div class="card-header">
            <h5>Buat Category</h5>
        </div>
        <div class="card-body">
        <form method="POST" action="/category/store">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul Category</label>
                <input type="text" name="title" class="form-control @error("title") is-invalid @enderror " id="exampleFormControlInput1" placeholder="judul">

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