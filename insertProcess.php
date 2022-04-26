<?php
    include "myconnection.php";

    $photo = $_FILES["Myfoto"]["name"];
    $name = $_POST["myname"];
    $address = $_POST["myaddress"];
    $tmpnamaFoto = $_FILES["Myfoto"]["tmp_name"];

    $lokasiUpload = "images/";

    move_uploaded_file($tmpnamaFoto , $lokasiUpload . $photo);

    $query = "INSERT INTO student(foto,name,address)
            VALUE('$photo','$name','$address')";

    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil ditambahkan";
    }else{
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>