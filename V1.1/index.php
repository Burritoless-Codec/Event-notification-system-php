<?php

      //Created by: MJGC-Jonathan
      //https://goo.gl/UGpbjL
      //Please leave credits in source code.
      session_start();
      include_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
      <title>Event Notifications</title>
      <link type="text/css" rel="stylesheet" href="css/main.css">
</head>
<body>
      <div class="main">
            <h1>Events</h1>
      <?php
            //To reverse the order of events from oldest to newest just change DESC to ASC.
           $sql_search = "SELECT * FROM events ORDER BY id DESC";
            $results = mysqli_query($db, $sql_search) or die(mysql_error());
                  if(mysqli_num_rows($results) > 0) {
                        while($row = mysqli_fetch_assoc($results)) {
                              $id = $row['id'];
                              $name = $row['name'];
                              $description = $row['description'];
                              $timestmp = $row['timestmp'];
                                  echo "<div class='event'>
                                    <h2 class='title'>$name</h2>
                                    <p class='mtext'>$description</p>
                                    <h6 class='ts'>$timestmp</h6>
                                    </div>
                                    <div class='spacing'></div>";
                 }
           } 
      ?>      
      </div>
</body>
</html>