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
<h1>Assignment3</h1>
<h2>Our Customers</h2>
<form action="getbuys.php" method="post">
<?php
   include 'getdata.php';
?>
<input type="submit" value="Get Customer Numbers">
</form>
<h2>Our product</h2>
<form action="getorder2.php" method="post">
<?php
   include 'getdata2.php';
?>
<input type="submit" value="Get New Order Type">
</form>

<h2>Secect A Customer to add a new purchase</h2>
<form action="insertpuract.php" method="post">
<?php
   include 'insertpur.php';
?>
<input type="submit" value="Submit">
</form>

<h2>Insert a new Customer</h2>
<form action="insertcusact.php" method="post">
<?php
   include 'insertcus.php';
?>
<input type="submit" value="Submit">
</form>

<h2>Update phone number</h2>
<form action="undatephact.php" method="post">
<?php
   include 'updateph.php';
?>
<input type="submit" value="Update">
</form>

<h2>Delete a customer</h2>
<form action="deletecusact.php" method="post">
<?php
   include 'deletecus.php';
?>
<input type="submit" value="Delete">
</form>

<h2>Get a number</h2>
<form action="getnumaction.php" method="post">
<?php
   include 'getnum.php';
?>
<input type="submit" value="Get A Number">
</form>

</form>
<h2>Never Been Purchased </h2>

<?php
   include 'getneverbp.php';
?>

</form>

</form>
<h2>Our product for choice </h2>
<form action="getpartispec.php" method="post">
<?php
   include 'getparti.php';
?>
<input type="submit" value="Get A Specific Product ">
</form>

<?php
mysqli_close($connection);
?> 


</body>
</html> 
