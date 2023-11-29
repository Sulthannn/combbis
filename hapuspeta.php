<?php
session_start();
require 'koneksi.php';
echo "<script>alert('Anda Harus Login Terlebih Dahulu')</script>";
header("location: login.php");

$id_map = $_GET['id_map'];

$query = "delete from map where id_map = $id_map";

if(mysqli_query($koneksi, $query)){
    echo "<script>
    alert('Data berhasil dihapus!');
    </script>";
    header("Location: sebaran.php");
}else{
    echo "tidak berhasil";
}

// if (hapuspeta($id_map) > 0) {
//     echo "<script>
//                 alert('Data berhasil dihapus!');
//                 document.location.href = 'sebaran.php';
//             </script>";
//         $_SESSION['alert'] = "Data hapus";
// } else {
//     echo "<script>
//             alert('Data gagal dihapus!');
//         </script>";
// }
?>
