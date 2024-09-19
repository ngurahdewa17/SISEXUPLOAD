@extends('main')
      
@section('content')
    <div class="container">
        <div class="card mt-5">
            <h3 class="card-header p-3"><i class="fa fa-star"></i> Alamat POP Import Export Excel to Database Example - ItSolutionStuff.com</h3>
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
    
                <form action="{{ route('alamatpop.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
    
                    <input type="file" name="file" class="form-control">

                    <br>
                    <button class="btn btn-success"><i class="fa fa-file"></i> Import Alamat POP</button>
                </form>
        
                <table class="table table-bordered mt-3">
                    <tr>
                        <th colspan="7">
                            List Of Alamat POP
                            <a class="btn btn-warning float-end" href="{{ route('alamatpop.export') }}"><i class="fa fa-download"></i> Export Alamat POP</a>
                        </th>
                    </tr>
                    <tr>
                        <th>Data POP ID</th>
                        <th>Nama POP</th>
                        <th>Provinsi</th>
                        <th>Kabupaten</th>
                        <th>Alamat</th>
                        <th>Titik Koordinat</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                    </tr>
                    @foreach($alamatpop as $pop)
                    <tr>
                        <td>{{ $pop->data_pop_id }}</td>
                        <td>{{ $pop->nama_pop }}</td>
                        <td>{{ $pop->provinsi }}</td>
                        <td>{{ $pop->kabupaten }}</td>
                        <td>{{ $pop->alamat }}</td>
                        <td>{{ $pop->titik_koordinat }}</td>
                        <td>{{ $pop->latitude }}</td>
                        <td>{{ $pop->longitude }}</td>
                    </tr>
                    @endforeach
                </table>
        
            </div>
        </div>
    </div>
@endsection
