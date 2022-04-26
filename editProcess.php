<?php
    include "myconnection.php";

    $photo = $_GET["Myfoto"];
    $id = $_GET["myid"];
    $name = $_GET["myname"];
    $address = $_GET["myaddress"];

    $query = "UPDATE student SET foto = '$photo' , name='$name' , address='$address'  WHERE id=$id";

    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD.php');
    }else{
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>