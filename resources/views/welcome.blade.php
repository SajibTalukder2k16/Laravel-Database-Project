<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sajib's ATM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        .buttonx {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 10px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.buttonx span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonx span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.buttonx:hover span {
  padding-right: 25px;
}

.buttonx:hover span:after {
  opacity: 1;
  right: 0;
}
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

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
    </head>
    <body background="image/atm.jpg">
    <form action="{{url('search_account')}}" method="post">
                {{csrf_field()}}
                <button class="button" style="vertical-align:middle"><span>Search your account </span></button>
                </form>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <marquee>Welcome To Sajib's ATM</marquee>
                </div>
                <form  action="{{url('transaction_insertion_code')}}"method="post">  
		{{ csrf_field() }}
  {{ csrf_field() }}

    <label for="Customer_id">Customer_id</label>
    <br>
    <input type="text" id="customer_id" name="customer_id" required placeholder="1234..">
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
                <form action="{{url('customer_insert_design')}}" method="post">
                {{csrf_field()}}
                <button class="buttonx">Create Account</button>
                </form>
                <hr>
                <form action="{{url('login')}}" method="post">
                {{csrf_field()}}
                <button class="button">Admin Panel(not for customers)</button>
                </form>
                

            </div>
        </div>
    </body>
</html>
