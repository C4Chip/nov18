<?php
   $query = "SELECT * FROM product ORDER BY costperiteam";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }

   echo "How to order? </br>";
   echo "Choice only one between description and price !<br>";
   echo '<input type="radio" name="description" value="Description"> Description';
   echo '<input type="radio" name="price" value="costperiteam"> Price';
   echo "<br>";
   echo "Choice only one between ascending and descending! <br>";
   echo '<input type="radio" name="ascending" value="ASC"> Ascending';
   echo '<input type="radio" name="descending" value="DESC"> Descending';
   while ($row = mysqli_fetch_assoc($result)) {
        echo "<br>";
        echo "".$row["productid"]. " " . $row["Description"] . " " . $row["costperiteam"] . " " . $row["quantity"] . "<br>";
   }

   
   mysqli_free_result($result);
?>
