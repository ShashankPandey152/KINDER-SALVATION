<?php

 session_start();
    
 $link = mysqli_connect("shareddb-g.hosting.stackcp.net","kindersalvation-32379e2b", "password98@", "kindersalvation-32379e2b");

if(isset($_POST['signup'])) {
    
    $to = $_SESSION['email'];
    $subject = "Email Verification";
    $message = '
    Thanks for signing up!

    Please click this link to activate your account:
    http://kindersalvation-com.stackstaging.com/verify.php?email='.$_SESSION['email'].'

    This is a system generated mail. Do not reply. 
    ';
    $headers = 'From:no-reply@kindersalvation.com' . "\r\n"; 
    if(mail($to, $subject, $message, $headers)) {
        echo "<script> alert('Verification mail sent! Please verify your email address.'); </script>";
    }
}

<<<<<<< HEAD
=======
if(isset($_POST['logout'])) {
    $_SESSION['id'] = "";
    $_SESSION['email'] = "";
    echo "<script> location.href='/'; </script>";
}

>>>>>>> 24c1f796080f25189e0b4367f8d56d64d223ddc5
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
        #email {
            
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
        .bg{
          background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(images/zeIVk.png);
          background-size: cover;
        }
    </style>

<<<<<<< HEAD
    <title>STARTER TEMPLATE</title>
=======
    <title>EMAIL VERIFY</title>
>>>>>>> 24c1f796080f25189e0b4367f8d56d64d223ddc5
  </head>
  <body class="bg">
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
      <a class="navbar-brand" href="#" style="color: #5BE59E;">बालुत प्रिद्र्णं</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      </button>
<<<<<<< HEAD
=======
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a style='color: #D1E0E0;' class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              THE ISSUE
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="articles">ARTICLES</a>
              <a class="dropdown-item" href="ourarticles">OUR ARTICLES</a>
              <a class="dropdown-item" href="upload">UPLOAD</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forum" style='color: #D1E0E0;'>FORUM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="complaints" style='color: #D1E0E0;'>REPORT</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='color: #D1E0E0;'>
              GET INVOLVED
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="adopt">ADOPT</a>
              <a class="dropdown-item" href="donate">DONATE</a>
              <a class="dropdown-item" href="enlist">ENLIST</a>
            </div>
          </li>
        </ul>
      </div>
        <form method="post">
            <button id="submit" name="logout">LOGOUT</button>
        </form>
>>>>>>> 24c1f796080f25189e0b4367f8d56d64d223ddc5
    </nav><br>
    <div>
        <h1 style="text-align: center;color: white;">VERIFY E-MAIL</h1>
    </div>
    <div style="text-align: center;color: white;">
            <br><br>
            <span id="text">Please verify e-mail address!<br><br>If you accidently deleted the mail, Click on Resend.</span>
            <br><br><br>
            <form method="post">
               <p><input type="submit" value="RESEND" id="submit" name="signup"></p>
            </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>