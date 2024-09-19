<!DOCTYPE html>
<html>
<head>
    <title>Alamat POP Import Export Excel to Database Example - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">IMPORT EXPORT DATA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">DATA</a>
        <a class="nav-link" href="{{ route('index') }}">Data User</a>
        <a class="nav-link" href="{{ route('datapop.index') }}">Data POP</a>
        <a class="nav-link" href="{{ route('alamatpop.index') }}">Data Alamat POP</a>
        <a class="nav-link" href="{{ route('datapower.index') }}">Data Power</a>
        <a class="nav-link" href="{{ route('dataprojek.index') }}">Data Projek</a>
        <a class="nav-link" href="{{ route('datarouter.index') }}">Data Router</a>
      </div>
    </div>
  </div>
</nav>
  @yield('content')
</body>
</html>