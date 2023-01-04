@extends('adminlte::page')

@section('title')
<<<<<<< HEAD
 Welcome admin
@endsection

@section('content_header')
 Dashboard
=======
 Welcome admin    
@endsection

@section('content_header')
 Dashboard    
>>>>>>> 6b1b305b87be8ad11620f44974fe740ac6b2df9e
@endsection

@section('content')
<div class="container">

    <div class="row my-5">
        <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h2>{{ \App\Models\Apprentice::count() }}</h2>
<<<<<<< HEAD
                        <p>{{ __('message.apprentice') }}</p>
=======
                        <p>Promotions</p>
>>>>>>> 6b1b305b87be8ad11620f44974fe740ac6b2df9e
                    </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                    <a href="{{ route('apprentices.index') }}" class="small-box-footer">
                    Voir plus de détails <i class="fas fa-arrow-circle-right"></i>  </a>
                </div>
<<<<<<< HEAD

=======
                
>>>>>>> 6b1b305b87be8ad11620f44974fe740ac6b2df9e
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD

@endsection
=======
    
@endsection
>>>>>>> 6b1b305b87be8ad11620f44974fe740ac6b2df9e
