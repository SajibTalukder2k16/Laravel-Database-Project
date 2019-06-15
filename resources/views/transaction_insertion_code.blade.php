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
if(isset($_POST['customer_id'])){
    
  $customer_id=$_POST['customer_id'];
  $Transaction_type=$_POST['Transaction_type'];
  //$Transaction_type=$_POST['Transaction_type'];
  $transaction_amount=$_POST['transaction_amount'];
  $sql = "INSERT INTO transaction_table(customer_id,transaction_amount,Transaction_type) VALUES ($customer_id,$transaction_amount,'$Transaction_type')";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'Transaction_table' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}
}

?>