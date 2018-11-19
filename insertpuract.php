
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

   
   $whichOwner= $_POST["customersrec"];
   $whichProduct= $_POST["productrec"];
   $howmany= $_POST["numberinsert"];

   $query = 'SELECT * FROM buyproduct WHERE buyproduct.productid = "' . $whichProduct . '" AND buyproduct.customerid = "' . $whichOwner . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) 
    {
       $insertquery = 'INSERT INTO buyproduct VALUES ("' . $whichOwner . '","' . $whichProduct. '","' . $howmany . '")' ;
    }
    else
    {
        $insertquery = 'UPDATE buyproduct SET purchaseditem= (' . $whatum . ' + buyproduct.purchaseditem) WHERE buyproduct.productid= "' . $whichProduct . '"';
    }
    if (!mysqli_query($connection, $insertquery)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your record was added!";
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
