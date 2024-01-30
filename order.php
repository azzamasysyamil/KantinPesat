<?php include('partials-front/menu.php'); ?>

    <?php 
        if(isset($_GET['food_id']))
        {
            $food_id = $_GET['food_id'];

            $sql = "SELECT * FROM tbl_food WHERE id=$food_id";

            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);

            if($count==1)
            {
                $row = mysqli_fetch_assoc($res);

                $title = $row['title'];
                $price = $row['price'];
                $image_name = $row['image_name'];


            }
            else
            {
                header('location:'.SITEURL);
            }
        }
        else
        {
            header('location:'.SITEURL);
        }
    ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search2">
        <div class="container">

            <form action="" method="POST" class="order">
                <div class="order-box">
                    <div class="food-menu-img2">
                        <?php 
                            if($image_name=="")
                            {
                                echo "<img src='images/noimage.png' class='img-responsive2 img-curve2'>";
                            }
                            else
                            {   
                                ?>
                                <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" class="img-responsive2 img-curve2">
                                <?php
                            }
                        ?>                        
                    </div>
    
                
                    <div class="food-menu-desc2" style="height:100px;">
                        <h3><?php echo $title; ?></h3>
                        <input type="hidden" name="food" value="<?php echo $title; ?>">

                        <p class="food-price">Rp<?php echo number_format($price,2,",","."); ?></p>
                        <input type="hidden" name="price" value="<?php echo $price; ?>">
                    </div>

                    <input autocomplete="off" type="text" name="full-name" placeholder="Nama Lengkap" class="input-responsive" required>

                    <input autocomplete="off" type="tel" name="contact" placeholder="Kontak" class="input-responsive input-num" required>

                    <textarea autocomplete="off" cols="30" rows="5" type="text" name="notes" placeholder="Catatan"  style="margin-bottom:20px;" class="input-responsive" required></textarea>

                    <div class="order-label" style="width:20%; float: left; margin-top:20px; margin-bottom:20px;">Jumlah</div>
                    <div class="number-input" style="float:right; margin-top:20px; margin-bottom:20px;">
                        <button type="button" onclick=" return this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                        <input class="quantity" min="0" name="qty" value="1" type="number" required>
                        <button type="button" onclick=" return this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div> 

                    <input type="submit" name="submit" value="Pesan" class="btn btn-order2">          
                </div>

                    
                
            </form>

            <?php
                if(isset($_POST['submit']))
                {
                    $food = $_POST['food'];                    
                    $qty = $_POST['qty'];
                    $price = $_POST['price'];

                    $total = $price * $qty;

                    $order_date = date("Y-m-d h:i:sa");

                    $status = "Ordered";

                    $customer_name = $_POST['full-name'];
                    $customer_contact = $_POST['contact'];
                    $notes = $_POST['notes'];

                    $sql2 = "INSERT INTO tbl_order SET
                        food = '$food',
                        price = '$price',
                        qty = $qty,
                        total = $total,
                        order_date = '$order_date',
                        status = '$status',
                        customer_name = '$customer_name',
                        customer_contact = '$customer_contact',
                        notes = '$notes'
                    ";

                    //echo $sql2; die();
                    
                    $res2 = mysqli_query($conn, $sql2);

                    if($res2==true)
                    {
                        $_SESSION['order'] = "<div class='success text-center'>Food berhasil dipesan</div>";
                        header('location:'.SITEURL);
                    }
                    else
                    {
                        $_SESSION['order'] = "<div class='error text-center'>Food gagal dipesan</div>";
                        header('location:'.SITEURL);
                    }
                }
            ?>

        </div>
    </section>

    

    <!-- fOOD sEARCH Section Ends Here -->

<?php include('partials-front/footer.php'); ?>