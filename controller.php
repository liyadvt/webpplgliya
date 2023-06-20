<?php
    $conn = mysqli_connect("sql105.infinityfree.com", "if0_34463434", "D50RPVgDjQyeBcp", "if0_34463434_db_pplg");

    function query ($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows =[ ];
        while ($row = mysqli_fetch_assoc ($result)){
            $rows [ ] = $row;
        }
        return $rows;
    }


    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM users WHERE id = $id");
        // menghasilkan nilai 1 atau -1 jika terjadi perubahan data dan akan mengirimkan pesan
        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        global $conn;
        $id = $data["id"];
        $username = htmlspecialchars($data["username"]);
        $rombel = htmlspecialchars($data["rombel"]);
        $rayon = htmlspecialchars($data["rayon"]);
        $nis = htmlspecialchars($data["nis"]);
        $gambarLama = htmlspecialchars($data["gambarLama"]);

        //cek user pilih gambar baru atau tidak
        if( $_FILES['image']['error'] === 4){
            $image = $gambarLama;
        } else {
            $image = upload();
        }


        $query = "UPDATE users SET
                    username   = '$username',
                    rombel     = '$rombel',
                    rayon      = '$rayon',
                    nis        = '$nis',
                    image      = '$image',
                    WHERE id   = $id
                ";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }


    function register($data){
        global $conn;


        $username = strtolower(stripslashes($data['username']));
        $pass = mysqli_real_escape_string($conn, $data['pass']);
        $conf_pass = mysqli_real_escape_string($conn, $data['conf_pass']);
        $rombel = strtolower(stripslashes($data['rombel']));
        $rayon = strtolower(stripslashes($data['rayon']));
        $nis = strtolower(stripslashes($data['nis']));
      //upload gambar
        // $image = ($data['image']);

        //cek usn udah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                        alert('username tersebut sudah terdaftar, silahkan ganti username lain!')
                  </script>";

            return false;
        }

        //cek apakah pw sama
        if ($pass !== $conf_pass){
            echo"
                <script>
                alert('password tidak sesuai !');
                </script>
            ";
            return false;
        }

        // //enkripsi /  ubah pass jadi tidak terlihat 
        // $pass = password_hash($pass, PASSWORD_DEFAULT);

        //input datanya ke db 
        $query = "INSERT INTO users 
            VALUES
                ('', '$username', '$pass', '$rombel', '$rayon', '$nis')
        ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows ($conn);
    }


