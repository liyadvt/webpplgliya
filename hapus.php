<?php
    $alasan = $_GET['alasan'];
    $server = mysqli_connect("sql105.infinityfree.com", "if0_34463434", "D50RPVgDjQyeBcp", "if0_34463434_db_pplg");
 
    $sql = "DELETE FROM acer WHERE alasan = '$alasan'";

    $query = mysqli_query($server, $sql);
     if ($query) {
        echo "<script>
        alert('Berhasil di kembalikan!')
        </script>";
        header("location: pengembalian.php");
    } else {
        echo "Penghapusan gagal sebab : <br>".mysqli_error($server);
    }

    $sql2 = "DELETE FROM lenovo WHERE alasan = '$alasan'";

    $query2 = mysqli_query($server, $sql2);
     if ($query2) {
        echo "<script>
        alert('Berhasil di kembalikan!')
        </script>";
        header("location: pengembalian.php");
    } else {
        echo "Penghapusan gagal sebab : <br>".mysqli_error($server);
    }

    $sql3 = "DELETE FROM handphone WHERE alasan = '$alasan'";

    $query3 = mysqli_query($server, $sql3);
     if ($query3) {
        echo "<script>
        alert('Berhasil di kembalikan!')
        </script>";
        header("location: pengembalian.php");
    } else {
        echo "Penghapusan gagal sebab : <br>".mysqli_error($server);
    }

    $sql4 = "DELETE FROM tablet WHERE alasan = '$alasan'";

    $query4 = mysqli_query($server, $sql4);
     if ($query4) {
        echo "<script>
        alert('Berhasil di kembalikan!')
        </script>";
        header("location: pengembalian.php");
    } else {
        echo "Penghapusan gagal sebab : <br>".mysqli_error($server);
    }
?>