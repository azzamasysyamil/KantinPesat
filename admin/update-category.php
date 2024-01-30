<?php include('partials/menu.php'); ?>

<div class="main-content">

        <br><br>

        <?php
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];

                $sql = "SELECT * FROM tbl_category WHERE id=$id";

                $res = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    $row = mysqli_fetch_assoc($res);
                    $title  = $row['title'];
                    $current_image = $row['image_name'];
                    $featured = $row['featured'];
                    $active = $row['active'];
                }
                else
                {
                    $_SESSION['no-category-found'] = "<div class='error'>Kategori tidak ditemukan</div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
            }
            else
            {
                header('location:'.SITEURL.'admin/manage-category.php');
            }
        ?>

        <section class="food-search2">
            <div class="container">

                <form action="" method="POST" enctype="multipart/form-data" class="order">

                <div class="order-box">

                <h1>Update Kategori</h1><br>

                <input type="text" name="title" value="<?php echo $title; ?>" placeholder="nama">
              
                <?php
                    if($current_image !="")
                    {
                        ?>
                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $current_image; ?>" width="150px" style="border-radius:10px;">
                        <?php
                    }
                    else
                    {
                        echo "<div class='error'>Gambar tidak ditambahkan</div>";
                    }
                ?>
                
                <input type="file" name="image" style="margin-top:4%;" >
               
                <h4>Featured</h4>
    
                <div class="input-container">
                    <label>
                        <input  <?php if($featured=="Yes") {echo "checked";} ?> type="radio" name="featured" value="Yes" class="inputkrn" />
                        <span>Yes</span>
                    </label>
    
                    <label>
                        <input <?php if($featured=="No") {echo "checked";} ?> type="radio" name="featured" value="No" class="inputkrn" />
                        <span>No</span>
                    </label>
                </div>
    
            <h4>Aktif</h4>
    
                <div class="input-container">
                    <label>
                        <input <?php if($active=="Yes") {echo "checked";} ?>  type="radio" name="active" value="Yes" class="inputkrn" />
                        <span>Yes</span>
                    </label>
    
                    <label>
                        <input <?php if($active=="No") {echo "checked";} ?>  type="radio" name="active" value="No" class="inputkrn" />
                        <span>No</span>
                    </label>
                </div>
               
                    <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="submit" name="submit" value="Update Kategori" class="btn btn-order2">
                </div>

                </form>
            </div>            
        </section>

        <?php

            if(isset($_POST['submit']))
            {
                $id = $_POST['id'];
                $title = $_POST['title'];
                $current_image = $_POST['current_image'];
                $featured = $_POST['featured'];
                $active = $_POST['active'];

                if(isset($_FILES['image']['name']))
                {
                    $image_name = $_FILES['image']['name'];

                    if($image_name != "")
                    {
                        $ext = end(explode('.', $image_name));

                        $image_name = "Food_Category_".rand(000, 999).'.'.$ext;

                        

                        $source_path = $_FILES['image']['tmp_name'];

                        $destination_path = "../images/category/".$image_name;

                        $upload = move_uploaded_file($source_path, $destination_path);

                        if($upload==false)
                        {
                            $_SESSION['upload'] = "<div class='error'>Gagal untuk meng-upload gambar</div>";
                            
                            header('location:'.SITEURL.'admin/manage-category.php');

                            die();
                        }
                        
                        if($current_image!="")
                        {
                            $remove_path = "../images/category/".$current_image;

                            $remove = unlink($remove_path);

                            if($remove==false)
                            {
                                $_SESSION['failed-remove'] = "<div class='error'>Gagal menghapus gambar</div>";
                                header('location:'.SITEURL.'admin/manage-category.php');
                                die();
                            }
                        }

                        
                    }
                    else
                    {
                        $image_name = $current_image;
                    }
                }
                else
                {
                    $image_name = $current_image;
                }
                
                $sql2 = "UPDATE tbl_category SET
                    title = '$title',
                    image_name = '$image_name',
                    featured = '$featured',
                    active = '$active'
                    WHERE id=$id
                ";

                $res2 = mysqli_query($conn, $sql2);

                if($res2==true)
                {
                    $_SESSION['update'] = "<div class='success'>Kategori berhasil di-update</div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
                else
                {
                    $_SESSION['update'] = "<div class='success'>Kategori gagal di-update</div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
            }

        ?>

</div>

<?php include('partials/footer.php'); ?>