
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

   
   $fname= $_POST["fnamerec"];
   $lname= $_POST["lnamerec"];
   $city= $_POST["cityrec"];
   $phoneN= $_POST["pnrec"];
   $agentID= $_POST["agentidrec"];

   $query1= 'select max(customerid) as maxid from customer';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["maxid"]) + 1;
   $petid = (string)$newkey;

   $insertquery = 'INSERT INTO customer VALUES ("' . $petid . '","' . $fname . '","' . $lname . '","' . $city . '","' . $phoneN . '","' . $agentID . '")';

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
