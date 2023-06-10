@extends('layout.main')

@section('title', 'Detail Food')
    
@section('content')


<h3>Detail Food {{$foods['name']}}</h3>

<div class="d-flex justify-content-end">
    <a href="/foods" class="btn btn-success">Kembali</a>
</div>


  <div class="card mb-3 mt-5" style="max-width: 600px;">
  <div class="row g-0">
    <div class="col-md-4">
        <img src="{{asset($foods['image_path'])}}" class="img-fluid rounded-start" style="padding-left: 20px" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body" style="padding-left: 50px">
        <h5 class="card-title">{{$foods['name']}}</h5>
        <p class="card-text">{{$foods['description']}}.</p>
        <p class="card-text"><small class="text-body-secondary">Rp.{{$foods['price'] }}</small></p>
      </div>
    </div>
  </div>
</div>

@endsection