@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Gambar</td>
                            <td>Keterangan</td>
                            <td>Jumlah</td>
                            <td>Harga</td>
                            <td><strong>Total Harga</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>1. </td>
                            <td>
                                <img src="{{ url('assets/produk') }}/{{ $produk->gambar }}" class="img-fluid" width="200">
                            </td>
                            <td>
                                {{ $produk->nama }}
                            </td>
                            <td>{{ $jumlah_pesanan }}</td>
                            <td>Rp. {{ number_format($produk->harga) }}</td>
                            <td><strong>Rp. {{ number_format($produk->harga*$jumlah_pesanan) }}</strong></td>
                        </tr>    
                        
                        
                        <tr>
                            <td colspan="5" align="right"><strong>Total Harga : </strong></td>
                            <td align="right"><strong>Rp. {{ number_format($produk->harga*$jumlah_pesanan) }}</strong> </td>
                            <td></td>
                        </tr>
                        <tr>
                        <form  method="post" action="/pembayaran">
                        @csrf
                        <input type="hidden" name="namaBarang" value="{{ $produk->nama }}">
                        <input type="hidden" name="totalHarga" value="{{ $produk->harga*$jumlah_pesanan }}">

                            <td colspan="5"></td>
                            <td colspan="6">
                                <button type="submit" class="btn btn-success btn-blok">
                                    <i class="fas fa-arrow-right"></i> Bayar
                                    </button>
                            </td>
                        </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
