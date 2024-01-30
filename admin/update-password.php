<?php include('partials/menu.php'); ?>

<div class="main-content">
        <br><br>

        <?php
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
            }
        ?>

        <section class="food-search2">
            
            <div class="container">
                <form action="" method="POST" class="order">

                <div class="order-box">
                    <h1>Ubah Password</h1><br>

                    <input type="password" name="current_password" placeholder="Password Sekarang">

                    <input type="password" name="new_password" placeholder="Password Baru">
                    
                    <input type="password" name="confirm_password" placeholder="Konfirmasi Password">
                        
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="submit" name="submit" value="Ubah Password" class="btn btn-order2">
                </form>
                    
                </div>
            </div>
        </section>
    </div>
</div>

<?php 
    if(isset($_POST['submit']))
    {
        //echo "clicked";
        $id=$_POST['id'];
        $current_password = md5($_POST['current_password']);
        $new_password = md5($_POST['new_password']);
        $confirm_password = md5($_POST['confirm_password']);

        $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";

        $res = mysqli_query($conn, $sql);

        if($res==true)
        {
            $count=mysqli_num_rows($res);

            if($count==1)
            {
                //echo "Admin ditemukan";
                if($new_password==$confirm_password)
                {
                    //echo "Password sama";
                    $sql2 = "UPDATE tbl_admin SET
                        password='$new_password'
                        WHERE id=$id
                    ";

                    $res2 = mysqli_query ($conn, $sql2);

                    if($res2==true)
                    {
                        $_SESSION['change-pwd'] = "<div class='success'>Password berhasil diubah</div>";
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                    else
                    {
                        $_SESSION['change-pwd'] = "<div class='error'>Password gagal diubah</div>";
                        header('location:'.SITEURL.'admin/manage-admin.php');

                    }
                }
                else
                {
                    $_SESSION['pwd-not-match'] = "<div class='error'>Password tidak sama</div>";
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }
            else
            {
                $_SESSION['user-not-found'] = "<div class='error'>Admin tidak ditemukan</div>";
                header('location:'.SITEURL.'admin/manage-admin.php');
            }
        }
    }
?>

<?php include('partials/footer.php'); ?>