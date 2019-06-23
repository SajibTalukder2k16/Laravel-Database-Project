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

        $atm_id=$_POST['atm_id'];
        $cash_amount=$_POST['cash_amount'];
        $sql="update atm set cash_amount=cash_amount+$cash_amount where atm_id=$atm_id;";
        $conn->query($sql);

        //$data= array('customer_id' =>$customer_id ,'cash'=>$cash,'password'=>$password, 'customer_name'=>$customer_name,'customer_add'=> $customer_add,'phone_no'=> $phn_no);
        //DB::table('customer')->insert($data);
        //echo 'successfully inserted';
        echo "<script>
        alert('successfully Cash in ');
        window.location.href='/home';
        </script>";
?>