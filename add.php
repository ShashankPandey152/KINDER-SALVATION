<?php

    session_start();

    $link = mysqli_connect("shareddb-g.hosting.stackcp.net","kindersalvation-32379e2b", "password98@", "kindersalvation-32379e2b");
    
    if(isset($_POST['logout'])) {
        $_SESSION['id'] = "";
        $_SESSION['name'] = "";
        echo "<script> location.href='/'; </script>";
    }
  
    if(isset($_POST['submit'])) {
        if($_POST['title'] == "" || $_POST['question'] == "" || $_POST['awesome'] == "")
        {
            echo "<script> alert('Complete the form!'); </script>";
        } else {
            $query = "INSERT INTO `add` (`title`, `question`, `details`, `uid`) VALUES('".mysqli_real_escape_string($link, $_POST['title'])."', '".mysqli_real_escape_string($link, $_POST['question'])."', '".mysqli_real_escape_string($link, $_POST['awesome'])."', '".mysqli_real_escape_string($link, $_SESSION['id'])."')";
            if(mysqli_query($link,$query)){
                echo "<script> alert('Question added successfully!'); </script>";
            }else {
                echo mysqli_error($link);
                echo "<script> alert('Oops! There was an error, please come back later.'); </script>";
            }
        }
    }

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
         .inputSettings {
                 margin-left: 100px;
                margin-top:50px;
                border: 2px solid #19D1FF;
                border-radius: 10px;
                padding: 5px 10px;
                
            }
          
            #askQuestion {
                margin-left: 100px;
                margin-top:50px;
               float:left;
                padding: 5px 10px;
                background: white;
                color: #5BE59E;
                border: 2px solid #19D1FF;
                border-radius: 10px;
                font-weight: bold;
            }
            #askQuestion:hover {
                background: #19D1FF;
                color: white;
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

    <title>ADD QUESTION</title>
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
      
      
      <form method="POST">
       <div>
              <p><input type="text" name="title" class="inputSettings" placeholder="Title"> 
          </div>

      
         <div >
              <p><input type="text" name="question" class="inputSettings" placeholder="Question"> 
          </div>
         <div style="margin:20px 0px 0px 100px;">
             <textarea rows="5" cols="25" style="border:2px solid #19D1FF; border-radius: 10px; padding: 5px 10px;" name="awesome" placeholder="Put details here!"></textarea>
          </div>
          <div style=" text-align: center;">
           <input name="submit" type="submit" id="askQuestion"  value="Submit">
           </div>
         </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>