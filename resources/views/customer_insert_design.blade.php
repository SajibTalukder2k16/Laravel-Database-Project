<!DOCTYPE html>
<html>
<head>
<title>
Customer Data insert
</title>
</head>
<style>
label {
  color: green;
  padding: 8px;
}
input[type=text], select {
  width: 75%;
  padding: 12px 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 75%;
  padding: 12px 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 25%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 140px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>


<div style="width:600px; margin-right:auto; margin-left:auto; border:1px solid #000;">
<form action="{{url('customer_data_insert')}}" method="post">  
		{{ csrf_field() }}
  {{ csrf_field() }}
    <label for="cst_id">Customer id</label>
    <br>
    <input type="text" id="customer_id" name="customer_id" placeholder="1234..">
    <br>

    <label for="pass">Password</label>
    <br>
    <input type="password" id="password" name="password" placeholder="******..">
    <br>

    <label for="cst_name">Customer Name</label>
    <br>
    <input type="text" id="customer_name" name="customer_name" placeholder="Sajib Talukder..">
    <br>
    <label for="cst_add">Customer address</label>
    <br>
    <input type="text" id="customer_add" name="customer_add" placeholder="kuet,khulna..">
    <br>
    <label for="phn_no">Phone Number</label>
    <br>
    <input type="text" id="phone_no" name="phone_no" placeholder="01789**.">
    <br>
    <label for="cash">Intial Cash Insert</label>
    <br>
    <input type="text" id="cash" name="cash" placeholder="5000">
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>