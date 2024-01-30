<?php include('partials/menu.php') ?>

<div class="main-content">

        <br><br>

        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>

        <section class="food-search2">
            
            <div class="container">

                <form action="" method="POST" class="order">

                <div class="order-box">
            
                    <h1>Add Admin</h1><br>

                    <input type="text" name="full_name" placeholder="Nama Lengkap">

                    <input type="text" name="username" placeholder="Username">
                    
                    <input type="password" name="password" placeholder="Password">
                    
                    
                    <input type="submit" name="submit" value="Tambah Admin" class="btn btn-order2 atas">

                </div> 
                   
                </form>

            </div>
        </section>
</div>

<?php include('partials/footer.php') ?>

<?php 
    //Process the Value from Form and Save it in Database
    
    //check

    if(isset($_POST['submit']))
    {
        //Button clicked
        //echo "Button Clicked";

        //1. get data from form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //password encript by md5

        //2. sql query to save the data into database
        $sql = "INSERT INTO tbl_admin SET
            full_name='$full_name',
            username='$username',
            password='$password'
        ";

        //3. Executing Query and Saving Data into Database
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        //4. Check whether (Query is executed) he data is inserted or not and displayed appropriate message
        if($res==TRUE)
        {
            $_SESSION['add'] = "Admin Added Successfully";
            header("location:".SITEURL.'admin/manage-admin.php');
        }
        else
        {
            $_SESSION['add'] = "Failed to Add Admin";
            header("location:".SITEURL.'admin/manage-admin.php');
        }


    }
?>