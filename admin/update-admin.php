<?php include('partials/menu.php'); ?>

<div class="main-content">

        <br><br>

        <?php 
        
            $id=$_GET['id'];

            $sql="SELECT * FROM tbl_admin WHERE id=$id";

            $res=mysqli_query($conn, $sql);

            if($res==true)
            {
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    //echo "Admin Tersedia";
                    $row=mysqli_fetch_assoc($res);

                    $full_name = $row['full_name'];
                    $username = $row['username'];

                }
                else
                {
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }

        ?>

        <section class="food-search2">
            <div class="container">

                <form action="" method="POST" class="order">
                
                <div class="order-box">
                    <h1>Update Admin</h1><br>
                    <input type="text" name="full_name" value="<?php echo $full_name;?>">
                    
                    <input type="text" name="username" value="<?php echo $username;?>">
                               
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="submit" name="submit" value="Update Admin" class="btn btn-order2">
                </div>
                
                </form>
            </div>            
        </section>

    </div>
</div>

<?php
    if(isset($_POST['submit']))
    {
        //echo "Tombol diklik"
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];

        $sql = "UPDATE tbl_admin SET
        full_name = '$full_name',
        username = '$username'
        WHERE id='$id'
        ";

        $res = mysqli_query($conn, $sql);

        if($res==true)
        {
            $_SESSION['update'] = "<div class='success'>Admin Diperbarui</div>";
            header('location:'.SITEURL.'admin/manage-admin.php');
        }
        else
        {
            $_SESSION['update'] = "<div class='success'>Admin Gagal Diperbarui</div>";
            header('location:'.SITEURL.'admin/manage-admin.php');
        }
    }
?>

<?php include('partials/footer.php'); ?>

