

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
                        Modifier le nom de l'apprentice
                         </div>
                     </div>  
                    <div class="card-body">
                       <form method="post" action="{{ route('apprentices.update', $apprentice->id) }}" class="mt-3">
                        @method('PUT')
                        @csrf

                            <div class="form-group mb-3">
                                <label for="PromotionName">Prénom de l'apprentice </label>
                                <input type="text" class="form-control" name="firstName" value="{{ $apprentice->firstName }}" id="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="PromotionName">Nom de l'apprentice </label>
                                <input type="text" class="form-control" name="lastName" value="{{ $apprentice->lastName }}" id="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="PromotionName">email de l'apprentice </label>
                                <input type="text" class="form-control" name="email" value="{{ $apprentice->email }}" id="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="PromotionName">téléphone de l'apprentice </label>
                                <input type="text" class="form-control" name="phoneNumber" value="{{ $apprentice->phoneNumber }}" id="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="PromotionName">adresse de l'apprentice </label>
                                <input type="text" class="form-control" name="adresse" value="{{ $apprentice->adresse }}" id="">
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
