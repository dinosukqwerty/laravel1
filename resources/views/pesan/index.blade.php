@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
         <div class="card mt-3">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_barang }}</li>
            </ol>
            </nav>
            <div class="card-body">
            <h2>{{ $barang->nama_barang }}</h2>
            </div>
            <div class="col-md-6">
            <table class="table ">
                <tbody>
                    <tr>
                    <td>HARGA</td>
                    <td>:</td>
                    <td>Rp. {{ number_format($barang->harga) }}</td>
                    </tr>
                    <tr>
                    <td>STOK</td>
                    <td>:</td>
                    <td>{{ number_format($barang->stok) }}</td>
                    </tr>
                    <tr>
                    <td>KETERANGAN</td>
                    <td>:</td>
                    <td>{{ ($barang->keterangan) }}</td>
                    </tr>
                    
                    <form action="" method="post">
                        <tr>
                        <td>JUMLAH PESAN</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="jumlah_pesan" class="form_control" require="">
                        </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <button type="submit" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"></i>Masuk keranjang</button>
                            </td>
                        </tr>
                    </form>

                </tbody>
            </table>
            </div>
         </div>
        </div>
    </div>
</div>
@endsection
