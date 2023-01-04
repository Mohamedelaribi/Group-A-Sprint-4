@extends('adminlte::page')

@section('title')
 Welcome admin
@endsection

@section('content_header')
 Dashboard
@endsection

@section('content')
<div class="container">

    <div class="row my-5">
        <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h2>{{ \App\Models\Apprentice::count() }}</h2>
                        <p>{{ __('message.apprentice') }}</p>
                    </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                    <a href="{{ route('apprentices.index') }}" class="small-box-footer">
                    Voir plus de détails <i class="fas fa-arrow-circle-right"></i>  </a>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
