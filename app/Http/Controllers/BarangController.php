<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $barangs = Barang::all();

        return view('barang.index', compact('barangs'));
    }

    public function edit($id)
    {
        $barang = Barang::where('id', $id)->first();

        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request)
    {
        $barang = Barang::where('id', $request->id)->first();

        // data yg di request masukin ke kolom pada table
        $barang->nama_barang = $request->nama_barang;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->keterangan = $request->keterangan;
        $barang->update();

        Alert::info('Success', 'Barang Updated!');
        return redirect('barang'); 
    }

    public function add()
    {
        return view('barang.add');
    }

    public function addNew(Request $request)
    {
        $barang = new Barang;
        $imageName = time().'.'.$request->gambar->extension();  
        $request->gambar->move(public_path('images/barangs'), $imageName);

        // data yg di request masukin ke kolom pada table
        $barang->nama_barang = $request->nama_barang;
        $barang->gambar = $imageName;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->keterangan = $request->keterangan;
        $barang->save();

        Alert::info('Success', 'Add new barang success!');
        return redirect('barang');
    }

    public function delete($id) 
    {
        $barang = Barang::where('id', $id )->first();
        $barang->delete();

        Alert::warning('Success', 'Barang Berhasil di Hapus!');
        return redirect('barang');
    }


}
