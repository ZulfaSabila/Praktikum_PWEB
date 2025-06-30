<?php
include 'koneksi.php';

// Ambil data dari form
$id_produk   = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga       = $_POST['harga'];
$stok        = $_POST['stok'];

// Query untuk update data
$sql = "UPDATE produk SET 
          nama_produk = '$nama_produk',
          harga = '$harga',
          stok = '$stok'
        WHERE id_produk = $id_produk";

if ($conn->query($sql) === TRUE) {
  // Jika berhasil, kembali ke halaman utama
  header("Location: index.php");
  exit();
} else {
  echo "Error saat update: " . $conn->error;
}

$conn->close();
?>
