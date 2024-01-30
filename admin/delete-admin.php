<?php 

    include('../config/constants.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_admin WHERE id=$id";

    $res = mysqli_query($conn, $sql);

    if($res==true)
    {
        //echo "you can";
        $_SESSION['delete'] = "<div class='success'>Sukses Menghapus Admin</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
        $_SESSION['delete'] = "<div class='error'>Gagal Menghapus Admin</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
?>