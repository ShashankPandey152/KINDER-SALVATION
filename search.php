<?php

    $link = mysqli_connect("shareddb-g.hosting.stackcp.net", "interconnect-3237e9c9", "password98@", "interconnect-3237e9c9");

    $query = "SELECT * FROM `add` WHERE `field` = '".mysqli_real_escape_string($link, $_GET['it'])."'";

    $question = str_replace(" ","%20",$_GET['q']);

    $question = explode("%20",$question);

    $no_result = 0;

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
                    echo "<p><button class='answer'>ANSWER</button></p>";
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
        border: 2px solid #19D1FF;
        padding: 0px 20px;
        border-radius: 20px;
        margin: 0 auto;
        width: 80%;
        min-width: 80%;
        margin-bottom: 10px;
    }
    
    .answer {
        color: #19D1FF;
        border: 2px solid #19D1FF;
        border-radius: 10px;
        padding: 5px 10px;
        background: white;
        font-weight: bold;
    }
    
    .answer:hover {
        background: #19D1FF;
        color: white;
    }

</style>