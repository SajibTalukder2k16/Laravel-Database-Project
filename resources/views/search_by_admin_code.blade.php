@include('sajib.header')
<?php 

$host="localhost";
$user="root";
$password="";
$db="atm_management";
//$conn = mysqli_connect("localhost", "root", "");
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db,);
//echo "isset($_POST['username'])";
//print isset($_POST['username']);
if(isset($_POST['customer_id'])){
    
    $customer_id=$_POST['customer_id'];
    //$password=$_POST['password'];
    
    $sql="select * from customer where customer_id='".$customer_id."' limit 1";
    //echo "$uname";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        $q = "select * FROM customer where customer_id = $customer_id";
        $r = mysqli_query($con,$q);
        $i = mysqli_fetch_array($r);
        $j = $i['customer_name'];
        $p = $i['customer_id'];
        $q = $i['cash'];
        $r = $i['phone_no'];
        echo "<h1>Your Information</h1>";
        echo "<br>";
        echo "<br>";
        echo "<h3>"."Customer id : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$p."</h3>";
        echo "<h3>"."Customer name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$j."</h3>";
        echo "<h3>"."Cash amount : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$q."</h3>";
        echo "<h3>"."Phone no.: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$r."</h3>";
        $sql = "SELECT * from transaction_table where customer_id=$customer_id";
        $result = mysqli_query($con,$sql);
        $res=mysqli_num_rows($result);
        echo "<h3>"."No. of Transactions : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$res."</h3>";
        echo "<br><br><br>";
        $sql = "SELECT * FROM transaction_table where customer_id=$p;";
        
echo "<h1>Transaction Table</h1>";
//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Transaction from bank Transaction Table";
if($result = mysqli_query($con,$sql)){
	if (mysqli_num_rows($result) > 0) {
        echo "<table class='table table-hover'>";	 
        echo "<tr class='table-active'>"; 
	    echo "<th>transaction_id</th>"; 
	    //echo "<th>customer_id</th>"; 
        echo "<th>transaction_amount</th>";
        echo "<th>transaction_type</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>"; 
	        echo "<td>".$row['Transaction_id']."</td>"; 
	        //echo "<td>".$row['customer_id']."</td>"; 
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
        
    }
    else{
        echo "<script>
alert('customer id not found');
window.location.href='/home';
</script>";
        exit();
    }
        
}
?>
@include('sajib.footer')