<?php
$conn = mysqli_connect("sql105.infinityfree.com", "if0_34463434", "D50RPVgDjQyeBcp", "if0_34463434_db_pplg");
 
error_reporting(0);
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['Submit'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
 
    $sql = "SELECT * FROM users WHERE username='$username' AND pass='$pass'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            background-position: center;
            background-repeat: no-repeat;
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
<body>

<!-- welcome -->
<div class="container1">
    <p style="color: white; font-size: 75px; font-weight: 540; ">WeLend</p>
    <p style="color: white; font-size: 40px; font-weight: 200;">Peminjaman menjadi <br> lebih mudah.</p>
</div>


<!-- card login -->
    <div class="container">
        <div class="position-absolute top-50 end-0 translate-middle-y me-5">
            <div class="card" style="width : 27rem; height : 37rem; padding-top: 40px; ">
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

                            <?php if( isset($error)) : ?>
                                <p style="color: red; font-style: italic; ">Username / Password salah</p>
                            <?php endif;?>

                                <form action="" method="post" class="row g-3">

                                                <div class="col-12">
                                                    <label for="username" class="form-label"><h6 style="color: #7E7F80;">Username</h6></label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ex: jeno" id="username" name="username" autocomplete="0" required style="background-color: #D9D9D9; font-color: #A39797;">
                                                </div>

                                                <div class="col-12">
                                                    <label for="password" class="form-label"> <h6 style="color: #7E7F80;">Password</h6></label>
                                                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="********"  id="pass" name="pass" autocomplete="0" required  style="background-color: #D9D9D9; font-color: #A39797;">
                                                </div>
                                                


                                                <div class="form-check form-switch ms-2" >
                                                    <input class="form-check-input" type="checkbox" role="switch"  name="remember" id ="remember" checked>
                                                    <label class="form-check-label" for ="remember" style="color: #7E7F80;">Remember me</label>
                                                </div>

                                                

                                                <div class="butonmsk">
                                                    <div class="butonmsk"  >
                                                        <button  type="submit" class="btn btn-secondary" name="Submit" ><a style ="color: white; padding: 20px;">Submit</a></button>
                                                    </div>
                                                </div>
                                                <br>

                                                <p style="padding-top: 35px; text-align: right;">hubungi  <a href="cs.php">CS</a> jika bermasalah</p>


                                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>