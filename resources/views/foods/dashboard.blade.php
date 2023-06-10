@extends('layout.main')

@section('title', 'Dasboard')
    
@section('content')

<div class="container">

    <div class="card">
        <div class="card-header" style="background: #94AF9F">Makanan Yang Tersedia</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Makanan</th>
                        <th>Harga</th>
                        <th>image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($foods as $item)
                                            <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['price']}}</td>
                        {{-- <td>
                            @if ($item['image'] != '')
                            <img src="{{ asset($item['image_path'])}}"   alt="" width="100px" srcset="">
                            @else
                            <div class="badge bg-danger">Tidak ada File</div>                      
                            @endif
                        </td> --}}
                        <td>
                            <img src="{{asset($item['image_path'])}}" alt="" width="100px">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>
    
@endsection