<?php
$server = mysqli_connect("sql105.infinityfree.com", "if0_34463434", "D50RPVgDjQyeBcp", "if0_34463434_db_pplg");
$link = "SELECT * FROM lenovo";
$sql = mysqli_query($server, $link);

$jumlah_pinjam = mysqli_num_rows($sql);

$total = 10;
$tersedia = $total - $jumlah_pinjam;

?>
