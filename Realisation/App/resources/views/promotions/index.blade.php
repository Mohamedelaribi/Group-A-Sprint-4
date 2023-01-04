

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
                         </div>
                     </div>  
                    <div class="card-body">
                        <table id="mytable" class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($promotions as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td class="d-flex justify-content-center align-items-center">

                                        <a href="{{ route('promotions.edit', $item->id) }}" class="btn btn-sm btn-warning mr-2 ">
                                             <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('promotions.destroy', $item->id) }}" class="btn btn-sm btn-danger">
                                             <i class="fas fa-trash"></i>
                                        </a>
                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
        
                        </table>
                    </div>
                </div>
                
        
            </div>

        </div>
   
</div>
    
@endsection 
