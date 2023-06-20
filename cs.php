

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

    * {
    font-family: 'PP Pangram Sans'; 
    }

    .container1 {
    background-image: url("Login-bg.png");
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
        position: center;
        margin-left: 18%;
    
    }

    .card2{
        position: absolute;
		top: 290px;
        left: 110px;
        background-color: white; 
        opacity: 100%;
        margin: 15%;
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
		    top: 80px;
    }


    

    </style>
</head>
<body>


    <!-- customer service box -->
    <div class="container1">
        <div class="row text-white" style="margin: 0 !important">
            <div class="card" style="width: 55rem; height: 35rem;">
            <a href="login.php"><span class="material-symbols-outlined">
            arrow_back
            </span></a>
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
        

    
</body>
</html>

