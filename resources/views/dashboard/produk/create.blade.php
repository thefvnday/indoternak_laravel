@extends('layouts.dashboard')


@section('body')
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">Tambah Data Hasil Peternakan</h1>
<div class="card shadow mb-4">
<div class="card-body">
<form  method="post" action="/dataproduk" enctype="multipart/form-data">
@csrf
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Produk :</label>
        <div class="col-sm-6">
        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama">
        </div>
    </div>
    <div class="form-group row">
        <label for="harga" class="col-sm-2 col-form-label">Harga :</label>
        <div class="col-sm-6">
        <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga">
        </div>
    </div>
    <div class="form-group row">
        <label for="stock" class="col-sm-2 col-form-label">Stock :</label>
        <div class="col-sm-6">
        <input type="text"  class="form-control @error('stock') is-invalid @enderror" name="stock" id="stock">
        </div>
    </div>
    <div class="form-group row">
        <label for="hewan_id" class="col-sm-2 col-form-label">Kategori Hewan :</label>
        <div class="col-sm-6">
            <select name="hewan_id" class="form-control" required>
                <option value="">Pilih Kategori Hewan</option>
                <option value="1">Ayam</option>
                <option value="2">Sapi</option>
                <option value="3">Kambing</option>
                <option value="4">Domba</option>
            </select>
            </div>
    </div>
    <div class="form-group row">
        <label for="gambar" class="col-sm-2 col-form-label">Gambar Produk :</label>
        <div class="col-sm-6">
        <input type="file" name="gambar"class="form-control-file" id="gambar">
        </div>
    </div>
    



    <div class="form-group row justify-content-end">
        <div class="col-sm-5">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </div>
</form>
</div>
</div>
@endsection
