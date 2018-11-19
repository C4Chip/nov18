<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are your customers:</h1>
<ol>
<?php
   $whatum= $_POST["numberrec"];
   $query = 'select customer.firstname,customer.lastname,product.Description, forassign3.sumbuy from customer,product,forassign3 where ' . $whatum . ' < forassign3.sumbuy and customer.customerid = forassign3.customerid group by customer.customerid';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Didn't buy any thing.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo "".$row["firstname"]. " " . $row["lastname"] . " " . $row["Description"] ." ". $row["sumbuy"]."<br>";
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>



