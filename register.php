<?php
 
    require 'controller.php';

    if(isset($_POST['submit'])){
        $result = register($_POST);
        if($result > 0 ){
            echo "
                <script>
                    alert('Data berhasil dimasukkan');
                    window.location.href = 'login.php';
                </script>
            ";
            exit;
        } else{
            mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
       
    <style>
        * {
            padding :0%;
            margin: 0%;
            font-family: sans-serif;
        }

        body, html {
            height: 100%;
            background-image: url("Login-bg.png");
            height: 100%;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }

        a{
            text-decoration: none;
            color: #8EA7E9;
        }

        p{
            color: #7E7F80;
        }

        .card{
            background-color : white;
            padding: 20px;
        }

        .butonmsk{
            margin-right:500px !important;
        }

        .container1{
            position: center;
            padding-top: 80px;
            padding-left: 80px;
        }
        

    </style>

</head>            
<!-- welcome -->
<div class="container1">
    <p style="color: white; font-size: 75px; font-weight: 540; ">WeLend</p>
    <p style="color: white; font-size: 40px; font-weight: 200;">Peminjaman menjadi <br> lebih mudah.</p>
</div>


<!-- card login -->
    <div class="container">
        <div class="position-absolute top-50 end-0 translate-middle-y me-5">
            <div class="card" style="width : 27rem; height : 55rem; padding-top: 40px; margin-top: 300px; margin-bottom: 50px;">
                <div class="card-body">
                    <br>
                            <!-- <h1 > Login </h1> -->
 
                             <ul class="nav nav-underline" style="padding-left: 50px;">
                                <li class="nav-item">
                                    <a a class="nav-link active" aria-current="page" href="login.php">
                                        <p class="hover-underline-animation" style="text-align: center;  font-family: 'Poppins', sans-serif; color: #716B6B; font-size: 30px;">Login</p>
                                    </a>
                                </li>
                                <br>
                                <li class="nav-item">
                                    <a class="nav-link" href="register.php">
                                        <p class="hover-underline-animation" style="text-align: center;  font-family: 'Poppins', sans-serif; color: #716B6B; font-size: 30px;">Register</p>
                                    </a>
                                </li>
                            </ul>
                            <br>


                                <!-- </form> -->
                                <form action="" method="post" class="row g-3">

                                            <div class="col-12">
                                                <label for=" " class="form-label"><h6 style="color: #7E7F80;">Username</h6></label>
                                                <input type="text" class="form-control" name="username" autocomplete="0" id="exampleFormControlInput1" placeholder="ex: jeno" style="background-color: #D9D9D9; font-color: #A39797;" required>
                                            </div>

                                            <div class="col-6">
                                                <label for=" " class="form-label"> <h6 style="color: #7E7F80;">NISN</h6></label>
                                                <input type="number" class="form-control" name="nis" autocomplete="0"  id="exampleFormControlInput1" placeholder="ex: 1220*****" style="background-color: #D9D9D9; font-color: #A39797;" required>
                                            </div>

                                            <div class="col-6">
                                                <label for=" " class="form-label"> <h6 style="color: #7E7F80;">Rombel</h6></label>
                                                <input type="text" class="form-control" name="rombel" autocomplete="0" id="exampleFormControlInput1" placeholder="ex: PPLG X5" style="background-color: #D9D9D9; font-color: #A39797;" required>
                                            </div>

                                            <div class="col-12">
                                                <label for=" " class="form-label"> <h6 style="color: #7E7F80;">Rayon</h6></label>
                                                <input type="text" class="form-control" name="rayon" autocomplete="0"  id="exampleFormControlInput1" placeholder=" ex: Ciawi 02" style="background-color: #D9D9D9; font-color: #A39797;" required>
                                            </div>

                                            <div class="col-12">
                                                <label for=" " class="form-label"> <h6 style="color: #7E7F80;">Password</h6></label>
                                                <input type="password" class="form-control" name="pass" autocomplete="0" id="exampleFormControlInput1" placeholder="********" style="background-color: #D9D9D9; font-color: #A39797;" required>
                                            </div>

                                            <div class="col-12">
                                                <label for=" " class="form-label"> <h6 style="color: #7E7F80;">Confirm password</h6></label>
                                                <input type="password" class="form-control" name="conf_pass" autocomplete="0" id="exampleFormControlInput1" placeholder="********" style="background-color: #D9D9D9; font-color: #A39797;" required>
                                            </div>
                                            
                                            <!-- <div class="mb-3">
                                                <label for="formFile" class="form-label"><h6 style="color: #7E7F80;">Image</h6></label>
                                                <input class="form-control" type="file" id="formFile" name="image" id="image" style="background-color: #D9D9D9; font-color: #A39797;" required>
                                            </div> -->

                                            <div class="mb-3">
                                                <button  type="submit" class="btn btn-primary" name="submit"><a style ="color: white;">Submit</a></button>
                                                <button  type="submit" class="btn btn-primary" name="back"><a href="login.php" style ="color: white;">Back</a></button>
                                            </div>
                                              
                                            <br>
                                            <p style="padding-top: 35px; text-align: right;">hubungi  <a href="contact.php">CS</a> jika bermasalah</p>
                            </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>