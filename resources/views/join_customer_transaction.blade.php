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

$sql = "SELECT customer.customer_name,customer.phone_no,transaction_table.transaction_amount FROM customer JOIN transaction_table USING(customer_id);";
echo "<h1>Customer name with Transactions</h1>";
echo "<br><br>";
//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer Table and Transaction Table joined by customer_id ";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table class='table table-hover'>";	
	    echo "<tr class='table-active'>"; 
        echo "<th>name</th>"; 

        echo "<th>phone_no</th>";

        echo "<th>amount</th>";  
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>"; 
            echo "<td>".$row['customer_name']."</td>"; 

            echo "<td>".$row['phone_no']."</td>";  

	        echo "<td>".$row['transaction_amount']."</td>"; 
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