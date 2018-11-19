
<?php
   $query = "select product.Description from product where product.productid not in (select productid from buyproduct);";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Never Been Purchased </br>";
   while ($row = mysqli_fetch_assoc($result)) {
    echo "<br>";
    echo "".$row["Description"]. "<br>";
   }

   
   mysqli_free_result($result);
?>
