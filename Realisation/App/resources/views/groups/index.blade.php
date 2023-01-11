
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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

<div class="container">
    <input type="search" >
    <div class="row">
        <div class="col-md-10 mx-auto" >
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($getAllGroups as $group)

                                <tr>
                                    <td>{{ $group->name }}</td>
                                    @foreach ($TrainingYear as $item)

                                    @endforeach
                                    <td>{{ $item->trainingYear}}</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-sm btn-warning mr-2 ">
                                             <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('groups.destroy', $group->id) }}" method="post" class="mt-3">
                                            @method('delete')
                                            @csrf
                                             <button class="btn btn-sm btn-danger">
                                             <i class="fas fa-trash"></i>
                                        </button>

                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        {{-- <div class="row">{{ $apprentices->links() }}</div> --}}

                    </div>
                    <div class="importAndExport">
                        {{-- <a href="{{route('import-view')}}"><button class="import">import</button></a> --}}
                        <a href="{{route('export-apprentices')}}"><button class="import">export</button></a>
                        <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    import
  </button> --}}

  <!-- Modal -->
  {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>
        </div>
        <form action="{{route('import')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
            <input type="file" name="importFile" id="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
            </form>
      </div>

    </div>
  </div> --}}

                    </div>

                </div>


            </div>

        </div>

</div>

@endsection
