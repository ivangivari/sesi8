<?php
    include("Konfigurasi.php");
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die ("Gagal koneksi ke dbms");
    $jdpage = "List";
    $page = "userlist.php";

    if(isset($_GET["aksi"])){
        switch($_GET["aksi"]){
            case "new":
                $page ="user-new.php";
                $jdpage ="Tambah";
                break;
                case "edit":
                    break;
            case "del":
                break;
            }
        }

if(isset($_POST["opsi"]))
         switch($_POST["opsi"]){
            case "store":
                $p1 = $_POST["txPASS1"];
                $p2 = $_POST["txPASS2"]; 
                if($p1 == $p2){
                    $nama = $_POST["txNAMA"];
                    $email = $_POST["txEMAIL"];
                    $username = $_POST["txEMAIL"];
                    $ideuser = md5[$email];         
                
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   include ($page);
    ?>
</body>
</html>