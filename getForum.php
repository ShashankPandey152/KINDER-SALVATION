<?php

    $link = mysqli_connect("shareddb-g.hosting.stackcp.net","kindersalvation-32379e2b", "password98@", "kindersalvation-32379e2b");

    $question = str_replace(" ","%20",$_GET['q']);

    $question = explode("%20",$question);

    $no_result = 0;

    $query = "SELECT * FROM `add` ORDER BY `id` DESC";

    if($result = mysqli_query($link, $query)) {
        while($row = mysqli_fetch_array($result)) {
            for($i=0;$i<count($question);$i++) {
                if(strpos(strtolower($row['title']),strtolower($question[$i])) !== false) {
                    $query1 = "SELECT `name` FROM `users` WHERE `id` = '".$row['uid']."'";
                    $row1 = mysqli_fetch_array(mysqli_query($link, $query1));
                    echo "<div class='query'>";
                    echo "<p><strong>Asked by</strong>: ".$row1['name']."</p>";
                    echo "<p><strong>Title</strong>: ".$row['title']."</p>";
                    echo "<p><strong>Question</strong>: ".$row['question']."</p>";
                    echo "<p><strong>Details</strong>: ".$row['details']."</p>";
                    $location = "answer?id=".$row['id'];
                    echo "<p><a href='$location'><button type='button' class='answer'>ANSWER</button></a></p>";
                    echo "</div>";
                    $no_result++;
                }
            }
        }
    }
    if($no_result == 0) {
        echo "<p><strong>No results found</strong></p>";
    }

?>

<style type="text/css">

    .query {
        border: 2px solid #8BE3B9;
        padding: 0px 20px;
        border-radius: 20px;
        margin: 0 auto;
        width: 80%;
        min-width: 80%;
        margin-bottom: 10px;
        color: white;
    }
    
    .answer {
        color: #8BE3B9;
        border: 2px solid #8BE3B9;
        border-radius: 10px;
        padding: 5px 10px;
        background: white;
        font-weight: bold;
    }
    
    .answer:hover {
        background: #8BE3B9;
        color: white;
    }
    
</style>