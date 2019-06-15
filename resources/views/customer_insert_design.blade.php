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
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
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
    <input type="text" id="customer_id" name="customer_id" placeholder="1234..">
    <br>

    <label for="cst_name">Customer Name</label>
    <input type="text" id="customer_name" name="customer_name" placeholder="Sajib Talukder..">
    <br>
    <label for="cst_add">Customer address</label>
    <input type="text" id="customer_add" name="customer_add" placeholder="kuet,khulna..">
    <br>
    <label for="phn_no">Phone Number</label>
    <input type="text" id="phone_no" name="phone_no" placeholder="01789**.">
    <br>
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>