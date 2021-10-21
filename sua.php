<?php 
    include('templates/header.php');
?>
<?php
    require("config/db.php");
?>
<div class="main-content">
    <div class="wrapper">
        <h1>Sửa Thông Tin Người Nhận Máu</h1>

        <br><br>

        <?php 
        
            //1. Get the ID of Selected Admin
            $id=$_GET['reci_id'];

            //2. Create SQL Query to Get the Details
            $sql="SELECT * FROM blood_recipent WHERE reci_id=$id";

            //Execute the Query
            $res=mysqli_query($conn, $sql);

            //Check whether the query is executed or not
            if($res==true)
            {
                // Check whether the data is available or not
                $count = mysqli_num_rows($res);
                //Check whether we have admin data or not
                if($count==1)
                {
                    // Get the Details
                    //echo "Admin Available";
                    $row=mysqli_fetch_assoc($res);

                    $tenNV = $row['reci_name'];
                    $tuoi=$row['reci_age'];
                    $nhommau=$row['reci_bgrp'];
                    $soluong=$row['reci_bqnty'];
                    $gioitinh = $row['reci_sex'];
                    $ngaynhanmau = $row['reci_reg_date'];
                    $sodidong = $row['reci_phno'];
                    $manv = $row['reci_id'];
                }
                else
                {
                    //Redirect to Manage Admin PAge
                    header('location:index.php');
                }
            }
        
        ?>


<form action="process-sua.php" method="POST">
<table class="tbl-50">
    <tr>
        <td>Họ Tên: </td>
        <td>
            <input type="text" name="hoten" value="<?php echo $tenNV;?>">
        </td>
    </tr>

    <tr>
        <td>Tuổi: </td>
        <td>
            <input type="text" name="tuoi" value="<?php echo $tuoi; ?>">
        </td>
    </tr>
    <tr>
        <td>Nhóm Máu: </td>
        <td>
            <input type="text" name="nhommau" value="<?php echo $nhommau; ?>">
        </td>
    </tr>
   
    <tr>
        <td>Số Lượng Máu: </td>
        <td>
            <input type="text" name="soluong" value="<?php echo $soluong; ?>">
        </td>
    </tr>
    <tr>
        <td>Giới Tính: </td>
        <td>
            <input type="text" name="gioitinh" value="<?php echo $gioitinh; ?>">
        </td>
    </tr>
    <tr>
        <td>Ngày Nhận Máu: </td>
        <td>
            <input type="text" name="ngaynhanmau" value="<?php echo $ngaynhanmau; ?>">
        </td>
    </tr>
    <tr>
        <td>Số di động: </td>
        <td>
            <input type="text" name="sodidong" value="<?php echo $sodidong; ?>">
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" name="btnSua" value="Sửa" class="btn-secondary">
        </td>
    </tr>

</table>

</form>
</div>
</div>








<?php include('templates/footer.php'); ?>