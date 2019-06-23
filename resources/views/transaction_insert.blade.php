<!DOCTYPE html>
<html>
<head>
<title>
Bank Data insert
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
input[type=password], select {
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
<form  action="{{url('transaction_insertion_code')}}"method="post">  
		{{ csrf_field() }}
  {{ csrf_field() }}


    <br>
    <label for="Customer_id">Customer_id</label>
    <br>
    <input type="text" id="customer_id" name="customer_id" required placeholder="1234..">
    <br>
    <br>
    <label for="password">password</label>
    <br>
    <input type="password" id="password" name="password" required placeholder="*****..">
    <br>
    <label for="Transaction_type">Transaction_type</label>
                <br>
                <select name="Transaction_type">
                <option value="credit">credit</option>
                <option value="debit">debit</option>
    </select>
    <br>
    <label for="transaction_amount">transaction_amount</label>
    <br>
    <input type="text" id="transaction_amount" name="transaction_amount" placeholder="500.00">
    <br>
    <label for="atm_id">Atm id</label>
    <br>
    <input type="text" id="atm_id" name="atm_id" placeholder="123..">
    <br>
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>