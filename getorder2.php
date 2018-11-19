
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
   $des_rev= $_POST["description"];
   $pri_rec= $_POST["price"];
   $asc_rec= $_POST["ascending"];
   $desc_rec= $_POST["descending"];

   if ($pri_rec == "" && $asc_rec =="")
   {
     $query = 'SELECT * FROM product ORDER BY product.Description DESC';
   }
   elseif ($pri_rec =="" && $desc_rec=="") 
   {
       # code...
       $query = 'SELECT * FROM product ORDER BY product.Description';
   }
   elseif ($des_rev=="" && $asc_rec =="")
   {
    $query = 'SELECT * FROM product ORDER BY costperiteam DESC';
   }
   elseif ($des_rev=="" && $desc_rec =="")
   {
    $query = 'SELECT * FROM product ORDER BY costperiteam ';
   }

   #$query = 'SELECT * FROM product, buyproduct WHERE product.productid = buyproduct.productid AND buyproduct.customerid = "' . $whichOwner . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Didn't .");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<br>";
        echo "".$row["productid"]. " " . $row["Description"] . " " . $row["costperiteam"] . " " . $row["quantity"] . "<br>";
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
