<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/content.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>
<body>

<!--navbar-->
<div>
    @yield('navbar')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<!--navbar end-->



<!-- <div class="card mt-3">
    <div class="card-header bg-dark text-white">
        Daftar Motor
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped text-center">
            <tr>
                <th>No.</th>
                <th>Merek Motor</th>
                <th>Tipe Motor</th>
                <th>Plat Nomor</th>
                <th>Biaya Sewa Perhari</th>
                <th>Nama Pemilik</th>
                <th>No. HP Pemilik</th>
                <th>Aksi</th>
            </tr>
        </table>
    </div>
</div> -->

<!-- <div class="card mt-3">
    <div class="card-header bg-dark text-white">
    History Transaksi Rental
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped text-center">
            <tr>
                <th>No.</th>
                <th>Merek Motor</th>
                <th>Tipe Motor</th>
                <th>Plat Nomor</th>
                <th>Biaya Sewa Perhari</th>
                <th>Nama Pemilik</th>
                <th>No. HP Pemilik</th>
                <th>Aksi</th>
            </tr>
        </table>
    </div>
</div> -->


<div>
@yield('conatainer')
</div>
</body>
</html>