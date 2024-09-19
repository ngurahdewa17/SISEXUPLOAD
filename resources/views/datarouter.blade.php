@extends('main')
      
@section('content')
      
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3"><i class="fa fa-star"></i> Data Router POP Import Export Excel to Database</h3>
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
  
            <form action="{{ route('datarouter.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success"><i class="fa fa-file"></i> Import Data Router POP</button>
            </form>
    
            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="8">
                        List Of Data Router POP BETA
                        <a class="btn btn-warning float-end" href="{{ route('datarouter.export') }}"><i class="fa fa-download"></i> Export Data Router POP</a>
                    </th>
                </tr>
                <tr>
                    <th>Data POP ID</th>
                    <th>Tipe Router</th>
                    <th>Kelas Router</th>
                    <th>Nama Router</th>
                    <th>Jumlah Port 1 G</th>
                    <th>Jumlah Port 10 G</th>
                    <th>Jumlah Port 100 G</th>
                </tr>
                @foreach($datarouter as $pop)
                <tr>
                    <td>{{ $pop->data_pop_id }}</td>
                    <td>{{ $pop->tipe_router }}</td>
                    <td>{{ $pop->kls_router }}</td>
                    <td>{{ $pop->nama_router }}</td>
                    <td>{{ $pop->jml_portoneg }}</td>
                    <td>{{ $pop->jml_portteng }}</td>
                    <td>{{ $pop->jml_portseratusg }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
       
@endsection