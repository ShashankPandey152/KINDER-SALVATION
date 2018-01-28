<?php

    session_start();
    
    $link = mysqli_connect("shareddb-g.hosting.stackcp.net","kindersalvation-32379e2b", "password98@", "kindersalvation-32379e2b");
    
    if(isset($_POST['submit'])) {
        if($_POST['field'] != "") {
            if($_FILES['file']['name'] != "" && $_FILES['file1']['name'] != "") {
                echo "<script> alert('Select either media or text file!'); </script>";
            } else if($_FILES['file']['name'] != "") {
                $errors= "";
                $file_name = $_FILES['file']['name'];
                $file_size =$_FILES['file']['size'];
                $file_tmp =$_FILES['file']['tmp_name'];
                $file_type=$_FILES['file']['type'];
                $tmp = explode('.', $file_name);
                $file_ext = strtolower($tmp[1]);

                $expensions= array("jpeg","jpg","png","mp4","flv","mkv");

                if(in_array($file_ext,$expensions) == false){
                    $errors .= "Extension not allowed, please choose a JPEG, PNG, MP4, FLV, MKV file.\\n";
                }

                if($file_size > 20000000){
                    $errors .= 'File size must not be greater than 20 MB.\\n';
                } 
                
                if($errors == "") {
                    $query = "INSERT INTO `upload`(`field`, `img`) VALUES('".mysqli_real_escape_string($link, $_POST['field'])."', '".mysqli_real_escape_string($link, $file_name)."')";
                    if(mysqli_query($link, $query)) {
                        move_uploaded_file($file_tmp,"images/media/".$file_name);
                        echo "<script> alert('Data added successfully!'); </script>";
                    } else {
                        echo "<script> alert('Oops! There was an error, please come back later.'); </script>";
                    }
                }
            } else if($_FILES['file1']['name'] != "") {
                $errors= "";
                $file_name = $_FILES['file1']['name'];
                $file_size =$_FILES['file1']['size'];
                $file_tmp =$_FILES['file1']['tmp_name'];
                $file_type=$_FILES['file1']['type'];
                $tmp = explode('.', $file_name);
                $file_ext = strtolower($tmp[1]);

                $expensions= array("txt");

                if(in_array($file_ext,$expensions) == false){
                    $errors .= "Extension not allowed, please choose a TXT file.\\n";
                }

                if($file_size > 2000000){
                    $errors .= 'File size must not be greater than 2 MB.\\n';
                } 
                
                if($errors == "") {
                    $query = "INSERT INTO `upload`(`field`, `text`) VALUES('".mysqli_real_escape_string($link, $_POST['field'])."', '".mysqli_real_escape_string($link, $file_name)."')";
                    if(mysqli_query($link, $query)) {
                        move_uploaded_file($file_tmp,"images/text/".$file_name);
                        echo "<script> alert('Data added successfully!'); </script>";
                    } else {
                        echo "<script> alert('Oops! There was an error, please come back later.'); </script>";
                    }
                }
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
        .upload {
            margin:30px 0px 0px 50px;
        }
        .option {
            
             border: 2px solid #5BE59E;
            padding: 5px 10px;
            border-radius: 10px;
        }
        #sub1 {
             margin:30px 0px 0px 50px;
            background: none;
            border: 2px solid #5BE59E;
            padding: 5px 10px;
            color: #5BE59E;
            font-weight: bold;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        #sub1:hover {
            background: #5BE59E;
            color: white;
        }
        .bg{
          background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(images/zeIVk.png);
          background-size: cover;
        }
    </style>

    <title>UPLOAD ARTICLE</title>
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
      <h1 style="text-align:center;margin-top:20px;">UPLOAD ARTICLE</h1>
      
      <div class="upload">
          <form method="post" enctype="multipart/form-data">
      <select class="option" name="field">
          <option value="1">--FIELD--</option>
          <option value="EXPERIMENTAL">EXPERIMENTAL</option>
          <option value="EDUCATIONAL">EDUCATIONAL</option>
      </select>
          <div style="margin:20px 0px 0px 30px;color: white;">
         <label for="file">Upload image/video:&nbsp;&nbsp;</label><input type="file" name="file"><br><br>
         <label for="file">Upload text file:&nbsp;&nbsp;</label><input type="file" name="file1" ><br><br>
         <p><input type="submit" value="POST" id="sub1" name="submit"></p>
         </div>
         </form>
 
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS
      <script type="text/javascript">
          $("#img1").hide();
          $("#sub").click(function(){
              $("#img1").show();
          });
      </script>-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>