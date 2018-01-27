<?php

    $link = mysqli_connect("shareddb-g.hosting.stackcp.net","kindersalvation-32379e2b", "password98@", "kindersalvation-32379e2b");

    $query = "UPDATE `users` SET `status` = 1 WHERE `email` = '".mysqli_real_escape_string($link, $_GET['email'])."'";
    
    if(mysqli_query($link, $query)) {
        echo "<script> alert('Email address verified!'); </script>";
    } else {
        echo "<script> alert('Oops! There was an error, please come back later.'); </script>";
    }

?>