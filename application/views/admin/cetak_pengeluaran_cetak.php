<html>
<head>
    <title>Cetak Data Pengeluaran</title>
</head>
<body>
<h1 style="text-align: center;">PT Lampung Jaya Abadi</h1>
<h4 style="text-align: center;">Jl. Panglima Polim Gg. Randu 8 Kedaton Bandar Lampung</h4>
<h4 style="text-align: center;">Lampung Telp. (0857-8317-0507)</h4>
<?php echo "Tanggal : ".$tanggalmulai." - ".$tanggalsampai; ?><br><br>
<hr>
<table border="1" style="text-align: center; overflow: auto; margin : 0; width :100% ">
<thead>
<tr width="100%">
    <th>No</th>
    <th>Tanggal</th>
    <th>Jumlah</th>
    <th>Keterangan</th>
   
</tr>
</thead>
<?php
    foreach($cetak_pengeluaran_cetak as $cetak){
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