@extends('main')
      
@section('content')
      
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3"><i class="fa fa-star"></i> Data POP Import Export Excel to Database Example - ItSolutionStuff.com</h3>
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
  
            <form action="{{ route('datapop.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
  
                <input type="file" name="file" class="form-control">

                <br>
                <button class="btn btn-success"><i class="fa fa-file"></i> Import Data POP</button>
            </form>
    
            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="6">
                        List Of Data POP
                        <a class="btn btn-warning float-end" href="{{ route('datapop.export') }}"><i class="fa fa-download"></i> Export Data POP</a>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Kode POP</th>
                    <th>Nama POP</th>
                    <th>Status</th>
                    <th>Kategori</th>
                    <th>Type</th>
                </tr>
                @foreach($datapop as $pop)
                <tr>
                    <td>{{ $pop->id}}</td>
                    <td>{{ $pop->kode_pop }}</td>
                    <td>{{ $pop->nama_pop }}</td>
                    <td>{{ $pop->status }}</td>
                    <td>{{ $pop->kategori }}</td>
                    <td>{{ $pop->type }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</body>
</html>

@endsection