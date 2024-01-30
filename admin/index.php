<?php include('partials/menu.php'); ?>

        <!-- Main Content Starts -->
        <div class="main-content bbb">
            <div class="wrapper2">
                <h1 class="con-head">Dashboard</h1>
                <br>
                <?php
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>
                <br>

                <div class="col-4 text-center">
                    <?php
                        $sql = "SELECT * FROM tbl_category";

                        $res = mysqli_query($conn, $sql);

                        $count = mysqli_num_rows($res);
                    ?>

                    <h1 class="ccc"><?php echo $count; ?></h1>
                    <br />
                    Kategori
                </div>
                <div class="col-4 text-center">
                    <?php
                        $sql2 = "SELECT * FROM tbl_food";

                        $res2 = mysqli_query($conn, $sql2);

                        $count2 = mysqli_num_rows($res2);
                    ?>
                    <h1 class="ccc"><?php echo $count2; ?></h1>
                    <br />
                    Menu
                </div>
                <div class="col-4 text-center">
                    <?php
                        $sql3 = "SELECT * FROM tbl_order";

                        $res3 = mysqli_query($conn, $sql3);

                        $count3 = mysqli_num_rows($res3);
                    ?>

                    <h1 class="ccc"><?php echo $count3; ?></h1>
                    <br />
                    Total Order
                </div>
                <div class="col-4 text-center">
                    <?php
                        $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";

                        $res4 = mysqli_query($conn, $sql4);

                        $row4 = mysqli_fetch_assoc($res4);

                        $total_revenue = $row4['Total'];
                    ?>

                    <h1 class="ccc">Rp<?php echo number_format($total_revenue,2,",","."); ?></h1>
                    <br />
                    Penghasilan
                </div>
                
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Main Content Ends -->
        
<?php include('partials/footer.php'); ?>