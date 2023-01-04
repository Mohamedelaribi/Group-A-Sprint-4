

@extends('adminlte::page')

@section('plugins.Datatables', true)
<<<<<<< HEAD



@section('title')
 Welcome admin
=======
    


@section('title')
 Welcome admin    
>>>>>>> 6b1b305b87be8ad11620f44974fe740ac6b2df9e
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
<<<<<<< HEAD
                        {{ __('message.EditApprenticeInformations') }}
                         </div>
                     </div>
=======
                        Modifier le nom de l'apprentice
                         </div>
                     </div>  
>>>>>>> 6b1b305b87be8ad11620f44974fe740ac6b2df9e
                    <div class="card-body">
                       <form method="post" action="{{ route('apprentices.update', $apprentice->id) }}" class="mt-3">
                        @method('PUT')
                        @csrf
<<<<<<< HEAD
                            <div class="form-group mb-3">
                                <label for="ApprenticefirstName">{{ __('message.firstNameApprentice') }} </label>
                                <input type="text" class="form-control" name="newFirstName" value="{{ $apprentice->firstName }}" id="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="ApprenticefirstName">{{ __('message.lastNameApprentice') }} </label>
                                <input type="text" class="form-control" name="newLastName" value="{{ $apprentice->lastName }}" id="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="ApprenticefirstName">{{ __('message.emailApprentice') }} </label>
                                <input type="text" class="form-control" name="newEmail" value="{{ $apprentice->email }}" id="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="ApprenticefirstName">{{ __('message.phoneNumber') }} </label>
                                <input type="text" class="form-control" name="newPhoneNumber" value="{{ $apprentice->phoneNumber }}" id="">
                            </div>

                            <div class="form-group mb-3">
                                <label for="ApprenticefirstName">{{ __('message.address') }} </label>
                                <input type="text" class="form-control" name="newAddress" value="{{ $apprentice->adresse }}" id="">
                            </div>



                            <div class="form-group mb-6 text-center">
                                <button type="submit" class="col-md-3 btn btn-primary">{{ __('message.submit') }}</button>
=======

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
>>>>>>> 6b1b305b87be8ad11620f44974fe740ac6b2df9e
                            </div>
                         </form>
                    </div>
                </div>
<<<<<<< HEAD


            </div>

        </div>

</div>

@endsection
=======
                
        
            </div>

        </div>
   
</div>
    
@endsection 
>>>>>>> 6b1b305b87be8ad11620f44974fe740ac6b2df9e
