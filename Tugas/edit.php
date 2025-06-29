<?php
include 'koneksi.php';
$id = $_GET['id'];
$row = $conn->query("SELECT * FROM produk WHERE id_produk = $id")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Produk</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
  <div class="col-md-6 mx-auto">
    <h3 class="text-center text-primary mb-4">Edit Produk</h3>
    <form action="proses_edit.php" method="post" class="card p-4">
      <input type="hidden" name="id_produk" value="<?= $row['id_produk'] ?>">

      <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <input type="text" name="nama_produk" value="<?= $row['nama_produk'] ?>" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="number" name="harga" value="<?= $row['harga'] ?>" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Stok</label>
        <input type="number" name="stok" value="<?= $row['stok'] ?>" class="form-control" required>
      </div>

      <div class="d-flex justify-content-between">
        <a href="index.php" class="btn btn-outline-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</div>

</body>
</html>
