<?php
   $query = "SELECT * FROM customer ";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Who are you looking for to add a new purchase? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="customersrec" value="';
        echo $row["customerid"];
        echo '">'.$row["customerid"]. "<br>";
   }


   $query1 = "SELECT * FROM product ";
   $result1 = mysqli_query($connection,$query1);
   if (!$result1) {
        die("databases query failed.");
    }
   echo "What are you looking for to add a new purchase? </br>";
   while ($row = mysqli_fetch_assoc($result1)) {
        echo '<input type="radio" name="productrec" value="';
        echo $row["productid"];
        echo '">'.$row["Description"]. "<br>";
   }

   echo 'Enter a number you want to add </br> <input type="number" name="numberinsert" value=""> </br> ';

   

   
   mysqli_free_result($result);
?>
