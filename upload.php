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
         #sub {
             margin:30px 0px 0px 50px;
            background: none;
            border: 2px solid #5BE59E;
            padding: 5px 10px;
            color: #5BE59E;
            font-weight: bold;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        #sub:hover {
            background: #5BE59E;
            color: white;
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
    </style>

    <title>STARTER TEMPLATE</title>
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
      <h1 style="text-align:center;margin-top:20px;">UPLOAD ARTICLE</h1>
      <div class="upload">
      <select class="option">
          <option>--FIELD--</option>
          <option>EXPERIMENTAL</option>
          <option>EDUCATIONAL</option>
      </select>
      <p><input type="submit" value="POST" id="sub" name="signup"></p>
          <div id="img1">
       <form action="/action_page.php" >
       <input type="file" name="pic" accept="image/*">
        <input type="file" name="pic">
       <p><input type="submit" value="SUBMIT" id="sub1" name="sub1"></p>
       </form>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script type="text/javascript">
          $("#img1").hide();
          $("#sub").click(function(){
              $("#img1").show();
          });
      </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>