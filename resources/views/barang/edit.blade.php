@extends('layouts.app')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Barang Detail</h1>
    <p class="mb-4">Anda bisa hapus dan edit barang disini, tapi kalo untuk nambah barang pastinya di menu yang berbeda. sat!</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Barang</h6>
        </div>
        <div class="card-body">
            <form action="{{ url('barang') }}/{{$barang->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Name</th>
                                <th>Harga</th>
                                <th>Keterangan</th>
                                <th>Stok</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="{{ url('images/barangs') }}/{{$barang->gambar}}" alt="nama barang" srcset="" class="img-responsive" style="width: 5rem">
                                    {{-- <input type="file" name="gambar" class="form-control"> --}}
                              </td>
                                <td>
                                    <input id="nama_barang" type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ $barang->nama_barang }}" autocomplete="nama_barang">
                                </td>
                                <td>
                                    <input id="harga" type="harga" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $barang->harga }}" autocomplete="harga">
                                </td>
                                <td>
                                    <textarea id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" rows="4">{{ $barang->keterangan }}</textarea>
                                </td>
                                <td>
                                    <input id="stok" type="stok" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ number_format($barang->stok) }}" autocomplete="stok">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-success">Save</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
    
@endsection