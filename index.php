<?php

    session_start();
    
    $link = mysqli_connect("shareddb-g.hosting.stackcp.net","kindersalvation-32379e2b", "password98@", "kindersalvation-32379e2b");

    //Login
    if(isset($_POST['login'])) {
        if($_POST['email'] != "" && $_POST['password'] != "") {
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                echo "<script> alert('Invalid email address!'); </script>";
            } else {
                $query = "SELECT * FROM `users` WHERE `email` = '".mysqli_real_escape_string($link, $_POST['email'])."'";
                $result = mysqli_query($link, $query);
                if(mysqli_num_rows($result) == 0) {
                    echo "<script> alert('Account does not exist!'); </script>";
                } else {
                    $row = mysqli_fetch_array($result);
                    if(hash('sha512',$_POST['password']) == $row['password']) {
                        $name = $row['name'];
                        echo "<script> alert('Logged in successfully. Welcome back $name'); </script>";
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['email'] = $row['email'];
                        if($row['status'] == 0) {
                            echo '<script> location.href="emailVerify"; </script>';
                        } 
                        if($row['type'] == 2 && $row['expertise'] == "") {
                            echo '<script> location.href="counselorExpertise"; </script>';
                        }
                        echo "<script> location.href='profile'; </script>";
                    } else {
                        echo "<script> alert('Incorrect credentials!'); </script>";
                    }
                }
            }
        } else {
            echo "<script> alert('Complete the form!'); </script>";
        }
    }

    //Signup
    if(isset($_POST['signup'])) {
        $error = 0;
        $errorMsg = "";
        if($_POST['name'] != "" && $_POST['signEmail'] != "" && $_POST['signPassword'] != "" && $_POST['confPassword'] != "" && $_POST['mobile'] != "" && $_POST['address'] != "" && $_POST['accountType'] != "" && $_POST['acceptTerms'] == 1) {
            if(!filter_var($_POST['signEmail'],FILTER_VALIDATE_EMAIL)) {
                $error++;
                $errorMsg .= "Invalid email address!\\n";
            }
            if($_POST['signPassword'] != $_POST['confPassword']) {
                $error++;
                $errorMsg .= "Passwords do not match!\\n";
                echo "<script> alert('$errorMsg'); </script>"; 
            }
            if(strlen($_POST['mobile']) != 10) {
                $error++;
                $errorMsg .= "Invalid mobile number!\\n";
            }
            $query = "SELECT `id` FROM `users` WHERE `email` = '".mysqli_real_escape_string($link, $_POST['signEmail'])."'";
            if(mysqli_num_rows(mysqli_query($link, $query)) > 0) {
                $error++;
                $errorMsg .= "Email address is already linked with another account!\\n";
            }
            $query = "SELECT `id` FROM `users` WHERE `mobile` = '".mysqli_real_escape_string($link, $_POST['mobile'])."'";
            if(mysqli_num_rows(mysqli_query($link, $query)) > 0) {
                $error++;
                $errorMsg .= "Mobile is already linked with another account!\\n";
            }
            if($error != 0) {
                echo "<script> alert('$errorMsg'); </script>"; 
            } else {
                $query = "INSERT INTO `users`(`name`, `email`, `password`, `mobile`, `address`, `type`) VALUES('".mysqli_real_escape_string($link, $_POST['name'])."', '".mysqli_real_escape_string($link, $_POST['signEmail'])."', '".mysqli_real_escape_string($link, hash('sha512', $_POST['signPassword']))."', '".mysqli_real_escape_string($link, $_POST['mobile'])."', '".mysqli_real_escape_string($link, $_POST['address'])."',  '".mysqli_real_escape_string($link, $_POST['accountType'])."')";
                if(mysqli_query($link, $query)) {
                    echo "<script> alert('Signed up successfully!'); </script>";
                    $to = $_POST['signEmail'];
                    $subject = "Email Verification";
                    $message = '
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

------------------------
Username: '.$_POST['signEmail'].'
Password: '.$_POST['signPassword'].'
------------------------

Please click this link to activate your account:
http://kindersalvation-com.stackstaging.com/forgotpassword?email='.$_POST['signEmail'].'

This is a system generated mail. Do not reply. 
                    ';
                    $headers = 'From:no-reply@kindersalvation.com' . "\r\n"; 
                    if(mail($to, $subject, $message, $headers)) {
                        echo "<script> alert('Verification mail sent! Please verify your email address.'); </script>";
                    }
                } else {
                    echo mysqli_error($link);
                    echo "<script> alert('Oops! There was an error please come back later.'); </script>";
                }
            }
        } else {
            echo "<script> alert('Complete the form!'); </script>";
        }
    }

    //Forgot 
    if(isset($_POST['forgot'])) {
        if($_POST['forgotEmail'] != "") {
            if(!filter_var($_POST['forgotEmail'], FILTER_VALIDATE_EMAIL)) {
                echo "<script> alert('Invalid email address!'); </script>";
            } else {
                $query = "SELECT `id` FROM `users` WHERE `email` = '".mysqli_real_escape_string($link, $_POST['forgotEmail'])."'";
                if(mysqli_num_rows(mysqli_query($link, $query)) == 0) {
                    echo "<script> alert('This email is not linked with any account!'); </script>";
                } else {
                    $to = $_POST['forgotEmail'];
                    $subject = "Change Password";
                    $message = '

Please click this link to change your password:
http://kindersalvation-com.stackstaging.com/forgotpassword.php?email='.$_POST['forgotEmail'].'

This is a system generated mail. Do not reply. 
                    ';
                    $headers = 'From:no-reply@kindersalvation.com' . "\r\n"; 
                    if(mail($to, $subject, $message, $headers)) {
                        echo "<script> alert('Password reset mail sent!'); </script>";
                    }
                }
            }
        } else {
            echo "<script> alert('Complete the form!'); </script>";
        }
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
    <!--jQuery-->
    <script src="js/jquery.min.js" type="text/javascript"></script>
      
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Martel" rel="stylesheet">
      
      
    <style>
    
        .dropdown:hover .dropdown-menu {
          display: block;
        }
        .navbar-brand {
            font-size: 180%;
            font-weight: bold;
            font-family: 'Martel', serif;
        }
        .nav-link {
            font-weight: bold;
        }
        .inputBox {
            border: 2px solid #5BE59E;
            padding: 5px 10px;
            border-radius: 10px;
        }
        #submit {
            background: none;
            border: 2px solid #5BE59E;
            padding: 5px 10px;
            color: #5BE59E;
            font-weight: bold;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        #submit:hover {
            background: #5BE59E;
            color: white;
        }
        .accountType {
            background: none;
            border: none;
        }
        .accountType:focus {
            outline: 0;
        }
      
    </style>

    <title>KINDER SALVATION</title>
  </head>
  <body style="background: url('images/bg.jpg'); background-size: cover;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 20px;">
      <a class="navbar-brand" href="#" style="color: #5BE59E;">बालुत प्रिद्र्णं</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0" method="post">
          <div id="normal">
              <input class="form-control mr-sm-2" type="email" name="email" placeholder="Email" aria-label="Email">
              <input class="form-control mr-sm-2" type="password" name="password" placeholder="Password" aria-label="Password">
              <button class="btn btn-outline-success my-2 my-sm-0" name="login" type="submit">LOGIN</button>&nbsp;&nbsp;
              <button class="btn btn-outline-success my-2 my-sm-0" type="button" id="forgotPassword">FORGOT PASSWORD</button>
          </div>
          <div id="forgot" style="display: none;">  
            <input class="form-control mr-sm-2" type="email" name="forgotEmail" placeholder="Email" aria-label="Email">
            <button class="btn btn-outline-success my-2 my-sm-0" name="forgot" type="submit">FORGOT PASSWORD</button>
          </div>
        </form>
      </div>
    </nav>
      
    <div id="signup" style="text-align: center; background: white; opacity: 0.8; width: 30%; margin: 0 auto; border-radius: 20px;">
        <br>
        <form method="post">
            <p><input type="text" placeholder="Name" class="inputBox" name="name"></p>
            <p><input type="email" placeholder="Email" class="inputBox" name="signEmail"></p>
            <p><input type="password" placeholder="Password" class="inputBox" name="signPassword"></p>
            <p><input type="password" placeholder="Confirm Password" class="inputBox" name="confPassword"></p>
            <p><input type="number" placeholder="Mobile" class="inputBox" name="mobile"></p>
            <p><input type="text" placeholder="Address" class="inputBox" name="address"></p>
            <p>I am a: 
                <input type="radio" name="accountType" value="1" id="userRadio">&nbsp;
                    <button type="button" class='accountType' id="user">User</button>&nbsp;&nbsp;
                <input type="radio" name="accountType" value="2" id="counselorRadio">&nbsp;
                    <button type="button" class='accountType' id="counselor">Counselor</button>
            </p>
            <p><input type="checkbox" name="acceptTerms" value="1" id="checkBox">&nbsp;<button class="accountType" type="button" id="agree">I agree to terms and conditions</button></p>
            <p><input type="submit" value="Create Account" id="submit" name="signup"></p>
        </form>
    </div>
      
    <script type="text/javascript">
                  
        $("#user").click(function() {
           $("#userRadio").prop("checked","true");
        });
        $("#counselor").click(function() {
           $("#counselorRadio").prop("checked","true"); 
        });
        $("#agree").click(function() {
           if(document.getElementById("checkBox").checked == true) {
               $("#checkBox").prop("checked",false);
           } else {
               $("#checkBox").prop("checked",true);
           }
        });
        $("#forgotPassword").click(function() {
           $("#forgot").css("display","block");
           $("#normal").css("display","none");
        });
        
    </script>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>