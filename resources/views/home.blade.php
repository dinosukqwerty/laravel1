@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-2">
            <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="300" height="170" alt="">
        </div>

        @foreach ($barangs as $barang)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $barang-> nama_barang}}</h5>
                <p class="card-text">{{ $barang->keterangan}}</p>
                <p class="card-text"> Harga :
                <strong>{{ $barang->harga }}</strong>
                </p>
                <p class="card-text">Stok : {{ $barang->stok}}</p>            
                <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Pesan</a>
            </div>
            </div> </br>
        </div> 
        @endforeach

    </div>
</div>
@endsection
