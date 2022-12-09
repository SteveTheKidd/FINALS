<?php
    session_start();

    if(isset($_POST['btnSignInUser'])){
        require_once('open-connection.php');
        if(isset($_POST['utype'])){
            $type = ($_POST['utype']);
            $strtype = implode($type);
            $username = htmlspecialchars($_POST['txtUserName']);
            $password = htmlspecialchars($_POST['txtPassword']);

            $username = stripcslashes($username);
            $password = stripcslashes($password);

            $username = mysqli_real_escape_string($con, $username);
            $password = mysqli_real_escape_string($con, $password);

            $password = md5($password);

        if($strtype === 'Admin'){
            $strSql = "
                        SELECT name FROM `tbl_user
                        WHERE username = '$username'
                        AND password '$password'
                    ";
        if($_SESSION['rsUser'] = mysqli_query($con, $strSql)){
            if(mysqli_num_rows($_SESSION['rsUser']) > 0){
                header('');
                $_SESSION['loguser'] = mysqli_free_result($_SESSION['rsUser']);
            }
            else{
                echo "Invalid Username/Password";
            }
        }
        else{
                echo 'ERROR: Could not execute your request.';
        }
        }
        elseif($strtype === 'Customer'){
            $strSql = "
                        SELECT name FROM `tbl_customer
                        WHERE emailAddress = '$username'
                        AND password '$password'
                    ";

                    if($rsCustomer = mysqli_query($con, $strSql)){
                        if(mysqli_num_rows($rsCustomer) > 0){
                            $_SESSION['log'] = 'yes';
                            header('');
                            mysqli_free_result($rsCustomer);
                        }
                        else{
                            echo "Invalid Username/Password!";
                        }
                    }
                    else{
                        echo 'ERROR: Could not execute your request.';
                    }
        }
        require_once('close-connection.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container ">
        <div class="card mt-5 text-center card-container">
            <i class="fa fa-user-circle-o fa-5x" id="profile-img" ></i><p>LOGIN</p>         
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post">
            <div class="form-row align-items-center">
            <div class="col-12 my-1">
            <select class="form-control"  id="UType" name ="UserType[]">
                <option value="admin">Admin</option>
                <option value="ContentManager">Customer</option>
            </select>
          
            </div>
                <br>
                <input type="text" name="textUserName" id="txtUserName" class="form-control" placeholder="User Name" required autofocus>
                <input type="password" name="txtPassword"  id="txtPassword" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="btnSignInUser">Sign in</button>
    

                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>