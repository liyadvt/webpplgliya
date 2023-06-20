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
    <title>Document</title>
    <title>WeLend</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
    html{
        font-family: 'PP Pangram Sans';
      }

    * {
    padding :0%;
    margin: 0%;
    font-family: 'PP Pangram Sans';
    }

    .container1 {
    background-image: url("Login-bg.png");
    height: 50%;
    width: 83.3%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }

    .container-fluid{
        font-size: 10px;
        
      }

    .nav-pills li a:hover{
        background-color: grey;
      }

    ul li{
    text-decoration:none;
    }

    .card{
        margin: 10%;
        padding: 5%;
        border: 3px black;
        color: #585E97;
        background-color: #FFFFFF;
        
    
    }

    .card2{
        position: absolute;
		    left: 130px;
		    top: 163px;
        background-color: white; 
        opacity: 100%;
        margin: 20%;
        padding: 2%;
        color: black;
        box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);
        
    }

    .hubungi{
        position: absolute;
		left: 65%;
		top: 65px;

    }

    .image{
        position: absolute;
		    left: 65%;
		    top: 35px;
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
        <div class="logout text-dark">
          <a href="logout.php" class="nav-link text-dark">
            <span class="material-symbols-outlined">
              logout
            </span><span class="fs-6 d-none ms-1 d-sm-inline" >Logout</span>
          </a>
        </div>
    </div>


    <!-- customer service box -->
    <div class="container1">
        <div class="row text-white">
            <div class="card" style="width: 55rem; height: 30rem;">
            <div class="image">
                    <img src="Logo-orang.png" alt="" style="width:100%; height: 100%;">   
            </div>
                <div class="card-body" style="width: 33rem; height: 35rem;"> 
                    <h1 class="card-title">Kontak CS  Untuk Informasi lebih lanjut</h1>
                    <hr class="border border-dark border-2 opacity-50">
                    <br>
                    <h4 class="card-subtitle mb-2 text-body-secondary">Bila memiliki masalah, keluhan,<br> pertanyaan. Silahkan hubungi <br> nomer berikut</h4>
                    <br> <br> <br>
                </div>
            </div>
            
         <div class="card2" style="width: 30rem; height: 8rem;">
                <div class="card-body">
                <div class="hubungi">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button  href="#"  type="submit" class="btn btn-primary" name="submit" ><a href="https://wa.me/6283112326534" style ="color: white;">HUBUNGI</a></button>
                        </div>
                </div>  
                    <form>
                        <fieldset disabled>                                
                            <div class="col-md-8">
                                <label for="disabledTextInput" class="form-label"><h5>Hubungi CS</h5></label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="WA : 083112326534">                                  
                            </div>
                    </form>
                </div>
                
        </div>
        
    </div>
        

    
    <?php

} 

}

?>
</body>
</html>

