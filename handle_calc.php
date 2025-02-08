<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product Cost Calculator</title>
	<style type="text/css">
		.number {font-weight: bold; }
	</style>
</head>
<body>
<?php // Script 4.2 - handle_calc.php
/* This script takes values from calculator.html and preforms
total cost and monthly payment calculations. */

// Address error handling, if you want. I do want so here:
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Get the values from the $_POST array:
$_price = $_POST['price'];
$_quantity = $_POST['quantity'];
$_discount = $_POST['discount'];
$_tax = $_POST['tax'];
$_shipping = $_POST['shipping'];
$_payments = $_POST['payments'];

// Calculate the total:
$_total = $_price * $_quantity;
$_total = $_total + $_shipping;
$_total = $_total - $_discount;

// Determine the tax rate:
$_taxrate = $_tax / 100;
$_taxrate = $_taxrate + 1;

// Factor in the tax rate:
$_total = $_total * $_taxrate;

// Calculate the monthly payments:
$_monthly = $_total / $_payments;

// Print out the resaults:
print "<p>You have selected to purchase:<br>
<span class=\"number\">$_quantity</span> widget(s) at <br>
<span class=\"number\">$_price</span> price each plus a <br>
$<span class=\"number\">$_shipping</span> shipping cost and a <br>
<span class=\"number\">$_tax</span> percent tax rate.<br>
After your $<span class=\"number\">$_discount</span> discount, the total cost is
$<span class=\"number\">$_total</span>.<br>
Divided over <span class=\"number\">$_payments</span> monthly payments, that would be $<span class=\"number\">$_monthly</span> each. </p>";

?>
</body>
</html>