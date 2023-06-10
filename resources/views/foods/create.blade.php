@extends('layout.main')

@section('title', 'Create Foods')

@section('content')

<h3>Tambah Data Foods</h3>


<div class="container mt-2">
    <div class="card">
        <div class="card-header" style="background: #94AF9F">Tambah Data Foods</div>
        <div class="card-body">
            <form action="/foods/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Makanan</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" name="description" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Upload</label>
                    <input type="file" name="image" id="image" class="form-control" id="inputGroupFile02">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" name="price" class="form-control">
                </div>

                <div class="mb-3 d-flex">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                    <a href="/foods" class="btn btn-light ms-2">Back</a>
                    </div>
            </form>
        </div>
    </div>
</div>
    
    
@endsection