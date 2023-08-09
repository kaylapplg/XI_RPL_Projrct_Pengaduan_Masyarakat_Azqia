<?php

$koneksi = new PDO("mysql:host=localhost;dbname=db_pengaduan_masyarakat_kayla","root", "");

$query = $koneksi->query("select * from pengaduan");
$data = $query->fetchAll();


//if($koneksi){
//  echo "koeksi berhasil";
//}else{
  //echo "koneksi gagal";
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs/bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <title>tampilan home</title>
</head>
<body>
</body>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #1C2870;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><font face="comic sans ms" color="white">Pengaduan Masyarakat</font></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <img src="home.png.png" alt="Image" height="20" width="20">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><font face="comic sans ms" color="white">Home</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><font face="comic sans ms" color="white">Features</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><font face="comic sans ms" color="white">Pricing</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"><font face="comic sans ms" color="white">isabled</font></a>
        </li>
      </ul>
    </div>
        <button class="btn btn-outline-success" type="submit"><font face="comic sans ms" color="white">Logout</font></button>
  </div>
</nav>
    </div>
  </div>
</nav>
<table class="table">
  <thead>
    <tr>
      <th scope="col"><font face="comic sans ms">no</font></th>
      <th scope="col"><font face="comic sans ms">tanggal</font></th>
      <th scope="col"><font face="comic sans ms">nik</font></th>
      <th scope="col"><font face="comic sans ms">isi laporan</font></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $pengaduan){ ?>
    <tr>
      <th scope="row">1</th>
      <td><?= $pengaduan['tgl_pengaduan'] ?></td>
      <td><?= $pengaduan['nik'] ?></td>
      <td><?= $pengaduan['isi_laporan'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</body>
</html>