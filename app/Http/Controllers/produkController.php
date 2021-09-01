<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class produkController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('CekLevel:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = produk::all();
        return view('dashboard.produk.dataproduk', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'hewan_id' => 'required'
        ]);

        $file = $request -> gambar;
        $fileName= $request->nama.'.'.$file->extension($request);
        $file->move(public_path('assets/produk'),$fileName);

        produk::create([
            'nama'=> $request->nama,
            'harga'=> $request->harga,
            'stok'=> $request->stock,
            'gambar'=> $fileName,
            'hewan_id'=> $request->hewan_id
        ]);

        return redirect ('/dataproduk')->with('status', 'Data Berhasil Ditambahkan !');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(produk $produk)
    {
        return view('dashboard.produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produk $produk)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'hewan_id' => 'required'
        ]);

        if($request->hasFile('gambar')){
            $file = $request -> gambar;
            $fileName= $request->nama.'.'.$file->extension();
            $file->move(public_path('assets/produk'),$fileName);
            produk::where('id',$produk->id)
            ->update([
            'nama'=> $request->nama,
            'harga'=> $request->harga,
            'stok'=> $request->stock,
            'gambar'=> $fileName,
            'hewan_id'=> $request->hewan_id
        ]);
        }else{
            produk::where('id',$produk->id)
            ->update([
                'nama'=> $request->nama,
                'harga'=> $request->harga,
                'stok'=> $request->stock,
                'hewan_id'=> $request->hewan_id
            ]);
        }

        return redirect ('/dataproduk')->with('status', 'Data Berhasil Diubah !');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(produk $produk)
    {
        produk::destroy($produk->id);
        return redirect ('/dataproduk')->with('status', 'Data Berhasil Dihapus !');
    }
}
