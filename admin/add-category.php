<?php include('partials/menu.php'); ?>

<div class="main-content">

        <br><br>

        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>

        <br><br>

        <section class="food-search2">
            <div class="container">

                <form action="" method="POST" enctype="multipart/form-data" class="order">

                <div class="order-box">

                <h1>Tambah Kategori</h1><br>
                    <input type="text" name="title" placeholder="Nama">
                  
                    <input type="file" name="image">

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
                   
                    <input type="submit" name="submit" value="Tambah Kategori" class="btn btn-order2">
                </div>

                </form>
            </div>            
        </section>

        <?php
            if(isset($_POST['submit']))
            {
                $title = $_POST['title'];

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
                else{
                    $active = "No";
                }

                //print_r($_FILES['image']);

                //die();

                if(isset($_FILES['image']['name']))
                {
                    $image_name = $_FILES['image']['name'];

                    if($image_name !="")
                    {                   

                        $ext = end(explode('.', $image_name));

                        $image_name = "Food_Category_".rand(000, 999).'.'.$ext;

                        

                        $source_path = $_FILES['image']['tmp_name'];

                        $destination_path = "../images/category/".$image_name;

                        $upload = move_uploaded_file($source_path, $destination_path);

                        if($upload==false)
                        {
                            $_SESSION['upload'] = "<div class='error'>Gagal untuk meng-upload gambar</div>";
                            
                            header('location:'.SITEURL.'admin/add-category.php');

                            die();
                        }

                    }
                }
                else
                {
                    $image_name="";
                }
                

                $sql = "INSERT INTO tbl_category SET
                    title='$title',
                    image_name='$image_name',
                    featured='$featured',
                    active='$active'
                ";

                $res = mysqli_query($conn, $sql);

                if($res==true)
                {
                    $_SESSION['add'] = "<div class='success'>Kategori berhasil ditambahkan</div>";

                    header('location:'.SITEURL.'admin/manage-category.php');
                }
                else
                {
                    $_SESSION['add'] = "<div class='error'>Gagal menambahkan Kategori</div>";

                    header('location:'.SITEURL.'admin/add-category.php');
                }
            }
        ?>

</div>

<?php include('partials/footer.php'); ?>