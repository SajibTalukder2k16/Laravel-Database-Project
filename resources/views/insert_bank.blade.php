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
  width:250px;
  margin:20px;
  padding: 4px;
}
input[type=text], select {
  width:300px;
  padding: 20px 20px;
  margin: 20px 20px;
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
<form action="{{url('insert_data_bank_action')}}" method="post">  
		{{ csrf_field() }}
  {{ csrf_field() }}
    <label for="bk_id">Bank id</label>
    <input type="text" id="bank_id" name="bank_id" placeholder="1234..">
    <br>

    <label for="bk_name">Bank Name</label>
    <input type="text" id="bank_name" name="bank_name" placeholder="Janata Bank(kuet corporate)..">
    <br>
    <label for="location">Location</label>
    <input type="text" id="location" name="bank_location" placeholder="fulbarigate,khulna..">
    <br>
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>