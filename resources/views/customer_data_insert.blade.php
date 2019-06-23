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
        $password=$_POST['password'];
        $customer_name=$_POST['customer_name'];
        $sql = "SELECT makeupper('$customer_name')";
        $res=mysqli_query($conn,$sql);
        $data=mysqli_fetch_array($res);
        //$customer_name=$sql;
        $customer_add=$_POST['customer_add'];
        $phn_no=$_POST['phone_no'];
        $cash=$_POST['cash'];

        $data= array('customer_id' =>$customer_id ,'cash'=>$cash,'password'=>$password, 'customer_name'=>$data[0],'customer_add'=> $customer_add,'phone_no'=> $phn_no);
        DB::table('customer')->insert($data);
        //echo 'successfully inserted';
        echo "<script>
        alert('successfully inserted');
        window.location.href='/';
        </script>";
?>