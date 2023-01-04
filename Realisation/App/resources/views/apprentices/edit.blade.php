

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
                        {{ __('message.EditApprenticeInformations') }}
                         </div>
                     </div>
                    <div class="card-body">
                       <form method="post" action="{{ route('apprentices.update', $apprentice->id) }}" class="mt-3">
                        @method('PUT')
                        @csrf
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
                            </div>
                         </form>
                    </div>
                </div>


            </div>

        </div>

</div>

@endsection
