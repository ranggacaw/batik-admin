@extends('layouts.app')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Barang List</h1>
    <p class="mb-4">Anda bisa hapus dan edit barang disini, tapi kalo untuk nambah barang pastinya di menu yang berbeda. sat!</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables User</h6>
        </div>
        <div class="card-body">
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
                        @foreach ($barangs as $item)
                            <tr>
                                <td><img src="{{ url('images/barangs/', $item->gambar)}}" alt="nama barang" srcset="" class="img-responsive" style="width: 5rem"></td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ number_format($item->harga) }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>{{ $item->stok }}</td>
                                <td>
                                    <a href="{{ url('barang')}}/{{$item->id}}" class="btn btn-sm btn-success">Edit</a>
                                    <form action="{{ url('barang')}}/{{$item->id}}" method="post" style="display: contents;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
<!-- /.container-fluid -->
    
@endsection