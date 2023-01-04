
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
        <h5>Liste des promotions</h5> 
    </div>
    <div>
        <div class="row">
            <select class="changeLang" name="" id="">
                <option value="en"> {{ session()->get('locale')  =="en" ? 'selected' : "" }}English</option>
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
                                    <th>{{ __('message.id') }}</th>
                                    <th>{{ __('message.Name') }}</th>
                                    <th>{{ __('message.Action') }}</th>
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
                </div>            <div class="row">{{ $promotions->links() }}</div>

                
        
            </div>

        </div>
   
</div>
    
@endsection 
