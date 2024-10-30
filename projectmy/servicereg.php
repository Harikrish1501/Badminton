<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="service";
$db=mysqli_connect($servername,$username,$password,$dbname);
if($db==false)
{
     die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $service=$_POST['service'];
    $date=$_POST['date'];
    

    $query = "INSERT INTO servicebook(name,phone,email,service,date) VALUES ('$name','$phone','$email','$service','$date' )";
    if($db->query($query)==TRUE){
        echo "Registration successful!";
        $_SESSION['name']=$name;
        $_SESSION['phone']=$phone;
        $_SESSION['email']=$email;
        $_SESSION['service']=$service;
        $_SESSION['date']=$date;
       
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glass Effect Form</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    text-align: center;
}
     
        body {
            background: url('https://www.transparenttextures.com/patterns/little-pluses.png'), 
                        linear-gradient(135deg, #5efce8 10%, #736efe 100%);
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        h1{
            padding-top: 0;
            margin: 0;
            text-align: center;
        }
 
        .form-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 40px;
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
            color: black;
        }
 
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

         
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
        }
        .background{
            position: absolute;
            top: 0;
            left: 0;
            width:100%;
            min-height:100vh;
            background-image: url(service2.webp);
            background-repeat: no-repeat;
            background-size: cover;
            z-index:-1;
           filter: blur(2px);
        }

        
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            background:  white;
            border: none;
            border-radius: 4px;
            color: black;
            font-size: 16px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            outline: none;
            backdrop-filter: blur(10px);
        }

       
        input::placeholder {
            color:white;
        }

        
        input[type="submit"] {
            background-color: goldenrod;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: yellow;
        }
    </style>
</head>
<body> 
    <div class="background"></div>

    <div class="form-container">
        <h2>SERVICE REGISTRATION</h2>

        
        <form action="" method="POST">

             
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>

           
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>

           
            <label for="email">Email Address:</label>
            <input type="text" id="email" name="email" placeholder="Enter your email" required>

             
            <label for="service">Select Service:</label>
            <select id="service" name="service" required>
                <option value="">Choose a service</option>
                <option value="Restringing">Restringing</option>
                <option value="Gripping">Gripping</option>
                
            </select>

             
            <label for="date">Preferred Date:</label>
            <input type="date" id="date" name="date" required>
 
            <input type="submit" value="Register">
        </form>
    </div>

</body>
</html>
