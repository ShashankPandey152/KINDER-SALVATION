<?php

    session_start();

    $link = mysqli_connect("shareddb-g.hosting.stackcp.net","kindersalvation-32379e2b", "password98@", "kindersalvation-32379e2b");

    $_SESSION['email'] = "sdharchou@gmail.com";

    if(isset($_POST['submit'])) {
        $errors = "";
        if($_FILES['image']['name'] != "" && $_POST['name'] != "" && $_POST['age'] != "" && $_POST['gender'] != "" && $_POST['address'] != "") {
            $errors= "";
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $tmp = explode('.', $file_name);
            $file_ext = strtolower($tmp[1]);
            
            $expensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$expensions) == false){
                $errors .= "Extension not allowed, please choose a JPEG or PNG file.\\n";
            }
            
            if($file_size > 2000000){
                $errors .= 'File size must not be greater than 2 MB.\\n';
            }
            
            if($_POST['age'] < 0 || $_POST['age'] > 18) {
                $errors .= "Age is not valid. Valid age less than 18.\\n";
            }
            
            if($errors == ""){
                $query = "INSERT INTO `enlist`(`enlistor`, `name`, `age`, `address`, `picture`, `sex`) VALUES('".mysqli_real_escape_string($link, $_SESSION['email'])."', '".mysqli_real_escape_string($link, $_POST['name'])."', '".mysqli_real_escape_string($link, $_POST['age'])."', '".mysqli_real_escape_string($link, $_POST['address'])."', '".mysqli_real_escape_string($link, $file_name)."', '".mysqli_real_escape_string($link, $_POST['gender'])."')";
                if(mysqli_query($link, $query)) {
                    move_uploaded_file($file_tmp,"images/enlist/".$file_name);
                    echo "<script> alert('Data added successfully!'); </script>";
                } else {
                    echo "<script> alert('Oops! There was an error, please come back later.'); </script>";
                }
            }else{
                echo "<script> alert('$errors'); </script>";
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

    <title>ENLIST</title>
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
    </nav><br>
    
    <div>
      <h1 style="text-align: center;color: white;">ENLIST CHILDREN</h1>
    </div>
    <form method="post" enctype="multipart/form-data">
        <div style="padding-top: 5%;padding-left: 10%;color: white;">
          <label>Upload Picture </label><br>
          <input type="file" name="image"><br><br>
          <input type="text" placeholder="Name" style="width: 250px;" class="inputBox" name="name"><br><br>
          <input type="number" placeholder="Age" style="width: 250px;" class="inputBox" name="age"><br><br>
          <select class="inputBox" name="gender">
            <option>--Select gender--</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
            <option value="O">Others</option>
          </select><br><br>
          <textarea placeholder="Address" style="width: 250px;height: 100px;" class="inputBox" name="address"></textarea>
      
        </div><br><br>  
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