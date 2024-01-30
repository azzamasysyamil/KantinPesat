<?php include('partials/menu.php'); ?>

<div class="main-content">

        <br><br>

        <?php
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>

        <section class="food-search2">
            <div class="container">

                <form action="" method="POST" enctype="multipart/form-data" class="order">

                <div class="order-box">

                <h1>Tambah Menu</h1><br>

                    <input type="text" name="title" placeholder="Nama">
                
                    <textarea name="description" cols="30" rows="5" placeholder="Deskripsi"></textarea>
                
                    <input type="number" name="price" placeholder="Harga">

                    <input type="file" name="image">
            
                    <select name="category" required>

                        <option value="" disabled selected>Kategori</option>

                        <?php
                            $sql = "SELECT * FROM tbl_category WHERE active='Yes'";

                            $res = mysqli_query($conn, $sql);

                            $count = mysqli_num_rows($res);

                            if($count>0)
                            {
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $id = $row['id'];
                                    $title = $row['title'];

                                    ?>
                                    <option value="<?php echo $id; ?>"><?php echo $title; ?></option>
                                    <?php
                                }
                            }
                            else
                            {
                                ?>
                                <option value="0">Tidak Ada Kategori</option>
                                <?php
                            }
                        ?>

                    </select>
                    
                        <h4>Featured</h4>

                        <div class="input-container">
                            <label>
                                <input type="radio" name="featured" value="Yes" class="inputkrn" />
                                <span>Yes</span>
                            </label>

                            <label>
                                <input type="radio" name="featured" value="No" class="inputkrn" />
                                <span>No</span>
                            </label>
                        </div>

                        <h4>Aktif</h4>

                        <div class="input-container">
                            <label>
                                <input type="radio" name="active" value="Yes" class="inputkrn" />
                                <span>Yes</span>
                            </label>

                            <label>
                                <input type="radio" name="active" value="No" class="inputkrn" />
                                <span>No</span>
                            </label>
                        </div>
                                
                        <input type="submit" name="submit" value="Tambah Menu" class="btn btn-order2">
                </div>

                </form> 
            </div>            
        </section>

        <?php 

            if(isset($_POST['submit']))
            {
                
                $title = $_POST['title'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $category = $_POST['category'];

                if(isset($_POST['featured']))
                {
                    $featured = $_POST['featured'];
                }
                else
                {
                    $featured = "No"; 
                }

                if(isset($_POST['active']))
                {
                    $active = $_POST['active'];
                }
                else
                {
                    $active = "No"; 
                }

                if(isset($_FILES['image']['name']))
                {
                    $image_name = $_FILES['image']['name'];

                    if($image_name!="")
                    {
                        $ext = end(explode('.', $image_name));

                        $image_name = "Food-Name-".rand(0000,9999).".".$ext; //New Image Name May Be "Food-Name-657.jpg"

                        $src = $_FILES['image']['tmp_name'];

                        $dst = "../images/food/".$image_name;

                        $upload = move_uploaded_file($src, $dst);

                        if($upload==false)
                        {
                            
                            $_SESSION['upload'] = "<div class='error'>Failed to Upload Image.</div>";
                            header('location:'.SITEURL.'admin/add-food.php');
                            
                            die();
                        }

                    }

                }
                else
                {
                    $image_name = ""; 
                }

                $sql2 = "INSERT INTO tbl_food SET 
                    title = '$title',
                    description = '$description',
                    price = $price,
                    image_name = '$image_name',
                    category_id = $category,
                    featured = '$featured',
                    active = '$active'
                ";

                $res2 = mysqli_query($conn, $sql2);

                if($res2 == true)
                {
                    $_SESSION['add'] = "<div class='success'>Food Added Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }
                else
                {
                    $_SESSION['add'] = "<div class='error'>Failed to Add Food.</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }

                
            }

        ?>

</div>

<?php include('partials/footer.php'); ?>