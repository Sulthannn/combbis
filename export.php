<?php
require 'koneksi.php';

$map = query("SELECT * FROM map ORDER BY id_map DESC");

// Membuat nama file
$filename = "sebaran mangrove kepulauan bangkabelitung -" . date('Ymd') . ".xls";

// Kodingan untuk export ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Sebaran Mangore Kepulauan BangkaBelitung.xls");

?>
<table class="text-center" border="1">
    <thead class="text-center">
        <tr>
            <th>Pulau</th>
            <th>Kecamatan</th>
            <th>Luas (Ha)</th> 
            <th>Sangat Sehat (Ha)</th>
            <th>Sehat (Ha)</th>
            <th>Cukup Sehat (Ha)</th>
            <th>Deforestasi (Ha)</th>
        </tr>
    </thead>
    <tbody class="text-center">
       
    <?php foreach ($map as $row) : ?>
                                 <tr>
                                <td><?= $row['pulau']; ?></td>
                                <td><?= $row['desa']; ?></td>
                                <td><?= $row['luas']; ?></td>
                                <td><?= $row['sangat']; ?></td>
                                <td><?= $row['sehat']; ?></td>
                                <td><?= $row['cukup']; ?></td>
                                <td><?= $row['def']; ?></td>
                                   </tr>
        <?php endforeach; ?>
    </tbody>
</table>