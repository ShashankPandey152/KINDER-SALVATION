<?php

    session_start();

    $link = mysqli_connect("shareddb-g.hosting.stackcp.net","kindersalvation-32379e2b", "password98@", "kindersalvation-32379e2b");

    if(isset($_POST['submit'])) {
        if($_POST['username'] != "") {
            $query = "UPDATE `users` SET `name` = '".mysqli_real_escape_string($link, $_POST['username'])."' WHERE `id` = '".mysqli_real_escape_string($link, $_SESSION['id'])."'";
            if(mysqli_query($link, $query)) {
                echo "<script> alert('Data changed successfully!'); </script>";
            } else {
                echo "<script> alert('Oops! There was an error, please come back later.'); <script>";
            }
        }
        if($_POST['oPassword'] != "" && $_POST['nPassword'] != "" && $_POST['cPassword'] != "") {
            echo "Hello moterchod!";
            if($_POST['nPassword'] != $_POST['cPassword']) {
                echo "<script> alert('Passwords do not match!'); </script>";
            } else {
                $query = "SELECT `password` FROM `users` WHERE `id` = '".mysqli_real_escape_string($link, $_SESSION['id'])."'";
                $row = mysqli_fetch_array(mysqli_query($link, $query));
                if(hash('sha512', $_POST['oPassword']) != $row['password']) {
                    echo "<script> alert('Old password is incorrect!'); </script>";
                } else {
                    $query = "UPDATE `users` SET `password` = '".mysqli_real_escape_string($link, hash('sha512', $_POST['nPassword']))."' WHERE `id` = '".mysqli_real_escape_string($link, $_SESSION['id'])."'";
                    if(mysqli_query($link, $query)) {
                        echo "<script> alert('Data changed successfully!'); </script>";
                    } else {
                        echo "<script> alert('Oops! There was an error, please come back later.'); <script>";
                    }
                }
            }
        } 
        if($_POST['address'] != "") {
            $query = "UPDATE `users` SET `address` = '".mysqli_real_escape_string($link, $_POST['address'])."' WHERE `id` = '".mysqli_real_escape_string($link, $_SESSION['id'])."'";
            if(mysqli_query($link, $query)) {
                echo "<script> alert('Data changed successfully!'); </script>";
            } else {
                echo "<script> alert('Oops! There was an error, please come back later.'); </script>";
            }
        }
        if($_POST['contact']) {
            $query = "UPDATE `users` SET `mobile` = '".mysqli_real_escape_string($link, $_POST['contact'])."' WHERE `id` = '".mysqli_real_escape_string($link, $_SESSION['id'])."'";
            if(mysqli_query($link, $query)) {
                echo "<script> alert('Data changed successfully!'); </script>";
            } else {
                echo "<script> alert('Oops! There was an error, please come back later.'); </script>";
            }
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
      
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Martel" rel="stylesheet">
      
    <!--Font Awesome-->
    <link rel="stylesheet" type="text/css" href="css/fa/css/font-awesome.min.css">
      
    <!--jQuery-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
      
      
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
      
        .navbar-custom {
          background-color: #d1e0e0;

        }
        .inputBox {
            border: 2px solid #5BE59E;
            padding: 5px 10px;
            border-radius: 10px;
        }
        .submit {
            background: none;
            border: 2px solid #5BE59E;
            padding: 5px 10px;
            color: #5BE59E;
            font-weight: bold;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        .submit:hover {
            background: #5BE59E;
            color: white;
        }
        .bg{
          background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(images/zeIVk.png);
          background-size: cover;
        }
    </style>

    <title>EDIT PROFILE</title>
  </head>
  <body class="bg">
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
      <a class="navbar-brand" href="#" style="color: #5BE59E;">बालुत प्रिद्र्णं</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              THE ISSUE
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">ARTICLES</a>
              <a class="dropdown-item" href="#">UPLOAD</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CHAT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">REPORT</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              GET INVOLVED
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">ADOPT</a>
              <a class="dropdown-item" href="#">DONATE</a>
              <a class="dropdown-item" href="#">ENLIST</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div>
      <h1 style="text-align: center;color: white;">EDIT PROFILE</h1>
        <a href="profile" style="font-weight: bold; color: white; text-decoration: none;">&nbsp;&nbsp;GO BACK</a>
    </div> <br><br><br>
    <form method="post">
    <div style="margin-left: 40px;font-size: 18px;">
        <input type="text" placeholder="Username" name="username" class="inputBox"><br><br>
      <button id="pwd" class="submit" type="button">Password</button><br>
      <div id="password">
      <input type="password" placeholder="Current Password" name="oPassword" class="inputBox"><br><br>
      <input type="password" placeholder="New Password" name="nPassword" class="inputBox"><br><br>
      <input type="password" placeholder="Confirm Password" name="cPassword" class="inputBox"><br><br>
      </div>
      <input type="text" placeholder="Address" name="address" class="inputBox"><br><br>
      <input type="text" placeholder="Contact" name="contact" class="inputBox"><br><br>
    </div>
    
    <div style="text-align: center;">
        <input type="submit" value="Submit" name="submit" class="submit">  
    </div>
    </form>
      
    <script>
        
        $("#password").hide();
        
        var isOpen = false;
        
        $("#pwd").click(function() {
           if(isOpen) {
               $("#password").hide();
           } else {
               $("#password").show();
           }
           isOpen = !isOpen;
        });
      
    </script>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>