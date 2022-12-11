<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
	<title>View Product</title>
</head>
<body>
    <div class="container">
            <div class="row mt-5">
                <div class="col-10">
                    <h1><i class="fa fa-store"></i>Stevie Wonder Online Shop</h1>
                </div>      
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="fa fa-users fa-3x"></i>
                                </div>
                                <div class="col-sm-8">
                                <?php  require ('open-connection.php'); ?>
                                    <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php $strSql=mysqli_query($con,'SELECT * FROM `tbl_products`'); $strSql= mysqli_num_rows($strSql); echo $strSql; ?></span></div>
                                    <div class="clearfix"></div>
                                    <div class="float-sm-right">Total Products</div>
                                <?php require ('close-connection.php');?>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item-primary list-group-item list-group-item-action">
                        <a href="product.php?page=all-users">
                        <div class="row">
                        <div class="col-sm-8">
                            <p class="">All Products</p>
                        </div>
                        <div class="col-sm-4">
                        <i class="fa fa-arrow-right float-sm-right"></i>
                        </div>
                        </div>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-info mb-3">
                    <div class="card-header">
                        <div class="row">
                        <div class="col-sm-4">
                            <i class="fa fa-users fa-3x"></i>
                        </div>
                        <div class="col-sm-8">
                            <?php  require ('open-connection.php'); ?>
                            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php $tusers=mysqli_query($con,'SELECT * FROM `tbl_user`'); $tusers= mysqli_num_rows($tusers); echo $tusers; ?></span></div>
                            <div class="clearfix"></div>
                            <div class="float-sm-right">Total Users</div>
                            <?php require ('close-connection.php');?>
                        </div>
                        </div>
                    </div>
                    <div class="list-group-item-primary list-group-item list-group-item-action">
                        <a href="product.php?page=all-users">
                        <div class="row">
                        <div class="col-sm-8">
                            <p class="">All Users</p>
                        </div>
                        <div class="col-sm-4">
                        <i class="fa fa-arrow-right float-sm-right"></i>
                        </div>
                        </div>
                        </a>
                    </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card text-white bg-warning mb-3">
                    <div class="card-header">
                        <div class="row">
                        <?php// $usernameshow = $_SESSION['user_login']; $userspro = mysqli_query($db_con,"SELECT * FROM `users` WHERE `username`='$usernameshow';"); $userrow=mysqli_fetch_array($userspro); ?>
                        <div class="col-sm-4">
                            <i class="fa fa-users fa-3x"></i>
                        </div>
                        <div class="col-sm-8">
                            <div class="clearfix"></div>
                            <div class="float-sm-right">Welcome!</div>
                            <div class="col-sm-8">
                            <?php  require ('open-connection.php'); ?>
                            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php   echo $_SESSION['loguser']; ?></span></div>
                            <div class="clearfix"></div>
                            <?php require ('close-connection.php');?>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="list-group-item-primary list-group-item list-group-item-action">
                        <a href="index.php?page=user-profile">
                        <div class="row">
                        <div class="col-sm-8">
                            <p class="">Your Profile</p>
                        </div>
                        <div class="col-sm-4">
                            <i class="fa fa-arrow-right float-sm-right"></i>
                        </div>
                        </div>
                        </a>
                    </div>
                    </div>
                </div>  
            </div>

            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">             
        </div>            
    </div>
 </div>






 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>