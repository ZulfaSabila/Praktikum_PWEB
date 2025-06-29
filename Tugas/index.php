<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f7fc;
      font-family: 'Segoe UI', sans-serif;
    }

    .navbar-custom {
      background-color: #2c3e50;
    }

    .navbar-custom .navbar-brand {
      color: #ecf0f1;
    }

    .navbar-custom .navbar-brand:hover {
      color: #f39c12;
    }

    .card-custom {
      border-radius: 16px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .btn-custom {
      background-color: #3498db;
      color: white;
    }

    .btn-custom:hover {
      background-color: #2980b9;
    }

    .table thead {
      background-color: #2c3e50;
      color: white;
    }

    .table tbody tr:hover {
      background-color: #f0f8ff;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-custom px-4">
  <span class="navbar-brand mb-0 h1">Manajemen Produk</span>
</nav>

<div class="container mt-5">
  <div class="card card-custom p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h3 class="mb-0">Daftar Produk</h3>
      <a href="tambah.php" class="btn btn-custom">Tambah Produk</a>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered text-center align-middle">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga (Rp)</th>
            <th>Stok</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$row['nama_produk']}</td>
                    <td>" . number_format($row['harga'], 0, ',', '.') . "</td>
                    <td>{$row['stok']}</td>
                    <td>
                      <a href='edit.php?id={$row['id_produk']}' class='btn btn-warning btn-sm'>Edit</a>
                      <a href='hapus.php?id={$row['id_produk']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                    </td>
                  </tr>";
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>
