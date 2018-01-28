<?php

    session_start();

    if(isset($_POST['logout'])) {
        $_SESSION['id'] = "";
        $_SESSION['email'] = "";
        echo "<script> location.href='/'; </script>";
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
        .bg{
          background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(images/zeIVk.png);
          background-size: cover;
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
    </style>

    <title>Prevent Abuses</title>
  </head>
  <body class="bg">
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
      <a class="navbar-brand" href="profile" style="color: #5BE59E;">बालुत प्रिद्र्णं</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="profile" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              THE ISSUE
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="articles">ARTICLES</a>
              <a class="dropdown-item" href="ourarticles">OUR ARTICLES</a>
              <a class="dropdown-item" href="upload">UPLOAD</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forum">FORUM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="complaints">REPORT</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    </nav>
      <div style=" text-align:center;background: white; opacity: 0.8;margin:50px 200px 50px 200px; auto; border-radius: 20px;">
      <h1 style="color:red;"> Sexual abuse </h1>
          <div style="margin:50px 200px 50px 200px;text-align:justify;">
        <h4> What is sexual abuse </h4>
        <p> A child is sexually abused when they are forced or persuaded to take part in sexual activities.</p>
        <p> This doesn't have to be physical contact and it can happen online. Sometimes the child won't understand that what's happening to them is abuse.</p>
        <p> They may not even understand that it's wrong. Or they may be afraid to speak out.</p>
        <p> That's why we're working to break the silence around child sexual abuse, and give children a voice when they desperately need support</p>
        <h2>How do you define child sexual abuse</h2>
        <p> There are 2 different types of child sexual abuse. These are called contact abuse and non-contact abuse.</p>
        <p> Contact abuse involves touching activities where an abuser makes physical contact with a child, including penetration. It includes:</p>
        <li>sexual touching of any part of the body whether the child's wearing clothes or not</li>
        <li> rape or penetration by putting an object or body part inside a child's mouth, vagina or anus</li>
        <li>forcing or encouraging a child to take part in sexual activity</li>
        <li>making a child take their clothes off, touch someone else's genitals or masturbate.</li>
        <br>
        <h4>Non-contact abuse</h4>
        <p> involves non-touching activities, such as grooming, exploitation, persuading children to perform sexual acts over the internet and flashing. It includes:</p>
        <li>encouraging a child to watch or hear sexual acts</li>
        <li>not taking proper measures to prevent a child being exposed to sexual activities by others</li>
        <li>meeting a child following sexual grooming with the intent of abusing them</li>
        <li>online abuse including making, viewing or distributing child abuse images</li>
        <li>allowing someone else to make, view or distribute child abuse images</li>
        <li>showing pornography to a child</li>
        <li>sexually exploiting a child for money, power or status (child exploitation).</li>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>