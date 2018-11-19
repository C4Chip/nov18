
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
   $phoneN= $_POST["pnumrec"];
   

   $updatequery = 'UPDATE customer SET phonenum= "' . $phoneN . '" WHERE customerid="' . $whichOwner . '"';

    if (!mysqli_query($connection, $updatequery)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your record was updated!";
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
