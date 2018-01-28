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

    <title>Cyber Bullying</title>
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
              <a class="dropdown-item" href="Donate">DONATE</a>
              <a class="dropdown-item" href="analyze">ANALYZE</a>
            </div>
          </li>
        </ul>
      </div>
        <form method="post">
            <button id="submit" name="logout">LOGOUT</button>
        </form>
    </nav>
      <div style=" text-align:center;background: white; opacity: 0.8;margin:50px 200px 50px 200px; auto; border-radius: 20px;">
      <h1 style="color:red;">Bullying and Cyberbullying</h1>
          <div style="margin:50px 200px 50px 200px;text-align:justify;">
        <h4> Bullying and Cyberbullying </h4>
      <p>Bullying is behaviour that hurts someone else – such as name calling, hitting, pushing, spreading rumours, threatening or undermining someone.</p>
      <p>It can happen anywhere – at school, at home or online. It’s usually repeated over a long period of time and can hurt a child both physically and emotionally.</p>
      <p>Bullying that happens online, using social networks, games and mobile phones, is often called cyberbullying. A child can feel like there’s no escape because it can happen wherever they are, at any time of day or night.</p>
      <p>Bullying includes:</p>
      <li>verbal abuse, such as name calling and gossiping</li>
      <li>non-verbal abuse, such as hand signs or text messages</li>
      <li>emotional abuse, such as threatening, intimidating or humiliating someone</li>
      <li>exclusion, such as ignoring or isolating someone</li>
      <li>undermining, by constant criticism or spreading rumours</li>
      <li>controlling or manipulating someone</li>
      <li>racial, sexual or homophobic bullying</li>
      <li>physical assaults, such as hitting and pushing</li>
      <li>making silent, hoax or abusive calls</li>
      <li>online or cyberbullying.</li>
      <br>
      <h4>What is online or cyberbullying</h4>
      <p>Cyberbullying is an increasingly common form of bullying behaviour which happens on social networks, games and mobile phones. Cyberbullying can include spreading rumours about someone, or posting nasty or embarrassing messages, images or videos.</p>
      <p>Children may know who's bullying them online – it may be an extension of offline peer bullying - or they may be targeted by someone using a fake or anonymous account. It’s easy to be anonymous online and this may increase the likelihood of engaging in bullying behaviour.</p>
      <p>Cyberbullying can happen at any time or anywhere - a child can be bullied when they are alone in their bedroom - so it can feel like there’s no escape.</p>
      <br>
      <p>Cyberbullying includes:</p>
      <li>sending threatening or abusive text messages</li>
      <li>creating and sharing embarrassing images or videos</li>
      <li>'trolling' - the sending of menacing or upsetting messages on social networks, chat rooms or online games</li>
      <li>excluding children from online games, activities or friendship groups</li>
      <li>setting up hate sites or groups about a particular child</li>
      <li>encouraging young people to self-harm</li>
      <li>voting for or against someone in an abusive poll</li>
      <li>creating fake accounts, hijacking or stealing online identities to embarrass a young person or cause trouble using their name</li>
      <li>sending explicit messages, also known as sexting</li>
      <li>pressuring children into sending sexual images or engaging in sexual conversations.</li>
      </div>


      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>