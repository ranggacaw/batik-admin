@extends('layouts.app')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Barang</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Name</th>
                            <th>Harga</th>
                            <th>Keterangan</th>
                            <th>Stok</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{url('barang-add-store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <tr>
                                <td>
                                    <input type="file" name="gambar" class="form-control">
                                </td>
                                <td>
                                    <input id="nama_barang" type="text" class="form-control" name="nama_barang" value="">
                                </td>
                                <td>
                                    <input id="harga" type="harga" class="form-control" name="harga" value="">
                                </td>
                                <td>
                                    <textarea id="keterangan" type="text" class="form-control" name="keterangan" rows="4" placeholder="ukuran 2m x 2m, bahan kasar"></textarea>
                                </td>
                                <td>
                                    <input id="stok" type="stok" class="form-control" name="stok" value="">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-success">Save</button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
    
@endsection