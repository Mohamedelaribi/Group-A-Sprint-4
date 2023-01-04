
<<<<<<< HEAD
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@extends('adminlte::page')

@section('plugins.Datatables', true)



@section('title')
 Welcome admin
@endsection

@section('content_header')
<div style="    display: flex;
flex-direction: row;
flex-wrap: nowrap;
align-content: stretch;
justify-content: space-between;">
    <div>
        <h5>{{ __('message.listOfApprentices') }}</h5>
    </div>
    <div>
        <div class="row">
            <select class="changeLang" name="" id="">
                <option value="en" {{ session()->get('locale')  =="en" ? 'selected' : "" }}>English</option>
                <option value="fr" {{ session()->get('locale') == "fr" ? 'selected' : "" }}>frensh</option>
            </select>

        </div>
    </div>
</div>

@endsection

@section('content')

<script >

    let url = '{{ url( route('changelang') ) }}';
    $(".changeLang").change(function(){
            console.log(url + "?lang="+ $(this).val());
            window.location.href = url + "?lang="+ $(this).val();
        });
</script>

=======

@extends('adminlte::page')

@section('plugins.Datatables', true)
    


@section('title')
 Welcome admin    
@endsection

@section('content_header')
 <h5>Liste des promotions</h5>  
@endsection

@section('content')
>>>>>>> 6b1b305b87be8ad11620f44974fe740ac6b2df9e
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto" >
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
<<<<<<< HEAD
                        {{ __('message.apprentice') }}
                         </div>
                     </div>
                    <div class="card-body">
                        <table id="mytable" class="table table-bordered table-stripped mb-4">
                            <thead>
                                <tr>
                                    <th>{{ __('message.firstName') }}</th>
                                    <th>{{ __('message.lastName') }}</th>
                                    <th>{{ __('message.email') }}</th>
                                    <th>{{ __('message.action') }}</th>
=======
                        Promotions
                        <h1>{{\App\Models\Apprentice::count()}}</h1>
                         </div>
                     </div>  
                    <div class="card-body">
                        <table id="mytable" class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>frist Name</th>
                                    <th>lest Name</th>
                                    <th>email</th>
                                    <th>action</th>
>>>>>>> 6b1b305b87be8ad11620f44974fe740ac6b2df9e
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($apprentices as $apprentice)
                                <tr>
                                    <td>{{ $apprentice->firstName }}</td>
                                    <td>{{ $apprentice->lastName }}</td>
                                    <td>{{ $apprentice->email }}</td>
                                    <td class="d-flex justify-content-center align-items-center">
<<<<<<< HEAD
                                        <a href="{{ route('apprentices.edit', $apprentice->id) }}" class="btn btn-sm btn-warning mr-2 ">
                                             <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('apprentices.destroy', $apprentice->id) }}" method="post" class="mt-3">
                                            @method('delete')
                                            @csrf
                                             <button class="btn btn-sm btn-danger">
                                             <i class="fas fa-trash"></i>
                                        </button>

                                        </form>

=======

                                        <a href="{{ route('apprentices.edit', $apprentice->id) }}" class="btn btn-sm btn-warning mr-2 ">
                                             <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('apprentices.destroy', $apprentice->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-sm btn-danger ">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            {{-- <a href="" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a> --}}
                                        </form>
                                        
                        
>>>>>>> 6b1b305b87be8ad11620f44974fe740ac6b2df9e
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
<<<<<<< HEAD

                        </table>
                        <div class="row">{{ $apprentices->links() }}</div>

                    </div>
                </div>


            </div>

        </div>

</div>

@endsection
=======
        
                        </table>

                        <div class="row">{{$apprentices->links()}}</div>
                    </div>
                </div>
                
        
            </div>

        </div>
   
</div>
    
@endsection 
>>>>>>> 6b1b305b87be8ad11620f44974fe740ac6b2df9e
