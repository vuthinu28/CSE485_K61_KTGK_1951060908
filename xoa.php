<?php

        require("config/db.php");
        $id = $_GET['reci_id'];
    $sql = "DELETE FROM blood_recipent WHERE reci_id=$id";
    echo $sql;
    if(mysqli_query($conn,$sql)==TRUE){
            echo"Xóa thành công";
            header("location:index.php");
        }else{
            echo"Chưa xóa được";
        }



?>

