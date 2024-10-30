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
    $phone=$_POST['phone'];
    $date=$_POST['date'];
    $court=$_POST['court'];
    $time=$_POST['time'];
    $amount=$_POST['amount'];

    $query = "INSERT INTO bkform(name,phone,date,court,time,amount) VALUES ('$name','$phone','$date','$court','$time','$amount')";
    if($db->query($query)==TRUE){
        echo "Registration successful!";
        $_SESSION['name']=$name;
        $_SESSION['phone']=$phone;
        $_SESSION['date']=$date;
        $_SESSION['court']=$court;
        $_SESSION['time']=$time;
        $_SESSION['amount']=$amount;
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
    <title>Court booking</title>
    <style>
                   @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
*{
    
    
    font-family: "Poppins", sans-serif;
}
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
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
            background-image: url(ctbook.webp);
            background-repeat: no-repeat;
            background-size: cover;
            z-index:-1;
           filter: blur(2px);
        }
        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #555;
        }
        input[type="text"],
        input[type="tel"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
      
    </style>
</head>
<body>
     
     
<div class="background"></div>
    <div class="form-container">

        <h2><u>BOOKING FORM</u></h2>
        <form action="ctbook.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required  >

            <label for="dob">Date:</label>
            <input type="date" id="dob" name="date" required>

            <label for="court">Court:</label>
            <select id="court" name="court" required>
                <option value="">--Select a court--</option>
                <option value="Court1">court1(rubber)</option>
                <option value="court2">Court2(wodden)</option>
                <option value="court3">court3(synthetic)</option>
                
               
            </select>
            
            <label for="timing">Timing:</label>
            <select id="timing" name="time" required>
                <option value="">--Select a timing--</option>
                <option value="Morning(5AM-7AM)">5AM-7AM</option>
                <option value="Morning(7AM-9AM)">7AM-9AM</option>
                <option value="Evening(6PM-8PM)">6PM-8PM</option>
                <option value="Night(8PM-10PM)">8PM-10PM</option>
                
           </select>
           <label for="amount">Amount:</label>
           <select id="timing" name="amount" required>
               <option value="">--Enter a amount--</option>
               <option value="200">200</option>
               
              
           </select>
           




            <input type="submit" value="Submit"  > 
        </form>
    </div>
</body>
</html>
