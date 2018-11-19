
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
   $whichprod= $_POST["productnum"];
   $query = 'SELECT SUM(buyproduct.purchaseditem),product.Description, (product.costperiteam*product.quantity) AS "Total Money" FROM product, buyproduct WHERE product.productid = "' . $whichprod . '" GROUP BY product.productid ';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Didn't buy any thing.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo "".$row["SUM(buyproduct.purchaseditem)"]. " " . $row["Description"] . " " . $row["Total Money"] . "<br>";
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
