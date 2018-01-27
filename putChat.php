<?php

    $link = mysqli_connect("shareddb-g.hosting.stackcp.net","kindersalvation-32379e2b", "password98@", "kindersalvation-32379e2b");

    $query = "INSERT INTO `message`(`participants`, `message`) VALUES('".mysqli_real_escape_string($link, $_GET['p'])."', '".mysqli_real_escape_string($link, $_GET['m'])."')";
    mysqli_query($link, $query);

    $query = "SELECT * FROM `message` WHERE `participants` = '".mysqli_real_escape_string($link, $_GET['p'])."'";
    if($result = mysqli_query($link, $query)) {
        while($row = mysqli_fetch_array($result)) {
            echo "<p>".$row['message']."</p>";
        }
    }

?>