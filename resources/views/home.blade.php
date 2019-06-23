
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  height:50px;
  width:350px;
  padding: 14px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
</style>
</head>
<body>
<marquee><h2>ATM Management</h2></marquee>
<div class="w3-container w3-center">
<div class="w3-bar">
<form action="{{url('insert_option')}}" method="post">
                {{csrf_field()}}
                <button class="button button1">INSERT</button>
                </form>

<br>
<form action="{{url('join_customer_transaction')}}" method="post">
                {{csrf_field()}}
<button class="button button2">Transactions with Customer name</button>
</form>
<br>
<form action="{{url('atm_insert')}}" method="post">
                {{csrf_field()}}
<button class="button button3">Cash In To atm</button>
</form>
<br>
<form action="{{url('aggregate_function')}}" method="post">
                {{csrf_field()}}
<button class="button button4">Transaction Summary</button>
</form>
<br>
<form action="{{url('show_customer_bank_branch')}}" method="post">
                {{csrf_field()}}
<button class="button button5">SHOW ALL INFO</button>
<br>
</form>
<form action="{{url('search_by_admin')}}" method="post">
                {{csrf_field()}}
<button class="button button1">Search</button>
<br>
</form>
<br>
<form action="{{url('logout')}}" method="post">
                {{csrf_field()}}
<button >Log Out</button>
</form>
</div>
</div>
</body>
</html>