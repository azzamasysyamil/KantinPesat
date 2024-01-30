<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pemesanan Makanan | Kantin PESAT</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    <body>
        <!-- Menu Starts-->  
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="<?php echo SITEURL; ?>">Kantin</a></li>
                    <li><a href="manage-admin.php">Admin</a></li>
                    <li><a href="manage-category.php">Kategori</a></li>
                    <li><a href="manage-food.php">Menu</a></li>
                    <li><a href="manage-order.php">Order</a></li>
                    <li><a href="logout.php">Keluar</a></li>
                </ul>
            </div>
        </div>

        <div id="content-wrap">
        <!-- Menu Ends -->
        