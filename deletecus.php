<?php
   $query = "SELECT * FROM customer";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Who are you looking up to delete? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="customersidreved" value="';
        echo $row["customerid"];
        echo '">' . $row["firstname"] . " " . $row["lastname"] . " " . $row["city"] . " " . $row["phonenum"] . "<br>";
   }

   
   mysqli_free_result($result);
?>
