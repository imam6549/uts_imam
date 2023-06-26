<?php

include 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD PENJUALAN</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">CRUD PENJUALAN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PENJUAL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">BARANG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">PEMBELI</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <h1>CRUD PENJUALAN</h1>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>id_barang</th>
                <th>nama_barang</th>
                <th>harga</th>
                <th>stok</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>20230101</td>
                <td>RACUN TIKUS</td>
                <td>50.000</td>
                <td>1000</td>
                <td>
                    <a href="" class="btn btn-success">Ubah</a>
                    <a href="" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        </tbody>
</table>
  
    <!-- Optional JavaScript; choose one of the two! -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>