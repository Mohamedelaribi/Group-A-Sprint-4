@extends('layout.app')

@section('title')
 Welcome admin    
@endsection

@section('content')
<div class="container">

    <div class="row my-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h2>Welcome Back</h2>
                </div>
                <div class="card-body"> 
                    @guest 
                        <a href="{{ url('/login') }}" class="btn btn-outline-primary">
                            login
                        </a>
                    @endguest
                    
                @auth
                <a href="{{ url('admin/home') }}" class="btn btn-outline-danger">
                    Home
                </a>
                @endauth

                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection