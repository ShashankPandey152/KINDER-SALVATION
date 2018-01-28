<?php
    
    session_start();

    $id = $_GET['id'];

    $_SESSION['id'] = 9;

    $link = mysqli_connect("shareddb-g.hosting.stackcp.net","kindersalvation-32379e2b", "password98@", "kindersalvation-32379e2b");

    $query = "SELECT * FROM `users` WHERE `id` = '".mysqli_real_escape_string($link, $_GET['id'])."'";

    $row = mysqli_fetch_array(mysqli_query($link, $query));

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
    <script src="js/jquery.min.js" type="text/javascript"></script>
      
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
     

        .search {
            padding: 5px 0;
            width: 20%;
            height: 30px;
            position: relative;
            margin-left: 10px;
            float: left;
            line-height: 22px;
            float:left; 
            height: 89vh; 
            background: #F8F8F8; 
            margin-left: 0;
        }

        .search input {
            position: absolute;
            width: 0px;
            float: Left;
            margin-left: 210px;
            -webkit-transition: all 0.7s ease-in-out;
            -moz-transition: all 0.7s ease-in-out;
            -o-transition: all 0.7s ease-in-out;
            transition: all 0.7s ease-in-out;
            height: 30px;
            line-height: 18px;
            padding: 0 2px 0 2px;
            border-radius:1px;
        }

        .search:hover input, .search input:focus {
            width: 200px;
            margin-left: 0px;
        }

        .btn {
            height: 30px;
            position: absolute;
            right: 0;
            top: 5px;
            border-radius:1px;
        }

    </style>

    <title>CHATBOX</title>
  </head>
  <body>
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
              <a class="dropdown-item" href="#">ANALYZE</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
     
	<div class="row container search">
    <input type="text" class="form-control input-sm" maxlength="64" placeholder="Search" >
     <button type="submit" class="btn btn-primary btn-sm">Search</button>
     <br><br>
     <p style="margin-left: 20px; margin-top: 40px;"><?php echo $row['name']; ?></p>
    </div>
    <div id="message">
        <div id="name">
          <p style="width: 80%; margin-left: 20%; background: #E0E0E0; height: 50px; padding: 10px 20px;"><strong><?php echo $row['name']; ?></strong></p>  
        </div>
        <div id="messages" style="margin-left: 25%;">
        </div>
       <div style="position:absolute; bottom:1%;">
        <input type="text" id="msg" placeholder='Type message here!' style="font-family: FontAwesome;width: 400%; padding: 5px 10px; margin-left: 135%;">
        <button type="button" id="send" class="btn btn-primary btn-sm" style="margin-right: -430%" value="<?php echo $_SESSION['id'].'+'.$_GET['id']; ?>">Send</button>
        </div> 
    </div>
      
    <script type="text/javascript">
        
        function showChat() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status) {
                    $("#messages").html(this.responseText);
                }
            }
            xmlhttp.open("GET","getChat?p=" + )
        }
        
        $("#send").click(function() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                    $("#messages").html(this.responseText);
                }
            }
            xmlhttp.open("GET","putChat?p=" + $("#send").val() + "&m=" + $("#msg").val(),true);
            xmlhttp.send();
        });
        
    </script>
           

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>