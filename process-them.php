<?php
    //Kiểm tra có đúng người dùng lưu
    if(isset($_POST['btnThem'])) {
        $ID=$_POST['txtid'];
        $tenNV = $_POST['txthoten'];
        $tuoi=$_POST['txttuoi'];
        $nhommau=$_POST['txtnhommau'];
        $soluong=$_POST['soluongmau'];
        $gioitinh = $_POST['txtgioitinh'];
        $ngaynhanmau = $_POST['ngaynhanmau'];
        $sodidong = $_POST['sodidong'];


        

    require("config/db.php");

    $sql = "INSERT INTO blood_recipent(reci_id, reci_name, reci_age, reci_bgrp, reci_bqnty,reci_sex, reci_reg_date, reci_phno)
    VALUES ('$ID','$tenNV','$tuoi','$nhommau','$soluong','$gioitinh','$ngaynhanmau','$sodidong')";
    echo $sql;

    if(mysqli_query($conn,$sql)==TRUE){
        echo"Thêm thành công";
        header("location:index.php");
    }else{
        echo"Chưa thêm được";
    }


    }
   