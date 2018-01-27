<?php

    session_start();
    
    $link = mysqli_connect("shareddb-g.hosting.stackcp.net","kindersalvation-32379e2b", "password98@", "kindersalvation-32379e2b");

    if(isset($_POST['submit'])) {
        $errors = "";
        if($_POST['name'] != "" && $_POST['date'] != "" && $_POST['time'] != "" && $_POST['details'] != "") {
            if(isset($_FILES['file']['name'])) {
                $file_name = $_FILES['file']['name'];
                $file_size =$_FILES['file']['size'];
                $file_tmp =$_FILES['file']['tmp_name'];
                $file_type=$_FILES['file']['type'];
                $tmp = explode('.', $file_name);
                $file_ext = strtolower($tmp[1]);

                $expensions= array("jpeg","jpg","png","mp4","mkv","flv");

                if(in_array($file_ext,$expensions) == false){
                    $errors .= "Extension not allowed, please choose a JPEG, PNG, MP4, MKV, FLV file.\\n";
                }

                if($file_size > 20000000){
                    $errors .= 'File size must not be greater than 20 MB.\\n';
                }
                if($errors != "") {
                    echo "<script> alert('$errors'); </script>";
                } else {
                    $query = "INSERT INTO `complaints`(`name`, `date`, `time`, `details`, `graphic`) VALUES('".mysqli_real_escape_string($link, $_POST['name'])."', '".mysqli_real_escape_string($link, $_POST['date'])."', '".mysqli_real_escape_string($link, $_POST['time'])."', '".mysqli_real_escape_string($link, $_POST['details'])."', '".mysqli_real_escape_string($link, $_FILES['file']['name'])."')";
                    if(mysqli_query($link, $query)) {
                        move_uploaded_file($file_tmp,"images/complaints/".$file_name);
                        echo "<script> alert('Data updated successfully!'); </script>";
                    } else {
                        echo "<script> alert('Oops! There was an error, please come back soon.'); </script>";
                    }
                }
            } else {
                $query = "INSERT INTO `complaints`(`name`, `date`, `time`, `details`) VALUES('".mysqli_real_escape_string($link, $_POST['name'])."', '".mysqli_real_escape_string($link, $_POST['date'])."', '".mysqli_real_escape_string($link, $_POST['time'])."', '".mysqli_real_escape_string($link, $_POST['details'])."')";
                if(mysqli_query($link, $query)) {
                    echo "<script> alert('Data updated successfully!'); </script>";
                } else {
                    echo "<script> alert('Oops! There was an error, please come back soon.'); </script>";
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
      
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Martel" rel="stylesheet">
      
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
        #submit {
            background: none;
            border: 2px solid #5BE59E;
            padding: 5px 10px;
            color: #5BE59E;
            font-weight: bold;
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

    <title>COMPLAINTS</title>
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
      <h1 style="text-align: center;color: white;">COMPLAINTS</h1>
    </div>
    <form method="post" enctype="multipart/form-data">
        <div style="padding-left: 10%;color: white;">
          <input type="text" placeholder="Name" class="inputBox" name="name" style="width: 350px;"><br><br>
          <label for="date"><strong>Date:</strong>&nbsp;&nbsp;</label><input type="date" name="date" id="date" class="inputBox" placeholder="Date" class="datepicker"><br><br>
          <label for="time"><strong>Time:</strong>&nbsp;&nbsp;</label><input type="time" name="time" id="time" class="inputBox" placeholder="Date" class="datepicker"><br><br>
          <textarea placeholder="Details" style="width: 350px;height: 150px;" name="details" class="inputBox"></textarea><br><br>
          <label for="file"><strong>Upload image/video:</strong>&nbsp;&nbsp;</label><input type="file" name="file" id="file"><br><br>
        </div>
        <div style="text-align: center;">  
          <input type="submit" value="Submit" name="submit" id="submit">
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>