<?php
  require("config/db.php");
 
if(isset($_POST['btnSua']))
{
 
//echo "Button CLicked";
//Get all the values from form to update
        $id = $_POST['reci_id'];
        $tenNV = $_POST['txthoten'];
        $tuoi=$_POST['txttuoi'];
        $nhommau=$_POST['txtnhommau'];
        $soluong=$_POST['soluongmau'];
        $gioitinh = $_POST['txtgioitinh'];
        $ngaynhanmau = $_POST['ngaynhanmau'];
        $sodidong = $_POST['sodidong'];

       
        
        //Create a SQL Query to Update Admin
        $sql = "UPDATE blood_recipent SET
        reci_name ='$tenNV';
        reci_age='$tuoi';

        reci_bgrp='$nhommau';

        reci_bqnty='$soluong';
        reci_sex='$gioitinh';
        reci_reg_date='$ngaynhanmau';
        reci_phno='$sodidong';
        WHERE reci_id='$id'
        ";

//Execute the Query


//Check whether the query executed successfully or not
if(mysqli_query($conn, $sql)==true)
{
    //Query Executed and Admin Updated
    echo"Sửa thành công.";
    //Redirect to Manage Admin Page
    header("location:index.php");
}
else
{
    //Failed to Update Admin
    echo"Không sửa được.";
    //Redirect to Manage Admin Page

}
}

?>