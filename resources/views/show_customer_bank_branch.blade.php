<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="atm_management";
// Create connection
$link = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$sql = "SELECT * FROM customer;";

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All data from Customer Table";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table>"; 
	    echo "<tr>"; 
	    echo "<th>Customer_id</th>"; 
	    echo "<th>Customer_name</th>"; 
	    echo "<th>customer_add</th>";
	    echo "<th>phone_no</th>";  
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>"; 
	        echo "<td>".$row['customer_id']."</td>"; 
	        echo "<td>".$row['customer_name']."</td>"; 
	        echo "<td>".$row['customer_add']."</td>"; 
	        echo "<td>".$row['phone_no']."</td>"; 
	        echo "</tr>"; 
	    }
	    echo "</table>"; 
	} 
	else {
	    echo "0 results";
	}
}

echo "<br><br>";
$sql = "SELECT * FROM bank;";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All data from bank Table";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table>"; 
	    echo "<tr>"; 
	    echo "<th>bank_id</th>"; 
	    echo "<th>bank_name</th>"; 
	    echo "<th>bank_location</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>"; 
	        echo "<td>".$row['Bank_id']."</td>"; 
	        echo "<td>".$row['Bank_name']."</td>"; 
	        echo "<td>".$row['bank_location']."</td>"; 
	        echo "</tr>"; 
	    }
	    echo "</table>"; 
	} 
	else {
	    echo "0 results";
	}
}

echo "<br><br>";
?>