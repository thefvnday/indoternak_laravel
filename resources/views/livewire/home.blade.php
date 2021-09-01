@extends('layouts.app')

@section('content')
<div class="container">

   {{-- BANNER --}}
   <div class="banner">
      <img src="{{ url('assets/slider/slider1.jpg') }}" alt="">
   </div>

   {{-- PILIH PRODUK TERNAK  --}}
   <section class="pilih-hewan mt-4">
      <h3><strong>Pilih Produk Ternak</strong></h3>
      <div class="row mt-4">
         @foreach($hewans as $hewan)
         <div class="col">
         <a href="/produk/hewan/{{ $hewan->id }}">
               <div class="card shadow">
                  <div class="card-body text-center">
                     <img src="{{ url('assets/hewan') }}/{{ $hewan->gambar }}" class="img-fluid">
                  </div>
               </div>
            </a>
         </div>
         @endforeach
      </div>
   </section>

   {{-- BEST PRODUCT  --}}
   <section class="products mt-5 mb-5">
      <h3>
         <strong>Produk Terlaris</strong>
         
      </h3>
      <div class="row mt-4">
         @foreach($produks as $produk)
         <div class="col-md-3">
            <div class="card">
               <div class="card-body text-center">
                  <img src="{{ url('assets/produk') }}/{{ $produk->gambar }}" class="img-fluid">
                  <div class="row mt-2">
                     <div class="col-md-12">
                        <h5><strong>{{ $produk->nama }}</strong> </h5>
                        <h5>Rp. {{ number_format($produk->harga) }}</h5>
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col-md-12">
                        <a href="/produk/{{ $produk->id }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Detail</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </section>
</div>
@endsection
