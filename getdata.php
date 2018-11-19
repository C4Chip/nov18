
<?php
   $query = "SELECT * FROM customer ORDER BY lastname";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Who are you looking up? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="customers" value="';
        echo $row["customerid"];
        echo '">'.$row["customerid"]. " " . $row["firstname"] . " " . $row["lastname"] . " " . $row["city"] . " " . $row["phonenum"] . " " . $row["agentid"] . "<br>";
   }
   mysqli_free_result($result);
?>
