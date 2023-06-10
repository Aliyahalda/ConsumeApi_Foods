@extends('layout.main')

@section('title', 'Daftar Foods')
    
@section('content')
    
<h3 class="mt-3">Daftar Foods</h3>

<div class="d-flex justify-content-end">
    <a href="/foods/create" class="btn btn-success">Tambah Data</a>
</div>

<div class="mt-4">
    <div class="row">
        @foreach ($foods as $item)
        <div class="col-lg-3 my-2">
            <div class="card">
                <img src="{{asset($item['image_path'])}}" class="card-img-top" style="height: 275px" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$item['name']}}</h5>
                  <p class="card-text">{{$item['description']}}</p>
                  <p class="card-text text-end fw-bold">Rp. {{$item['price']}}</p>
                  <a href="/foods/edit/{{$item['id']}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                  <a href="/foods/{{$item['id']}}" class="btn btn-secondary"><i class="bi bi-eye"></i></a>
                  <form action="/foods/delete/{{$item['id']}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mt-2"><i class="bi bi-trash3"></i></button>
                </form>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>


@endsection