@extends('layouts.app')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah User</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Password</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{ url('user-add-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="name" value="">
                                </td>
                                <td>
                                    <input type="nohp" class="form-control" name="nohp" value="">
                                </td>
                                <td>
                                    <input type="email" class="form-control" name="email" value="">
                                </td>
                                <td>
                                    <textarea type="text" class="form-control" name="alamat" rows="4"></textarea>
                                </td>
                                <td>
                                    <input type="password" class="form-control" name="password" value="">
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