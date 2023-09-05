@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to our club, good people !</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    
    <div class="row justify-content-md-center py-4">
        <div class="col-md-5">
            <img src="https://t3.ftcdn.net/jpg/03/02/20/46/360_F_302204663_gh3yGcsV4DYAnO5xFMyHZX4Tcbn0v2SR.jpg" alt="" srcset="" class="img-responsive w-100">
        </div>
    </div>
</div>
@endsection
