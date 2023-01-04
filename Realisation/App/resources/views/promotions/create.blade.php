

@extends('adminlte::page')

@section('plugins.Datatables', true)
    


@section('title')
 Welcome admin    
@endsection

@section('content_header')
 {{-- <h5>Liste des promotions</h5>   --}}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto" >
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                        Ajouter nouvelle promotion
                         </div>
                     </div>  
                    <div class="card-body">
                       <form method="POST" action="{{ route('promotions.store') }}" class="mt-3">
                        @csrf
                            <div class="form-group mb-3">
                                <label for="PromotionName">Nom de la promotion </label>
                                <input type="text" class="form-control" name="name" placeholder="Nom de la promotion " id="">
                            </div>
                            <div class="form-group mb-6 text-center">
                                <button type="submit" class="col-md-3 btn btn-primary">Submit</button>
                            </div>
                         </form>
                    </div>
                </div>
                
        
            </div>

        </div>
   
</div>
    
@endsection 
