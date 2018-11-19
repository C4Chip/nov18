
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

   
   $customerid= $_POST["customersidreved"];
   

   $deletequery = 'DELETE FROM customer Where customer.customerid="' . $customerid . '" ';
   $deletequery1 = 'DELETE FROM buyproduct Where buyproduct.customerid="' . $customerid . '" ';

    if (!mysqli_query($connection, $deletequery)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
    if (!mysqli_query($connection, $deletequery1)) {
        die("Error: insert failed" . mysqli_error($connection));
    }

   echo "Your record was deleted!";
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
