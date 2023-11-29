<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "asik";

    $koneksi  = mysqli_connect($host, $username, $password, $database);

    if(!$koneksi){
        echo "Koneksi Gagal";
    }
    function query($query)
    {
        // Koneksi database
        global $koneksi;
    
        $result = mysqli_query($koneksi, $query);
    
        // membuat varibale array
        $rows = [];
    
        // mengambil semua data dalam bentuk array
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    
        return $rows;
    }
    //membuat fungsi tambah data
    function tambah_peta($data)
    {
    global $koneksi;

    $id_map = ($data['id_map']);
    $koordinat= ($data['koordinat']);
    $pulau = htmlspecialchars($data['pulau']);
	$desa = htmlspecialchars($data['desa']);
    $luas = ($data['luas']);
    $sangat = ($data['sangat']);
    $sehat = ($data['sehat']);
    $cukup = ($data['cukup']);
    $def = ($data['def']);
    $query = "INSERT INTO `map`(`id_map`, `koordinat`, `pulau`, `desa`, `luas`, `sangat`, `sehat`, `cukup`, `def`) VALUES ('$id_map','$koordinat','$pulau','$desa','$luas','$sangat','$sehat','$cukup','$def')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
    }

    function tambahberita($data)
    {
    global $koneksi;

    $judul= htmlspecialchars($data['judul']);
    $gambar = upload_file();
	$publikasi = htmlspecialchars($data['publikasi']);
    $isi = htmlspecialchars($data['isi']);
    $link = htmlspecialchars($data['link']);
    $query = "INSERT INTO `berita`(`judul`, `gambar`, `publikasi`, `isi`, `link`) VALUES ('$judul','$gambar','$publikasi','$isi', '$link')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
    }

    function upload_file()
    {
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        $extensifileValid = ['jpg', 'jpeg', 'png'];
        $extensifile = explode('.', $namaFile);
        $extensifile = strtolower(end($extensifile));

        if (!in_array($extensifile, $extensifileValid)){
            echo "<script> alert('Format Tidak Valid');
            document.location.href = 'tambahberita.php';
            </script>";
        die();
        }

        if ($ukuranFile > 2048000) {
            echo "<script> alert('Ukuran File Max 2 MB');
            document.location.href = 'tambahberita.php';
            </script>";
        die();
        }

        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru.= $extensifile;

        move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru);
        return $namaFileBaru;
    }
 // Membuat fungsi hapus data
    function hapuspeta($id_map)
    {
        global $koneksi;
    
        mysqli_query($koneksi, "DELETE FROM map WHERE id_map = $id_map");
        return mysqli_affected_rows($koneksi);
    }
    function hapusberita($id_berita)
    {
        global $koneksi;
    
        mysqli_query($koneksi, "DELETE FROM `berita` WHERE id_berita=$id_berita");
        return mysqli_affected_rows($koneksi);
    }
    //membuat fungsi ubah data
    function update($data)
    {
        global $koneksi;
        
        $id_map = $data['id_map'];
        $koordinat= ($data['koordinat']);
        $pulau = htmlspecialchars($data['pulau']);
        $desa = htmlspecialchars($data['desa']);
        $luas = ($data['luas']);
        $sangat = ($data['sangat']);
        $sehat = ($data['sehat']);
        $cukup = ($data['cukup']);
        $def = ($data['def']);

        $sql = "UPDATE `map` SET koordinat='$koordinat',pulau='$pulau',desa='$desa',luas='$luas',sangat='$sangat',sehat='$sehat',cukup='$cukup',def='$def' WHERE id_map = $id_map";
    
        mysqli_query($koneksi, $sql);
    
        return mysqli_affected_rows($koneksi);
    }

    function updateberita($data)
    {
        global $koneksi;
        
        $id_berita = $data['id_berita'];
        $judul= htmlspecialchars($data['judul']);
        $gambar = upload_file();
        $publikasi = htmlspecialchars($data['publikasi']);
        $isi = htmlspecialchars($data['isi']);
        $link = htmlspecialchars($data['link']);

        $sql = "UPDATE `berita` SET id_berita='$id_berita',judul='$judul',gambar='$gambar',publikasi='$publikasi',isi='$isi', link='$link' WHERE id_berita = $id_berita";
    
        mysqli_query($koneksi, $sql);
    
        return mysqli_affected_rows($koneksi);
    }
?>