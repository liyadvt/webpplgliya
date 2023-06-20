<?php
session_start();
if ( !isset($_SESSION["username"])){
    header("Location: index.php");
    exit;
}   

$server = mysqli_connect("sql105.infinityfree.com", "if0_34463434", "D50RPVgDjQyeBcp", "if0_34463434_db_pplg");

if ($server) {
  echo "";
} else {
  echo "Gagal";
}

$sql    = ("SELECT * FROM users WHERE username='$_SESSION[username]'");
$result = mysqli_query($server, $sql);

 
if (mysqli_num_rows($result) > 0) {

  while ($users = mysqli_fetch_assoc($result)) {
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeLend</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- style css -->
    <style>
         html{
        font-family: 'PP Pangram Sans';
      }

      .nav-pills li a:hover{
        background-color: grey;
      }

      .container-fluid{
        font-size: 10px;
      }
      
      .index{
        background-image: url("Login-bg.png");
        width: 83.3%;
        height: 10%;
        padding-left: 2%;
        background-position: right;
        background-repeat: no-repeat;
        background-size: cover;
        
      }

      .index2{
        position: absolute;
        margin-top: 14%;
        margin-left: 17%;
        /* border: 15px solid green; */
        width: 82%;
      }

      .side{
        margin-top: 220%;
        margin-bottom: 13%;
      }

      h2{
        margin-top: 15px;
        margin-bottom: -10px;
        color: #2782C7;
      }
    </style>
</head>
<body>
    <!-- side bar -->

    <div class="container-fluid">
    <div class="row flex-nowrap">
    <!-- <input type="hidden" name="id" id="nama" value="<?= $users['id']?>"> -->
      <div class="bg-light col-auto col-md-4 col-lg-2 min-vh-100 d-flex flex-column justify-content-between">
        <div class="bg-light p-2">
          <a class="text-decoration-none mt-1 align-items-center text-dark">
            <span class="fs-4 d-none d-sm-inline text-center">
              <img class=" mx-auto d-block mt-5 mb-5" src="User-icon.png" alt="" width="120px" style="border-radius: 50%;">
            </span>
          </a>
          <hr class="border border-dark border-2 opacity-50">

          <ul class="nav nav-pills flex-column mt-4">
            <li class="nav-item py-2 py-sm-0">
              <a href="index.php" class="nav-link  text-dark">
                <span class="material-symbols-outlined">
                  home
                </span><span class="fs-5 d-none ms-1 d-sm-inline">Utama</span>
              </a>
            </li>

            <li class="nav-item py-2 py-sm-0 mt-3">
              <a href="lenovo.php" class="nav-link text-dark">
              <span class="material-symbols-outlined">
              devices
              </span><span class="fs-5 d-none ms-1 d-sm-inline">Peminjaman</span>
              </a>
            </li>
            
            <li class="nav-item py-2 py-sm-0 mt-3">
              <a href="pengembalian.php" class="nav-link text-dark">
              <span class="material-symbols-outlined">
              check_circle
              </span><span class="fs-6 d-none ms-1 d-sm-inline">Pengembalian</span>
              </a>
            </li>

            <li class="nav-item py-2 py-sm-0 mt-3">
              <a href="contact.php" class="nav-link text-dark">
              <span class="material-symbols-outlined">
              call
              </span><span class="fs-5 d-none ms-1 d-sm-inline">Contact</span>
              </a>
            </li>
           </ul>

        </div>
        <div class="side" class="logout text-dark">
          <a href="logout.php" class="nav-link text-dark">
            <span class="material-symbols-outlined">
              logout
            </span><span class="fs-6 d-none ms-1 d-sm-inline" >Logout</span>
          </a>
        </div>
    </div>
  

    <div class="index">
        <div class="col-md-5 col-lg-8">
            <div class="row text-white">
                <div class="col-md-12 mt-5 ms-3 mb-5">
                    <br> <br>
                    <h1 style="font-style: normal; font-weight: 600; font-size: 40px; line-height: 35px;">
                      Data Laptop Dipinjam
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="index2">
<!-- lenovo -->
          <?php
          $result2    = ("SELECT * FROM `lenovo`");
          $hasil2 = mysqli_query($server, $result2);
          ?>

<div class="row">

            <table class="table">
              <div class="col-md-12 mb-5 ">
                 <h2> Laptop Lenovo</h2>
              </div>
          <thead>
            <tr>
              <th scope="col">No Laptop</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Alasan Peminjaman</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">

          <?php
          if (mysqli_num_rows($hasil2) > 0) {
            while ($tunjuk2 = mysqli_fetch_assoc($hasil2)) {
              echo "<tr>";
              echo "<td>" . $tunjuk2['jenis'] . "</td>";
              echo "<td>" . $tunjuk2['tanggal'] . "</td>";
              echo "<td>" . $tunjuk2['alasan'] . "</td>"; ?>
              <td><a class="btn btn-danger" href="hapus.php?alasan=<?php echo $tunjuk2['alasan'] ?>" >Kembalikan</a></td>
            <?php
              echo "</tr>";
            }
          } else {
            echo "<tr>";
            echo "<td colspan='2'>Tidak ada data yang ditemukan.</td>";
            echo "</tr>";
          }

          ?>

          <!-- acer -->
            <?php
            $result1    = ("SELECT * FROM `acer`");
            $hasil1 = mysqli_query($server, $result1);
            ?>


              <table class="table">
                <div class="col-md-12 mb-5 ">
                      <h2> Laptop Acer</h2>
                </div>
            <thead>
              <tr>
                <th scope="col">No Laptop</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Alasan Peminjaman</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">

            <?php
            if (mysqli_num_rows($hasil1) > 0) {
              while ($tunjuk = mysqli_fetch_assoc($hasil1)) {
                echo "<tr>";
                echo "<td>" . $tunjuk['jenis'] . "</td>";
                echo "<td>" . $tunjuk['tanggal'] . "</td>";
                echo "<td>" . $tunjuk['alasan'] . "</td>"; ?>
                <td><a class="btn btn-danger" href="hapus.php?alasan=<?php echo $tunjuk['alasan'] ?>" >Kembalikan</a></td>
              <?php
                echo "</tr>";
              }
            } else {
              echo "<tr>";
              echo "<td colspan='2'>Tidak ada data yang ditemukan.</td>";
              echo "</tr>";
            }
            ?>

            <?php
            $result3    = ("SELECT * FROM `handphone`");
            $hasil3 = mysqli_query($server, $result3);
            ?>

<!-- handphone -->

      <table class="table">
        <div class="col-md-12 mb-5 ">
          <h2> Handphone</h2>
        </div>
    <thead>
      <tr>
        <th scope="col">No Handphone</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Alasan Peminjaman</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">

    <?php
    if (mysqli_num_rows($hasil3) > 0) {
      while ($tunjuk3 = mysqli_fetch_assoc($hasil3)) {
        echo "<tr>";
        echo "<td>" . $tunjuk3['jenis'] . "</td>";
        echo "<td>" . $tunjuk3['tanggal'] . "</td>";
        echo "<td>" . $tunjuk3['alasan'] . "</td>"; ?>
        <td><a class="btn btn-danger" href="hapus.php?alasan=<?php echo $tunjuk3['alasan'] ?>" >Kembalikan</a></td>
      <?php
        echo "</tr>";
      }
    } else {
      echo "<tr>";
      echo "<td colspan='2'>Tidak ada data yang ditemukan.</td>";
      echo "</tr>";
    }
    ?>
    

<!-- tablet -->
    <?php
    $result4    = ("SELECT * FROM `tablet`");
    $hasil4 = mysqli_query($server, $result4);
    ?>

      <table class="table">
        <div class="col-md-12 mb-5 ">
            <h2> Tablet</h2>
        </div>
    <thead>
      <tr>
        <th scope="col">No Tablet</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Alasan Peminjaman</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">

    <?php
    if (mysqli_num_rows($hasil4) > 0) {
      while ($tunjuk4 = mysqli_fetch_assoc($hasil4)) {
        echo "<tr>";
        echo "<td>" . $tunjuk4['jenis'] . "</td>";
        echo "<td>" . $tunjuk4['tanggal'] . "</td>";
        echo "<td>" . $tunjuk4['alasan'] . "</td>"; ?>
        <td><a class="btn btn-danger" href="hapus.php?alasan=<?php echo $tunjuk4['alasan'] ?>" >Kembalikan</a></td>
      <?php
        echo "</tr>";
      }
    } else {
      echo "<tr>";
      echo "<td colspan='2'>Tidak ada data yang ditemukan.</td>";
      echo "</tr>";
    }
    ?>
    </tbody>
    </table>

</div>










    
    <?php

} 

}

?>
</body>
</html>