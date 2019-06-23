<!DOCTYPE html>
<html>
<head>
<title>
ATM Cash Insert
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
<form action="{{url('atm_insert_action')}}" method="post">  
		{{ csrf_field() }}
  {{ csrf_field() }}
    <label for="atm_id">ATM id</label>
    <br>
    <input type="text" id="atm_id" name="atm_id" placeholder="1234..">
    <br>

    <label for="cash_amount">cash_amount</label>
    <br>
    <input type="text" id="cash_amount" name="cash_amount" placeholder="50000">
    <br>
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>