@extends('main')
      
@section('content')
      
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3"><i class="fa fa-star"></i> Data Projek POP Import Export Excel to Database Example - ItSolutionStuff.com</h3>
        <div class="card-body">
  
            @session('success')
                <div class="alert alert-success" role="alert"> 
                    {{ $value }}
                </div>
            @endsession
  
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
  
            <form action="{{ route('dataprojek.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
  
                <input type="file" name="file" class="form-control">

                <br>
                <button class="btn btn-success"><i class="fa fa-file"></i> Import Data Projek POP</button>
            </form>
    
            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="6">
                        List Of Data Projek POP
                        <a class="btn btn-warning float-end" href="{{ route('dataprojek.export') }}"><i class="fa fa-download"></i> Export Data Projek POP</a>
                    </th>
                </tr>
                <tr>
                    <th>Data POP ID</th>
                    <th>Projek</th>
                    <th>Mitra Projek</th>
                    <th>No Kontak</th>
                </tr>
                @foreach($dataprojek as $pop)
                <tr>
                    <td>{{ $pop->data_pop_id }}</td>
                    <td>{{ $pop->projek }}</td>
                    <td>{{ $pop->mitra_projek }}</td>
                    <td>{{ $pop->no_kontak }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
       
@endsection