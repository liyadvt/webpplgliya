<?php
$conn = mysqli_connect("sql105.infinityfree.com", "if0_34463434", "D50RPVgDjQyeBcp", "if0_34463434_db_pplg");



if(isset($_POST['borrow'])){
    $jenis = $_POST['jenis'];
    $tanggal = date('Y-m-d H:i:s');
    $alasan = $_POST['alasan'];

   

    $sql = "INSERT INTO acer (`jenis`, `alasan`, `tanggal`) VALUES ('$jenis', '$alasan', '$tanggal')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Berhasil di daftar!')
        </script>";
        header("location: pengembalian.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // $qry = mysqli_query($conn, $sql);
}

if(isset($_POST['pinjam'])){
    $jenis = $_POST['jenis'];
    $tanggal = date('Y-m-d H:i:s');
    $alasan = $_POST['alasan'];

   

    $sql = "INSERT INTO lenovo (`jenis`, `alasan`, `tanggal`) VALUES ('$jenis', '$alasan', '$tanggal')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Berhasil di daftar!')
        </script>";
        header("location: pengembalian.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // $qry = mysqli_query($conn, $sql);
}

if(isset($_POST['pnjm'])){
    $jenis = $_POST['jenis'];
    $tanggal = date('Y-m-d H:i:s');
    $alasan = $_POST['alasan'];

   

    $sql = "INSERT INTO handphone (`jenis`, `alasan`, `tanggal`) VALUES ('$jenis', '$alasan', '$tanggal')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Berhasil di daftar!')
        </script>";
        header("location: pengembalian.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // $qry = mysqli_query($conn, $sql);
}

if(isset($_POST['brw'])){
    $jenis = $_POST['jenis'];
    $tanggal = date('Y-m-d H:i:s');
    $alasan = $_POST['alasan'];

   

    $sql = "INSERT INTO tablet (`jenis`, `alasan`, `tanggal`) VALUES ('$jenis', '$alasan', '$tanggal')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Berhasil di daftar!')
        </script>";
        header("location: pengembalian.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // $qry = mysqli_query($conn, $sql);
}