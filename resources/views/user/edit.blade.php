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
            <form action="{{ url('user') }}/{{$user->id}}" method="POST">
                @csrf
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
                            <tr>
                                <td>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" autocomplete="name" autofocus>
                              </td>
                                <td>
                                    <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ $user->nohp }}" autocomplete="nohp">
                                </td>
                                <td>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email}}" autocomplete="email">
                                </td>
                                <td>
                                    <textarea id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="4">{{ $user->alamat }}</textarea>
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