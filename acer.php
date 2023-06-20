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

$pinjam = "SELECT * FROM acer";
$sql = mysqli_query($server, $pinjam);
$jumlah_pinjam = mysqli_num_rows($sql);

// ini available & in-use
$total= 10;
$tersedia= $total-$jumlah_pinjam; 

$tanggal = date("d-m-Y H:i:s");
 
if (mysqli_num_rows($result) > 0) {

  while ($users = mysqli_fetch_assoc($result)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeLend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- style css -->
    <style>
    html{
        font-family: 'PP Pangram Sans';
      }

      .nav-pills li a:hover{
        background-color: grey;
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
        margin-top: 22%;
        margin-left: 16.5%;
        padding-left: 7%;
        width: 83.3%;
        /* border: 15px solid green; */
      }

      .status{
        position: absolute;       
        margin-left: 50%;
        top: 100px;

      }

      .text-kanan{
        text-align: left;
      }

      .card{
        float: left;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      }

      .btnn{
        position: absolute;
        margin-left: 1px;

      }

      .side{
        margin-top: 240%;
        margin-bottom: 13%;
      }

      .page{
        margin-top: 66%;
        padding-top: 43px;
      }
    
      .card:hover {
      transform: scale(1.05);
    }

    .modal-content{
      border: 2px green;
      width: 100%;
      color: #7394C6;
      border-radius: 2%;
      position: absolute;
      padding: 20px;
    }



    </style>
</head>
<body>
     <!-- side bar -->

    <div  class="container-fluid">
    <div class="row flex-nowrap">
    <!-- <input type="hidden" name="id" id="nama" value="<?= $users['id']?>"> -->
      <div   class="bg-light col-auto col-md-4 col-lg-2 min-vh-100 d-flex flex-column justify-content-between">
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
  <!-- peminjaman -->

    <!-- lenovo page -->
    <div class="index">
        <div class="col-md-5 col-lg-8">
            <!-- <div class="row text-white"> -->
                <div class="col-md-12 mt-5 ms-3 mb-5">
                    <br> <br>
                    <h1 style="font-size: 100px; color: white;">
                        ACER
                    </h1>

                    <div class="status">
                        <div class="card mb-3" style="width: 9rem; background-color: #7FE9D6; text-align: center; float: left; margin: 10px;">
                                <div class="card-body">
                                        <h1 class="card-title"><?= $tersedia;?></h1>
                                        <h5 class="card-text">Available</h5>
                                </div>
                        </div>
                            <div class="card mb-3" style="width: 9rem; background-color: #EA7A7A; text-align: center; float: left; margin: 10px;">
                                <div class="card-body">
                                    <h1 class="card-title"><?= $jumlah_pinjam;?></h1>
                                    <h5 class="card-text">In - use</h5>
                                </div>
                            </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="index2">
        <div class="laptop1">
                <div class="card" style="margin: 15px; width: 11.5rem; ">
                                <div class="card-body" style="text-align: center; float: left;">
                                  <span class="material-symbols-outlined" style="font-size: 6em;">
                                  laptop_mac
                                  </span>
                                  <div class="text-kanan">
                                      <p class="card-title">No Laptop : 1</p>
                                      <p class="card-text">Status : baik</p>                                        
                                  </div>
                            </div>
                          </div>

                          <div class="card" style="margin: 15px; width: 11.5rem; ">
                                <div class="card-body" style="text-align: center; float: left;">
                                    <span class="material-symbols-outlined" style="font-size: 6em;">
                                    laptop_mac
                                    </span>
                                  <div class="text-kanan">
                                      <p class="card-title">No Laptop : 2</p>
                                      <p class="card-text">Status : baik</p>                                        
                                  </div>
                            </div>
                          </div>

                          <div class="card" style="margin: 15px; width: 11.5rem;">
                                <div class="card-body" style="text-align: center; float: left;">
                                    <span class="material-symbols-outlined" style="font-size: 6em;">
                                    laptop_mac
                                    </span>
                                  <div class="text-kanan">
                                      <p class="card-title">No Laptop : 3</p>
                                      <p class="card-text">Status : baik</p>                                        
                                  </div>
                            </div>
                          </div>

                          <div class="card" style="margin: 15px; width: 11.5rem; ">
                                <div class="card-body" style="text-align: center; float: left;">
                                    <span class="material-symbols-outlined" style="font-size: 6em;">
                                    laptop_mac
                                    </span>
                                  <div class="text-kanan">
                                      <p class="card-title">No Laptop : 4</p>
                                      <p class="card-text">Status : baik</p>                                        
                                  </div>
                            </div>
                          </div>

                        <div class="card" style="margin: 15px; width: 11.5rem; ">
                                <div class="card-body" style="text-align: center; float: left;">
                                    <span class="material-symbols-outlined" style="font-size: 6em;">
                                    laptop_mac
                                    </span>
                                  <div class="text-kanan">
                                      <p class="card-title">No Laptop : 5</p>
                                      <p class="card-text">Status : baik</p>                                        
                                  </div>
                                </div>
                        </div>


                           <div class="card" style="margin: 15px; width: 11.5rem; ">
                                <div class="card-body" style="text-align: center; float: left;">
                                    <span class="material-symbols-outlined" style="font-size: 6em;">
                                    laptop_mac
                                    </span>
                                  <div class="text-kanan">
                                      <p class="card-title">No Laptop : 6</p>
                                      <p class="card-text">Status : baik</p>                                        
                                  </div>
                            </div>
                          </div>

                          <div class="card" style="margin: 15px; width: 11.5rem; ">
                                <div class="card-body" style="text-align: center; float: left;">
                                    <span class="material-symbols-outlined" style="font-size: 6em;">
                                    laptop_mac
                                    </span>
                                  <div class="text-kanan">
                                      <p class="card-title">No Laptop : 7</p>
                                      <p class="card-text">Status : baik</p>                                        
                                  </div>
                            </div>
                          </div>

                          <div class="card" style="margin: 15px; width: 11.5rem;">
                                <div class="card-body" style="text-align: center; float: left;">
                                    <span class="material-symbols-outlined" style="font-size: 6em;">
                                    laptop_mac
                                    </span>
                                  <div class="text-kanan">
                                      <p class="card-title">No Laptop : 8</p>
                                      <p class="card-text">Status : baik</p>                                        
                                  </div>
                            </div>
                          </div>

                        <!-- laptop 09 -->
                        <div class="card" style="margin: 15px; width: 11.5rem; ">
                                <div class="card-body" style="text-align: center; float: left;">
                                    <span class="material-symbols-outlined" style="font-size: 6em;">
                                    laptop_mac
                                    </span>
                                  <div class="text-kanan">
                                      <p class="card-title">No Laptop : 9</p>
                                      <p class="card-text">Status : baik</p>                                        
                                  </div>
                                </div>
                          </div>

                        <!-- laptop 10 -->
                          <div class="card" style="margin: 15px; width: 11.5rem; ">
                                <div class="card-body" style="text-align: center; float: left;">
                                    <span class="material-symbols-outlined" style="font-size: 6em;">
                                    laptop_mac
                                    </span>
                                  <div class="text-kanan">
                                      <p class="card-title">No Laptop : 10</p>
                                      <p class="card-text">Status     : baik</p>                                        
                                  </div>
                                </div>
                          </div>
          </div>

<!-- pagination -->
<div class="page">

  <!-- pop up confirm -->
  <div class="btnn">
      <div class="d-grid gap-2 col-6 mx-auto">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Pinjam
      </button>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h3 style="text-align: left;">Konfirmasi peminjaman </h3>              
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
            <form action="pinjam.php" method="POST">
                          <span class="material-symbols-outlined" style="font-size: 4em; float: left;">
                            laptop_mac
                          </span>

                          <div class="text-kanan" style="float: left; margin-left: 18%; width: 83%; margin-top:-65px;">
                              <p class="card-text"  >No Laptop : <select name="jenis" id="borrow"  aria-label="Default select example" >
                                <option selected value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                              </select>
                            </p>
                              <p class="card-text" name="borrow" >Tanggal : <?= $tanggal ?></p>   
                          </div>
                          <div class="text-kiri">
                                  
                          </div>
                          <br> <br> <br>

                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"><h4 >Keperluan :</h4></label>
                            <br>
                            <textarea class="form-control" id="exampleFormControlTextarea1"  name="alasan" rows="7" placeholder="Tulis disini . . ."></textarea>
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="borrow">Submit</button>
                          </div>
              </form>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
               <nav aria-label="Page navigation example">
           <ul class="pagination justify-content-end">
           <li class="page-item">
              <a class="page-link" href="lenovo.php">Previous</a>
            </li>
             <li class="page-item"><a class="page-link" href="lenovo.php">1</a></li>
             <li class="page-item"><a class="page-link" href="acer.php">2</a></li>
             <li class="page-item"><a class="page-link" href="hp.php">3</a></li>
             <li class="page-item"><a class="page-link" href="lainnya.php">4</a></li>
             <li class="page-item">
                <a class="page-link" href="hp.php">Next</a>
             </li>
             </ul>
          </nav>  

</div>

<?php

} 

}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>
</html>