<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<div style="height: 300px;width: 350px;background-color:#358413  ;margin-left: 480px;padding: 50px;text=size: 30px;color: white;">
		<h1>Summary of ALL Transactions</h1>


	  <?php
      
     $servername = "localhost";
     $username = "root";
    $password = "";
    $dbname = "atm_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// set serveroutput on;
// --------------------------------Average cgpa------------------------------

// create or replace function avg_amount return number is

// res number(6,3);

// begin

// select avg(transaction_amount) into res from transaction_table;

//  return res;

// end avg_amount;
//  /

//  create or replace procedure avg_res is

//  begin

// //dbms_output.put_line('Average cgpa of the jobseekers is ' || avg_res);

// end avg_res;
//  /


$count_transaction= DB::table('transaction_table')->count('Transaction_id');
$count_customer= DB::table('customer')->count('customer_id');
$max_transaction= DB::table('transaction_table')->max('transaction_amount');
$min_transaction= DB::table('transaction_table')->min('transaction_amount');
$avg_transaction= DB::table('transaction_table')->avg('transaction_amount');
$total_transaction= DB::table('transaction_table')->sum('transaction_amount');




echo "Total Transaction =>";

print_r($total_transaction);
echo "</br>";
echo "Average Transaction=>";
print_r($avg_transaction);
echo "</br>";
echo "Maximum Amount=>";
print_r($max_transaction);
echo "</br>";
echo "Minimum Amount=>";
print_r($min_transaction);
echo "</br>";

echo "No. of Transaction=> ";

print_r($count_transaction);
echo "</br>";

echo "No. of customer=> ";

print_r($count_customer);

?>

</body>
</html>
