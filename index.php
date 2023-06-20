<?php
session_start();
if ( !isset($_SESSION["username"])){
      echo "<script>alert('Anda Harus Login Terlebih Dahulu!');</script>";
      echo "<script>window.location.href = 'login.php'; </script>";
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


//lenovo data barang
$server = mysqli_connect("sql105.infinityfree.com", "if0_34463434", "D50RPVgDjQyeBcp", "if0_34463434_db_pplg");
$len = "SELECT * FROM lenovo";
$sql1 = mysqli_query($server, $len);
$jumlah_pinjam1 = mysqli_num_rows($sql1);

$total1=10;
$tersedia1= $total1-$jumlah_pinjam1; 

//acer data barang
$acer = "SELECT * FROM acer";
$sql2 = mysqli_query($server, $acer);
$jumlah_pinjam2 = mysqli_num_rows($sql2);

$tersedia2= $total1-$jumlah_pinjam2; 

//hp data barang
$hp = "SELECT * FROM handphone";
$sql3 = mysqli_query($server, $hp);
$jumlah_pinjam3 = mysqli_num_rows($sql3);

$total2 = 7;
$tersedia3= $total2-$jumlah_pinjam3; 

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

    <!-- css -->
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
        margin-top: 24%;
        margin-left: 17%;
        /* border: 15px solid green; */
        width: 82%;
      }

      .title{
			position: relative;
		  }

      .title-card{
        color: white;
		  	position: absolute;
			  left: 30px;
  			top: 25px;
      }

      .angka{
			position: absolute;
			left: 160px;
			top: 220px;
			color: white;
		}

    .text{
      position: absolute;
			left: 30px;
			top: 220px;
			color: white;  
    }

    .card{
      border: none;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .side{
        margin-top: 90%;
        margin-bottom: 13%;
        
      }


    </style>
    
</head>
<body>

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
        <div  class="side" class="logout text-dark">
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
                    <h4 style="font-style: normal; font-weight: 400; font-size: 31px; line-height: 35px;">
                        Selamat datang,
                    </h4>

                    <h4 style="font-style: normal; font-weight: 400; font-size: 76px; line-height: 91.5%; letter-spacing: 0.015em;">
                       <?= $users["username"];?>
                    </h4>

                    <h3 style="font-style: normal; font-weight: 500; font-size: 25px; line-height: 30px;">
                        <?= $users["rayon"];?> - <?= $users["rombel"];?> - <?= $users["nis"];?>
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="index2">
        <div class="row">
                <h4 style="font-style: normal; font-weight: 600; font-size: 35px; line-height: 91.5%; letter-spacing: 0.045em; color: #576A80; padding-bottom: 20px; padding-left: 5%;">
                    pinjam apa hari ini ?
                </h4>
                <hr class="border border-dark border-2 opacity-50 width-10">
                <!-- card -->
                <div class="card"  style="width: 15rem; float-right: 25px; margin: 0 8px;">
                <a href="lenovo.php">
                    <div class="title">
                       <h3 class="title-card" >Laptop Lenovo</h3>
                       <h5 class="text">Available <br> In-use</h5>
                       <h5 class="angka"><?= $tersedia1; ?> <br> <?= $jumlah_pinjam1; ?></h5>
                    </div>                    
                    <img src="lenovo.png" class="card-img-top" alt="..."> 
                </a>
                </div> 

                <div class="card" style="width: 15rem; float-right: 20px; margin: 0 8px;">
                <a href="acer.php">
                   <div class="title">
                       <h3 class="title-card" href="">Laptop <br> Acer</h3> 
                       <h5 class="text">Available <br> In-use</h5>
                       <h5 class="angka"><?= $tersedia2; ?> <br> <?= $jumlah_pinjam2; ?></h5>             
                    </div>                    
                    <img src="acer.png" class="card-img-top" alt="...">
                </a>
                </div>  
                
                <div class="card" style="width: 15rem; float-right: 20px; margin: 0 8px;">
                  <a href="hp.php">
                    <div class="title">
                        <h3 class="title-card" href="">HP</h3>
                        <h5 class="text">Available <br> In-use</h5>
                        <h5 class="angka"><?= $tersedia3; ?> <br> <?= $jumlah_pinjam3; ?></h5>
                    </div>                    
                  <img src="hp.png" class="card-img-top" alt="...">                   
                  </a>
                </div>

                <div class="card" style="width: 15rem; float-right: 20px; margin: 0 8px;">
                  <a href="lainnya.php">
                      <div class="opacity-75">
                      <div class="title">
                         <h3 class="title-card" href="">Lainnya</h3>                      
                      </div>  
                      </div>  
                    <img src="acer.png" class="card-img-top" alt="..."> 
                  </a>
                </div>

            </div>
        </div>
    </div>

    <?php

} 

}

?>

<!-- <div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>

 <script>
    $(window).on("load",function(){
      $(".loader-wrapper").fadeOut("slow");
    });
  </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>

  <script>
    $(window).on("load",function(){
      $(".loader-wrapper").fadeOut("slow");
    });
  </script> -->



  <script src="./Bootstrap/js/bootstrap.bundle.js"></script>


</body>
</html>