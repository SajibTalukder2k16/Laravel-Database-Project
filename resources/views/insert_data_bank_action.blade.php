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
         
        $bank_id=$_POST['bank_id'];
        $bank_name=$_POST['bank_name'];
        $bank_location=$_POST['bank_location'];

        $data= array('bank_id' =>$bank_id , 'bank_name'=>$bank_name,'bank_location'=> $bank_location);
        DB::table('bank')->insert($data);
        //echo 'successfully inserted';
        echo "<script>
        alert('successfully inserted');
        window.location.href='/home';
        </script>";
?>