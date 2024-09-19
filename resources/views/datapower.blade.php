@extends('main')
      
@section('content')
      
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3"><i class="fa fa-star"></i> Data Power POP Import Export Excel to Database Example - ItSolutionStuff.com</h3>
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
  
            <form action="{{ route('datapower.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
  
                <input type="file" name="file" class="form-control">

                <br>
                <button class="btn btn-success"><i class="fa fa-file"></i> Import Data Power POP</button>
            </form>
    
            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="6">
                        List Of Data Power POP
                        <a class="btn btn-warning float-end" href="{{ route('datapower.export') }}"><i class="fa fa-download"></i> Export Data Power POP</a>
                    </th>
                </tr>
                <tr>
                    <th>Data POP ID</th>
                    <th>Panel KWH</th>
                    <th>ID Pelanggan</th>
                </tr>
                @foreach($datapower as $pop)
                <tr>
                    <td>{{ $pop->data_pop_id }}</td>
                    <td>{{ $pop->panel_kwh }}</td>
                    <td>{{ $pop->id_pelanggan }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
       
@endsection