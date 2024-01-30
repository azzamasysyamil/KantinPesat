<?php include('partials/menu.php'); ?>

<div class="main-content">
        <br><br>

        <?php 
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];

                $sql = "SELECT * FROM tbl_order WHERE id=$id";

                $res = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    $row = mysqli_fetch_assoc($res);

                    $food = $row['food'];
                    $price = $row['price'];
                    $qty = $row['qty'];
                    $status = $row['status'];
                    $customer_name = $row['customer_name'];
                    $customer_contact = $row['customer_contact'];
                    $notes = $row['notes'];
                }
                else
                {
                    header('location:'.SITEURL.'admin/manage-order.php');
                }
            }
            else
            {
                header('location:'.SITEURL.'admin/manage-order.php');
            }
        ?>

        <section class="food-search2">
            <div class="container">

                <form action="" method="POST" class="order">

                <div class="order-box">

                <h1>Update Order</h1><br>
                    <span class="iii"><b><?php echo $food; ?></b></span>
                
                    <span class="iii"><b>Rp.<?php echo number_format($price,2,",","."); ?></b></span>

                    <div class="clearfix"></div>
                    
                    <select name="status" id="">
                        <option <?php if($status=="Ordered"){echo "selected";} ?> value="Ordered">Ordered</option>
                        <option <?php if($status=="On Delivery"){echo "selected";} ?> value="On Delivery">On Delivery</option>
                        <option <?php if($status=="Delivered"){echo "selected";} ?> value="Delivered">Diterima</option>
                        <option <?php if($status=="Cancelled"){echo "selected";} ?> value="Cancelled">Dibatalkan</option>
                    </select>

                    <input type="text" name="customer_name" value="<?php echo $customer_name?>" placeholder="Nama Kustomer">
                    
                    <input type="text" name="customer_contact" value="<?php echo $customer_contact?>" placeholder="Kontak">
                    
                    <input type="text" name="notes" value="<?php echo $notes?>" placeholder="Catatan">

                    <div class="order-label" style="width:20%; float: left; margin-top:20px; margin-bottom:20px;">Jumlah</div>
                    <div class="number-input" style="float:right; margin-top:20px; margin-bottom:20px;">
                        <button type="button" onclick=" return this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                        <input class="quantity" min="0" name="qty" value="<?php echo $qty?>" type="number" required style="background-color: white">
                        <button type="button" onclick=" return this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div> 
                
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="price" value="<?php echo $price; ?>">
                    <input type="submit" name="submit" value="Update Order" class="btn btn-order2">
                </div>
                </form>
            </div>
        </section>

        <?php
            if(isset($_POST['submit']))
            {
                $id = $_POST['id'];
                $price = $_POST['price'];
                $qty = $_POST['qty'];

                $total = $price * $qty;

                $status = $_POST['status'];

                $customer_name = $_POST['customer_name'];
                $customer_contact = $_POST['customer_contact'];
                $notes = $_POST['notes'];

                $sql2 = "UPDATE tbl_order SET
                    qty = $qty,
                    total = $total,
                    status = '$status',
                    status = '$status',
                    customer_name = '$customer_name', 
                    customer_contact = '$customer_contact',
                    notes = '$notes'
                    WHERE id=$id
                ";

                $res2 = mysqli_query($conn, $sql2);

                if($res2==true)
                {
                    $_SESSION['update'] = "<div class='success'>Order berhasil diperbarui </div>";
                    header('location:'.SITEURL.'admin/manage-order.php');
                }
                else
                {
                    $_SESSION['update'] = "<div class='error'>Order gagal diperbarui </div>";
                    header('location:'.SITEURL.'admin/manage-order.php');
                }
            }
        ?>
</div>

<?php include('partials/footer.php'); ?>