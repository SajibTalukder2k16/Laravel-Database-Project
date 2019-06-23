<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="atm_management";
// Create connection
$link = new mysqli($servername, $username, "", $dbname);

$con=mysqli_connect($servername,$username,$password);
mysqli_select_db($con,$dbname,);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
if(isset($_POST['customer_id'])){
    
  $customer_id=$_POST['customer_id'];
  $password=$_POST['password'];
  $sql="select * from customer where customer_id='".$customer_id."'AND password='".$password."' limit 1";
  $Transaction_type=$_POST['Transaction_type'];
  //$Transaction_type=$_POST['Transaction_type'];
  $transaction_amount=$_POST['transaction_amount'];
  $atm_id=$_POST['atm_id'];
  $result=mysqli_query($con,$sql); 
  //$link->query($sql) === TRUE
  if (mysqli_num_rows($result)>=1) {
      //echo "$customer_id";
    
   
    // $data= array('customer_id' =>$customer_id ,'transaction_amount'=>$transaction_amount, 'Transaction_type'=>$Transaction_type,'atm_id'=> $atm_id);
    //     DB::table('customer')->insert($data);
    $check=0;
    if($Transaction_type=="credit")
    {
        //UPDATE yourTableName SET yourColumnName = yourColumnName+integerValueToAdd WHERE yourCondition;
        $q = "select cash FROM customer where customer_id = $customer_id";
        $r = mysqli_query($con,$q);
        $i = mysqli_fetch_array($r);
        $j = $i['cash'];
        //echo $j;
        if($j<$transaction_amount)
        {
            $check=1;
            echo "<script>
        alert('Insufficient Balance of Your Account');
        window.location.href='/';
        </script>";
        exit();
        }
        $q = "select cash_amount FROM atm where atm_id = $atm_id";
        $r = mysqli_query($con,$q);
        $i = mysqli_fetch_array($r);
        $j = $i['cash_amount'];
        if($j<$transaction_amount)
        {
            echo "<script>
            alert('Low Balance in ATM');
            window.location.href='/';
            </script>";
            exit();
        }
        else
        {
            $sql="update customer set cash=cash-$transaction_amount where customer_id=$customer_id ;";
            $link->query($sql);
            $atm_id=$_POST['atm_id'];
            $sql="update atm set cash_amount=cash_amount-$transaction_amount where atm_id=$atm_id;";
            $link->query($sql);
        }
        
    }
    else
    {
        $sql="update customer set cash=cash+$transaction_amount where customer_id=$customer_id;";
        $link->query($sql);
        $atm_id=$_POST['atm_id'];
        $sql="update atm set cash_amount=cash_amount+$transaction_amount where atm_id=$atm_id;";
        $link->query($sql);
        //$cash_amount=$_POST['cash_amount'];

        //$link->query($sql);
    }
    $sql = "INSERT INTO transaction_table(customer_id,transaction_amount,Transaction_type,atm_id) VALUES ($customer_id,$transaction_amount,'$Transaction_type','$atm_id')";

    if ($link->query($sql) == TRUE) {
        echo "<script>
        alert('Transaction Completed');
        window.location.href='/';
        </script>";
    } else {
        echo "<script>
        alert('Transaction Failed');
        window.location.href='/';
        </script>";
    }
    
}
else {
    echo "<script>
        alert('Incorrect customer_id or password');
        window.location.href='/';
        </script>";
}
}
else {
    echo "<script>
        alert('Transaction Failed Outside');
        window.location.href='/';
        </script>";
}


?>