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
                            <th style="text-align: center;" >Foto Produk</th>
                            <th style="text-align: center;" >Nama Produk</th>
                            <th style="text-align: center;" >Harga</th>
                            <th style="text-align: center;" >Stock</th>
                            <th style="text-align: center;" >hewan_id</th>
                            <th style="text-align: center;" >Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($produks as $produk)
                        <tr>
                            <td><img src="{{ url('assets/produk') }}/{{ $produk->gambar }}" style="max-height: 80px;margin-left: auto;margin-right: auto;display: block;"></td>
                            <td>{{ $produk->nama}}</td>
                            <td>Rp. {{ number_format($produk->harga) }}</td>
                            <td>{{ $produk->stok}}</td>
                            <td>{{ $produk->hewan_id}}</td>
                            <td>
                                <a href="dataproduk/{{$produk->id}}/edit" class="btn btn-secondary btn-sm">Edit</a>
                                <form action="dataproduk/{{$produk->id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit"class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
