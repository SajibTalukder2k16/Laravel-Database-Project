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

        $customer_id=$_POST['customer_id'];
        $customer_name=$_POST['customer_name'];
        $customer_add=$_POST['customer_add'];
        $phn_no=$_POST['phone_no'];

        $data= array('customer_id' =>$customer_id , 'customer_name'=>$customer_name,'customer_add'=> $customer_add,'phone_no'=> $phn_no);
        DB::table('customer')->insert($data);
        //echo 'successfully inserted';
        echo "<script>
        alert('successfully inserted');
        window.location.href='/home';
        </script>";
?>