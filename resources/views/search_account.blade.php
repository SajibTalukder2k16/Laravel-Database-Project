<!DOCTYPE html>
<html>
<head>
<title>
Search
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
<form action="{{url('search_account_action')}}" method="post">  
		{{ csrf_field() }}
  {{ csrf_field() }}
    <label for="customer_id">Customer id</label>
    <br>
    <input type="text" id="customer_id" name="customer_id" placeholder="1234..">
    <br>
    <label for="password">password</label>
    <br>
    <input type="password" id="password" name="password" placeholder="*****">
    <br>
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>