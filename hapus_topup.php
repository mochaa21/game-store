<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_topup = $_GET['id'];
    $query = "DELETE FROM trx_topup WHERE id_topup = '$id_topup'";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Data topup berhasil dihapus!');
                window.location = 'trx_topup.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus: " . mysqli_error($koneksi) . "');
                window.location = 'trx_topup.php';
              </script>";
    }
} else {
    header("Location: trx_topup.php");
}
?>