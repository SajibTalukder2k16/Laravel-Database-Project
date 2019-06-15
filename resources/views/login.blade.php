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
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from login where user='".$uname."'AND Pass='".$password."' limit 1";
    //echo "$uname";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        //header("Location: login");
        //echo " You Have Successfully Logged in";
        echo "<script>
        alert('Welcome');
        window.location.href='/home';
        </script>";
        exit();
    }
    else{
        echo "<script>
alert('Incorrect username or password');
window.location.href='/';
</script>";
        exit();
    }
        
}
?>
 
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
	<link rel="stylesheet" a href="css\login.css3">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body background="image/atm.jpg">
	<div class="container">
	<img src="image/images.jpg"/>
    <form  method="post" >
    {{ csrf_field() }}
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit"  value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>