<html>
<head>
    <title>Cetak Data Pemasukan</title>
</head>
<body>
<center><h1>PT Lampung Jaya Abadi</h1>
<h4>Jl. Panglima Polim Gg. Randu 8 Kedaton Bandar Lampung</h4>
<h4>Lampung Telp. (0857-8317-0507)</h4></center>
<a href="<?php echo base_url("index.php/admin/cetak_pemasukan/cetak?tanggalmulai=$tanggalmulai&tanggalsampai=$tanggalsampai"); ?>">Cetak Data</a><br><br>
<table border="1" width="100%">
<tr>
    <th>No</th>
    <th>Tanggal</th>
    <th>Jumlah</th>
    <th>Keterangan</th>
   
</tr>
<?php
    foreach($cetak_pemasukan as $cetak){
        echo "<tr>";
        echo "<td>".$cetak->nomor."</td>";
        echo "<td>".$cetak->tanggal."</td>";
        echo "<td>".$cetak->jumlah."</td>";
        echo "<td>".$cetak->keterangan."</td>";
        echo "</tr>";
        
    }

?>
</table>
</body>
</html>