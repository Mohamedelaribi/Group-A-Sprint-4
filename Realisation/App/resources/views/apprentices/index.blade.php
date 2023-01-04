

@extends('adminlte::page')

@section('plugins.Datatables', true)
    


@section('title')
 Welcome admin    
@endsection

@section('content_header')
 <h5>Liste des promotions</h5>  
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto" >
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($apprentices as $apprentice)
                                <tr>
                                    <td>{{ $apprentice->firstName }}</td>
                                    <td>{{ $apprentice->lastName }}</td>
                                    <td>{{ $apprentice->email }}</td>
                                    <td class="d-flex justify-content-center align-items-center">

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
                                        
                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
        
                        </table>

                        <div class="row">{{$apprentices->links()}}</div>
                    </div>
                </div>
                
        
            </div>

        </div>
   
</div>
    
@endsection 
