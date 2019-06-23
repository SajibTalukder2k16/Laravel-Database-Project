@include('sajib.header')
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

$sql = "SELECT * FROM customer order by customer_id;";

//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All data from Customer Table";
echo "<h1>ALL Customer</h1>";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table class='table table-hover'>";	
	    echo "<tr class='table-active'>";
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
echo "<h1>ALL Bank </h1>";
//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All data from bank Table";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table class='table table-hover'>"; 
        echo "<tr class='table-active'>"; 
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

$sql = "SELECT * FROM atm;";
echo "<h1>ALL ATMs </h1>";
//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All data from bank Table";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table class='table table-hover'>"; 
        echo "<tr class='table-active'>"; 
	    echo "<th>atm_id</th>"; 
	    echo "<th>Available Cash</th>"; 
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>"; 
	        echo "<td>".$row['atm_id']."</td>"; 
	        echo "<td>".$row['cash_amount']."</td>"; 
	        //echo "<td>".$row['bank_location']."</td>"; 
	        echo "</tr>"; 
	    }
	    echo "</table>"; 
	} 
	else {
	    echo "0 results";
	}
}
echo "<br><br>";
$sql = "SELECT * FROM transaction_table order by transaction_id desc;";
echo "<h1>ALL Transaction</h1>";
//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Transaction from bank Transaction Table";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
        echo "<table class='table table-hover'>";	 
        echo "<tr class='table-active'>"; 
	    echo "<th>transaction_id</th>"; 
	    echo "<th>customer_id</th>"; 
        echo "<th>transaction_amount</th>";
        echo "<th>transaction_type</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>"; 
	        echo "<td>".$row['Transaction_id']."</td>"; 
	        echo "<td>".$row['customer_id']."</td>"; 
            echo "<td>".$row['transaction_amount']."</td>"; 
            echo "<td>".$row['Transaction_type']."</td>"; 
	        echo "</tr>"; 
	    }
	    echo "</table>"; 
	} 
	else {
	    echo "0 results";
	}
}
echo "<br><br>";
$sql = "SELECT customer_id FROM transaction_table union select customer_id from customer;";// order by transaction_id desc;";
echo "<h1>ALL ID ACTIVE or INACTIVE</h1>";
//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Transaction from bank Transaction Table";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
        echo "<table class='table table-hover'>";	 
        echo "<tr class='table-active'>"; 
	    //echo "<th>transaction_id</th>"; 
	    echo "<th>customer_id</th>"; 
       // echo "<th>transaction_amount</th>";
        //echo "<th>transaction_type</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>"; 
	       // echo "<td>".$row['Transaction_id']."</td>"; 
	        echo "<td>".$row['customer_id']."</td>"; 
           // echo "<td>".$row['transaction_amount']."</td>"; 
           // echo "<td>".$row['Transaction_type']."</td>"; 
	        echo "</tr>"; 
	    }
	    echo "</table>"; 
	} 
	else {
	    echo "0 results";
	}
}

echo "<br><br>";
$sql = "SELECT customer_id,count(*) from transaction_table group by customer_id order by count(*) desc"; 
echo "<h1>Customer who are active</h1>";
//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Transaction from bank Transaction Table";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
        echo "<table class='table table-hover'>";	 
        echo "<tr class='table-active'>"; 
	    //echo "<th>transaction_id</th>"; 
	    echo "<th>customer_id</th>"; 
        //echo "<th>transaction_amount</th>";
        echo "<th>transaction_no</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>"; 
	       // echo "<td>".$row['Transaction_id']."</td>"; 
	        echo "<td>".$row['customer_id']."</td>"; 
           // echo "<td>".$row['transaction_amount']."</td>"; 
            echo "<td>".$row['count(*)']."</td>"; 
	        echo "</tr>"; 
	    }
	    echo "</table>"; 
	} 
	else {
	    echo "0 results";
	}
}

echo "<br><br>";

	$sql="call getall";
	//$sql = "SELECT customer_id,phone_no FROM customer left join transaction_table using(customer_id) where transaction_table.customer_id is null;";
echo "<h1>Customer who are not active</h1>";
//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Transaction from bank Transaction Table";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
        echo "<table class='table table-hover'>";	 
        echo "<tr class='table-active'>"; 
	    //echo "<th>transaction_id</th>"; 
		echo "<th>customer_id</th>"; 
		echo "<th>phone no</th>"; 
        //echo "<th>transaction_amount</th>";
        //echo "<th>transaction_type</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>"; 
	       // echo "<td>".$row['Transaction_id']."</td>"; 
			echo "<td>".$row['customer_id']."</td>";
			echo "<td>".$row['phone_no']."</td>";  
			
            //echo "<td>".$row['transaction_amount']."</td>"; 
            //echo "<td>".$row['Transaction_type']."</td>"; 
	        echo "</tr>"; 
	    }
	    echo "</table>"; 
	} 
	else {
	    echo "0 results";
	}
}

?>
@include('sajib.footer')
