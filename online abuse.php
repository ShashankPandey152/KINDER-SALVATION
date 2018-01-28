<<<<<<< HEAD
=======
<?php

    session_start();

    if(isset($_POST['logout'])) {
        $_SESSION['id'] = "";
        $_SESSION['email'] = "";
        echo "<script> location.href='/'; </script>";
    }

?>

>>>>>>> 24c1f796080f25189e0b4367f8d56d64d223ddc5
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
<<<<<<< HEAD
=======
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
>>>>>>> 24c1f796080f25189e0b4367f8d56d64d223ddc5
    </style>

    <title>Online Abuse</title>
  </head>
  <body class="bg">
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
<<<<<<< HEAD
      <a class="navbar-brand" href="#" style="color: #5BE59E;">बालुत प्रिद्र्णं</a>
=======
      <a class="navbar-brand" href="profile" style="color: #5BE59E;">बालुत प्रिद्र्णं</a>
>>>>>>> 24c1f796080f25189e0b4367f8d56d64d223ddc5
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
<<<<<<< HEAD
              <a class="dropdown-item" href="#">ARTICLES</a>
              <a class="dropdown-item" href="#">UPLOAD</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CHAT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">REPORT</a>
=======
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
>>>>>>> 24c1f796080f25189e0b4367f8d56d64d223ddc5
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              GET INVOLVED
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
<<<<<<< HEAD
              <a class="dropdown-item" href="#">ADOPT</a>
              <a class="dropdown-item" href="#">DONATE</a>
              <a class="dropdown-item" href="#">ANALYZE</a>
=======
              <a class="dropdown-item" href="adopt">ADOPT</a>
              <a class="dropdown-item" href="donate">DONATE</a>
              <a class="dropdown-item" href="enlist">ENLIST</a>
>>>>>>> 24c1f796080f25189e0b4367f8d56d64d223ddc5
            </div>
          </li>
        </ul>
      </div>
<<<<<<< HEAD
=======
        <form method="post">
            <button id="submit" name="logout">LOGOUT</button>
        </form>
>>>>>>> 24c1f796080f25189e0b4367f8d56d64d223ddc5
    </nav>
      <div style=" text-align:center;background: white; opacity: 0.8;margin:50px 200px 50px 200px; auto; border-radius: 20px;">
      <h1 style="color:red"> Online abuse</h1>
          <div style="margin:50px 200px 50px 200px;text-align:justify;">
        <h4> What is online abuse </h4>
        <p>Online abuse is any type of abuse that happens on the web, whether through social networks, playing online games or using mobile phones. Children and young people may experience cyberbullying, grooming, sexual abuse, sexual exploitation or emotional abuse.</p>
        <p>Children can be at risk of online abuse from people they know, as well as from strangers. Online abuse may be part of abuse that is taking place in the real world (for example bullying or grooming). Or it may be that the abuse only happens online (for example persuading children to take part in sexual activity online).</p>
        <p>Children can feel like there is no escape from online abuse – abusers can contact them at any time of the day or night, the abuse can come into safe places like their bedrooms, and images and videos can be stored and shared with other people.</p>
        <h4>Watch our animation about sharing images online</h4>
        <!-- VIDEO-->
        <br>
        <h5>Types of abuse</h5>
        <h6> Bullying online or cyberbullying</h6>
        <p>Cyberbullying is an increasingly common form of bullying behaviour which happens on social networks, games and mobile phones. Cyberbullying can include spreading rumours about someone, or posting nasty or embarrassing messages, images or videos.</p>
        <p>Children may know who's bullying them online – it may be an extension of offline peer bullying - or they may be targeted by someone using a fake or anonymous account. It’s easy to be anonymous online and this may increase the likelihood of engaging in bullying behaviour.</p>
        <p>Cyberbullying includes:</p>
        <li> sending threatening or abusive text messages</li>
        <li>creating and sharing embarrassing images or videos</li>
        <li>'trolling' - the sending of menacing or upsetting messages on social networks, chat rooms or online games</li>
        <li>excluding children from online games, activities or friendship groups</li>
        <li>setting up hate sites or groups about a particular child</li>
        <li>encouraging young people to self-harm</li>
        <li>voting for or against someone in an abusive poll</li>
        <li>creating fake accounts, hijacking or stealing online identities to embarrass a young person or cause trouble using their name</li>
        <li>sending explicit messages, also known as sexting</li>
        <li>pressuring children into sending sexual images or engaging in sexual conversations.</li>
        <br>
        <h6>Online grooming</h6>
        <p>Grooming is when someone builds an emotional connection with a child to gain their trust for the purposes of sexual abuse, sexual exploitation or trafficking.</p>
        <p>Children and young people can be groomed online or face-to-face, by a stranger or by someone they know - for example a family member, friend or professional.</p>
        <p>Groomers may be male or female. They could be any age.</p>
        <p>Many children and young people don't understand that they have been groomed or that what has happened is abuse.</p>
        <p>Groomers can use social media sites, instant messaging apps including teen dating apps, or online gaming platforms to connect with a young person or child.</p>
        <p>They can spend time learning about a young person’s interests from their online profiles and then use this knowledge to help them build up a relationship.</p>
        <p>It’s easy for groomers to hide their identity online - they may pretend to be a child and then chat and become ‘friends’ with children they are targeting</p>
        <p>Groomers may look for:</p>
        <li>usernames or comments that are flirtatious or have a sexual meaning</li>
        <li>public comments that suggest a child has low self-esteem or is vulnerable.</li>
        <p>Groomers don’t always target a particular child. Sometimes they will send messages to hundreds of young people and wait to see who responds.</p>
        <p>Groomers no longer need to meet children in real life to abuse them. Increasingly, groomers are sexually exploiting their victims by persuading them to take part in online sexual activity.</p>
        <br>
        <h6>Child sexual abuse online</h6>
        <p>When sexual exploitation happens online, young people may be persuaded, or forced, to:</p>
        <li>send or post sexually explicit images of themselves</li>
        <li>take part in sexual activities via a webcam or smartphone</li>
        <li>have sexual conversations by text or online.</li>
        <p>Abusers may threaten to send images, video or copies of conversations to the young person's friends and family unless they take part in other sexual activity.</p>
        <p>Images or videos may continue to be shared long after the sexual abuse has stopped.</p>
      </div>
          </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>