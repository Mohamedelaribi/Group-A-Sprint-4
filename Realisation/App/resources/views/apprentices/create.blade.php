

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
                        Ajouter nouvelle apprentice
                         </div>
                     </div>  
                    <div class="card-body">
                       <form method="POST" action="{{ route('apprentices.store') }}" class="mt-3">
                        @csrf
                            <div class="form-group mb-3">
                                <label for="ApprenticeName">Nom de l'apprentice </label>
                                <input type="text" class="form-control" name="firstName" placeholder="Prénom de l'apprantice " id="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="ApprenticeName">Nom de l'apprentice </label>
                                <input type="text" class="form-control" name="lastName" placeholder="Nom de l'apprantice " id="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Nom de l'apprentice </label>
                                <input type="text" class="form-control" name="email" placeholder="Email " id="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="phoneNumber">Nom de l'apprentice </label>
                                <input type="text" class="form-control" name="phoneNumber" placeholder="Numero de telefone " id="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="address">Nom de l'apprentice </label>
                                <input type="text" class="form-control" name="address" placeholder="Adresse " id="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="image">image de l'apprentice </label>
                                <input type="text" class="form-control" name="imageURL" placeholder="Image " id="">
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
