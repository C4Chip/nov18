
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
   $whichOwner= $_POST["customers"];
   $query = 'SELECT * FROM product, buyproduct WHERE product.productid = buyproduct.productid AND buyproduct.customerid = "' . $whichOwner . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Didn't buy any thing.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["Description"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
