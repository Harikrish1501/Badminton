<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="booking";
$db=mysqli_connect($servername,$username,$password,$dbname);
if($db==false)
{
     die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $cardno=$_POST['cardno'];
    $expirydt=$_POST['expirydt'];
    $cvv=$_POST['cvv'];
 

    $query = "INSERT INTO payment(name,email,cardno,expirydt,cvv) VALUES ('$name','$email','$cardno','$expirydt','$cvv')";
    if($db->query($query)==TRUE){
        echo "Registration successful!";
        $_SESSION['name']=$name;
        $_SESSION['email']=$email;
        $_SESSION['cardno']=$cardno;
        $_SESSION['expirydt']=$expirydt;
        $_SESSION['cvv']=$cvv;
        header("location:ctpaysuccess.html");
        
        exit();

    }else{
        echo "Registration failed";
    }
}
$db->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
     <div class="background"></div>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .background{
    position: absolute;
    top: 0;
    left: 0;
    width:100%;
    min-height:100vh;
    background-image: url(ctpay.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    z-index:-1;
    filter: blur(2px);
}

        .payment-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .payment-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        .payment-form label {
            margin-bottom: 10px;
            display: block;
            font-weight: bold;
        }
        .payment-form input[type="text"],
        .payment-form input[type="email"],
        .payment-form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .payment-form button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .payment-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
     
    <div class="payment-form">
        <h2>Payment Form</h2>
        <form action="#" method="POST">
            <label for="name">Cardholder Name</label>
            <input type="text" id="name" name="name" placeholder="John Doe" required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="example@mail.com" required>

            <label for="card-number">Card Number</label>
            <input type="text" id="card-number" name="cardno" placeholder="1234 5678 9012 3456" required>

            <label for="expiry-date">Expiry Date</label>
            <input type="text" id="expiry-date" name="expirydt" placeholder="MM/YY" required>

            <label for="cvv">CVV</label>
            <input type="number" id="cvv" name="cvv" placeholder="123" required>

            <button type="submit">Pay Now</button>
        </form>
    </div>
</body>
</html>
