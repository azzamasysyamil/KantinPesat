<?php include('partials/menu.php'); ?>

<?php 
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        $sql2 = "SELECT * FROM tbl_food WHERE id=$id";

        $res2 = mysqli_query($conn, $sql2);

        $row2 = mysqli_fetch_assoc($res2);

        $title = $row2['title'];
        $description = $row2['description'];
        $price = $row2['price'];
        $current_image = $row2['image_name'];
        $current_category = $row2['category_id'];
        $featured = $row2['featured'];
        $active = $row2['active'];
    }
    else
    {
        header('location:'.SITEURL.'admin/manage-food.php');
    }
?>

<section class="food-search2">
        <div class="container">

            <form action="" method="POST" enctype="multipart/form-data" class="order">
    
            <div class="order-box">

            <h1>Update Menu</h1><br>
    
                <input type="text" name="title" class="input-responsive" value="<?php echo $title; ?>" placeholder="Nama">
                
                <textarea name="description" cols="30" rows="5" class="input-responsive" placeholder="Deskripsi"><?php echo $description; ?></textarea>
                
                <input type="number" name="price" class="input-responsive" value="<?php echo $price; ?>" placeholder="Harga">
                
                    <?php
                        if($current_image == "")
                        {
                            echo "<div class='error'>Gambar tidak tersedia</div>";
                        }
                        else
                        {
                            ?>
                            <img src="<?php echo SITEURL; ?>images/food/<?php echo $current_image; ?>" width="150px" style="border-radius:10px;">
                            <?php
                        }
                    ?>

                <br><input type="file" name="image" style="margin-top:4%;" id="file-input">
                            
                <select name="category" required>

                    <?php
                        $sql = "SELECT * FROM tbl_category WHERE active='Yes'";

                        $res = mysqli_query($conn, $sql);

                        $count = mysqli_num_rows($res);

                        if($count>0)
                        {   
                            while($row=mysqli_fetch_assoc($res))
                            {
                                $category_title = $row['title'];
                                $category_id = $row['id'];

                                ?>
                                <option <?php if($current_category==$category_id){echo "selected";} ?> value="<?php echo $category_id; ?>"><?php echo $category_title; ?></option>
                                <?php
                            }
                        }   
                        else
                        {
                            echo "<option value='0'>Kategori tidak tersedia</option>";
                        }
                    ?>
                </select>   

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
                        
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">                   
                <input type="submit" name="submit" value="Update Menu"  style="margin-top: 3%;" class="btn btn-order2" >
                </div>
        
                </form>


        <?php
            if(isset($_POST['submit']))
            {
                $id = $_POST['id'];
                $title = $_POST['title'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $current_image = $_POST['current_image'];
                $category = $_POST['category'];

                $featured = $_POST['featured'];
                $active = $_POST['active'];

                if(isset($_FILES['image']['name']))
                {
                    $image_name = $_FILES['image']['name'];

                    if($image_name!="")
                    {
                        $ext = end(explode('.', $image_name));

                        $image_name = "Food-Name-".rand(0000, 9999).'.'.$ext;

                        $src_path = $_FILES['image']['tmp_name'];
                        $dest_path = "../images/food/".$image_name;

                        $upload = move_uploaded_file($src_path, $dest_path);

                        if($upload==false)
                        {
                            $_SESSION['upload'] = "<div class='error'>Gagal meng-upload gambar baru</div>";
                            header('location:'.SITEURL.'admin/manage-food.php');
                            
                            die();
                        }

                        if($current_image!="")
                        {
                            $remove_path = "../images/food/".$current_image;

                            $remove = unlink($remove_path);
                            
                            if($remove==false)
                            {
                                $_SESSION['remove-failed'] = "<div class='error'>Gagal menghapus gambar saat ini</div>";
                                header('location:'.SITEURL.'admin/manage-food.php');
                                
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

                $sql3 = "UPDATE tbl_food SET
                    title = '$title',
                    description = '$description',
                    price = $price,
                    image_name = '$image_name',
                    category_id ='$category',
                    featured = '$featured',
                    active = '$active'
                    WHERE id=$id
                ";

                $res3 = mysqli_query($conn, $sql3);

                if($res3==true)
                {
                    $_SESSION['update'] = "<div class='success'>Food berhasil diperbarui</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }
                else
                {
                    $_SESSION['update'] = "<div class='error'>Food gagal diperbarui</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }

            }
            
        ?>
        
    </div>
</section>

<?php include('partials/footer.php'); ?>