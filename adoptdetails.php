<?php

    session_start();

    $link = mysqli_connect("shareddb-g.hosting.stackcp.net","kindersalvation-32379e2b", "password98@", "kindersalvation-32379e2b");

    $query = "SELECT * FROM `enlist` WHERE `id` = '".mysqli_real_escape_string($link, $_GET['id'])."'";

    $row = mysqli_fetch_array(mysqli_query($link, $query));

    if(isset($_POST['submit'])) {
        if($_POST['name'] != "" && $_POST['age'] != "" && $_POST['address'] != "" && $_POST['occupation'] != "" && $_POST['income'] != "1" && $_POST['reason'] != "") {
            
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
        .bg{
        	background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(images/zeIVk.png);
        	background-size: cover;
        }
        
    </style>

    <title>STARTER TEMPLATE</title>
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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              THE ISSUE
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">ARTICLES</a>
              <a class="dropdown-item" href="#">OUR ARTICLES</a>
              <a class="dropdown-item" href="upload">UPLOAD</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">FORUM</a>
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
    </nav>

    <div>
      <h1 style="text-align: center;color: white;">DETAILS</h1>
    </div>
    <br>
      <form method="post">
          <div style="padding-left: 10%">
            <input type="text" placeholder="Name" style="width: 350px;" name="name" class="inputBox"><br><br>
            <input type="text" placeholder="Age" style="width: 350px;" name="age" class="inputBox"><br><br>
            <input type="text" placeholder="Address" style="width: 350px;" name="address" class="inputBox"><br><br>
            <input type="text" placeholder="Occupation" style="width: 350px;" name="occupation" class="inputBox"><br><br>
            <select name="Income" class="inputBox" name="income">
              <option value="1">--Annual Income--</option>
              <option value="Less than INR 1,00,000">Less than INR 1,00,000</option>
              <option value="INR 1,00,000 - INR 3,00,000">INR 1,00,000 - INR 3,00,000</option>
              <option value="INR 3,00,000 - INR 5,00,000">INR 3,00,000 - INR 5,00,000</option>
              <option value="INR 5,00,000 - INR 8,00,000">INR 5,00,000 - INR 8,00,000</option>
              <option value="Above INR 8,00,000">Above INR 8,00,000</option>
            </select>
            <br><br>
            <textarea placeholder="Reason For Adopting" name="reason" style="width: 350px;height: 150px;" class="inputBox"></textarea>
          </div>
          <br>
        <div style="text-align: center;">
            <button id="submit" name="submit">Submit</button>
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>