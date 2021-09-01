@extends('layouts.dashboard')


@section('body')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Produk</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/dataproduk/tambah" class="btn btn-primary">Tambah Data Hasil Ternak</a>
        </div>
        <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    
                    <thead>
                        <tr>
                            <th style="text-align: center;" >Nama Barang</th>
                            <th style="text-align: center;" >Total Harga Pembelian</th>
                            <th style="text-align: center;" >Waktu Pembelian</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($produks as $produk)
                        <tr>
                            <td>{{ $produk->nama_produk}}</td>
                            <td>Rp. {{ number_format($produk->total_harga) }}</td>
                            <td>{{ $produk->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
