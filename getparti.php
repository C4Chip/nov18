<?php
   $query = "SELECT * FROM product";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Who are you looking up? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="productnum" value="';
        echo $row["productid"];
        echo '">'.$row["productid"]. " " . $row["Description"] . " " . $row["costperiteam"] . " " . $row["quantity"] . "<br>";
   }

   
   mysqli_free_result($result);
?>
