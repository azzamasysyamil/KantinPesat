<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1> Order</h1>
            <br />
        
            <?php
                if(isset($_SESSION['update']))
                {
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                }
            ?>
            <br>
            
            <div class="tbl-rsp">
                <table class="tbl-full">
                    <tr>
                        <th>No</th>
                        <th>Menu</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Nama</th>
                        <th>Kontak</th>
                        <th>Catatan</th>
                        <th>Aksi</th>
                    </tr>

                    <?php
                        $sql = "SELECT * FROM tbl_order ORDER BY id DESC";

                        $res = mysqli_query($conn, $sql);

                        $count = mysqli_num_rows($res);
                        
                        $sn = 1;

                        if($count>0)
                        {
                            while($row=mysqli_fetch_assoc($res))
                            {
                                $id = $row['id'];
                                $food = $row['food'];
                                $price = $row['price'];
                                $qty = $row['qty'];
                                $total = $row['total'];
                                $order_date = $row['order_date'];
                                $status = $row['status'];
                                $customer_name = $row['customer_name'];
                                $customer_contact = $row['customer_contact'];
                                $notes = $row['notes'];

                                ?>
                                    <tr>
                                        <td><?php echo $sn++; ?></td>
                                        <td><?php echo $food; ?></td>
                                        <td><?php echo number_format($price,2,",","."); ?></td>
                                        <td><?php echo $qty; ?></td>
                                        <td><?php echo number_format($total,2,",","."); ?></td>
                                        <td><?php echo $order_date; ?></td>
                                        <td>
                                            <?php
                                                if($status=="Ordered")
                                                {
                                                    echo "<label>$status</label>";
                                                }
                                                elseif($status=="On Delivery")
                                                {
                                                    echo "<label style='color: orange;'>$status</label>";
                                                }
                                                elseif($status=="Delivered")
                                                {
                                                    echo "<label style='color: green;'>$status</label>";
                                                }
                                                elseif($status=="Cancelled")
                                                {
                                                    echo "<label style='color: red;'>$status</label>";
                                                }
                                            ?>
                                        </td>
                                        <td><?php echo $customer_name; ?></td>
                                        <td><?php echo $customer_contact; ?></td>
                                        <td><?php echo $notes; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/update-order.php?id=<?php echo $id; ?>" class="btn-secondary">Perbarui</a>
                                        </td>
                                    </tr>
                                <?php
                            }
                        }   
                        else
                        {
                            echo "<tr colspan='12' class='error'><td>Order tidak tersedia</td></tr>";
                        }
                    ?>

                </table>
            </div>
    </div>    
</div>

<?php include('partials/footer.php'); ?>