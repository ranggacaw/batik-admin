@extends('layouts.app')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">User List</h1>
    <p class="mb-4">Anda bisa hapus dan edit user disini, tapi kalo untuk nambah user di menu yang berbeda. sat!</p>

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
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                            <?php
                                $format_nohp = chunk_split($item->nohp, 4, ' ');
                            ?>
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ rtrim($format_nohp, ' ') }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <a href="{{ url('user') }}/{{ $item->id }}" class="btn btn-sm btn-success">Edit</a>
                                    @if (auth()->user()->id != $item->id)
                                        <form action="{{ url('user') }}/{{ $item->id}}" method="post" style="display: contents;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    @endif
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