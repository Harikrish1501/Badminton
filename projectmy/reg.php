0<?php
$host="localhost";
$user="root";
$password="";
$db="user";

$db=mysqli_connect($host,$user,$password,$db);
if($db==false)
{
     die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="INSERT INTO reg (username,email,password) VALUES ('$username','$email','$password')";
    if($db->query($query)==TRUE){
        echo "REGISTRATION SUCCESSFUL!";
        $_SESSION['username']=$username;
        $_SESSION['email']=$eamil;
        $_SESSION['password']=$password;
        header("location:userlogin.php");
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
    <title>register</title>
</head>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
h1{
    
    color: azure;
    
     
}
h2{
    color: azure;
    
}
.background{
    position: absolute;
    top: 0;
    left: 0;
    width:100%;
    min-height:100vh;
    background-image: url(badminton2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    z-index:-1;
    filter: blur(5px);
}
.container{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 90vh;
}
.box{
    background: #fdfdfd;
    display: flex;
    flex-direction: column;
    padding: 25px;
    border-radius: 20px;
}
.form-box{
    width:450px;
    margin: 0px 10px;

}
.form-box header{
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
    border-bottom: 1px solid #e6e6e6;
}
.form-box form .field{
    display:flex;
    margin-bottom: 10px;
    flex-direction: column;
}
.form-box form .input input{
    height: 40px;
    width:100%;
    font-size: 16px;
    padding:0 10px;
    border-radius: 5px;
    border:1px solid #ccc;

}
.btn{
    height: 35px;
    background:green;
    border: 0;
    border-radius: 5px;
    color:#fff;
    font-size: 15px;
    cursor:pointer;
    transition: all.3s;
    margin-top: 10px;
    padding: 0px 10px;
}
.submit{
    width:100%;
}
.btn:hover{
    opacity:0.82;
}
.link{
    margin-bottom: 15px;
}
    
</style>
<body>
    
   <div class="background"></div>
    <div class="container">
       <div class="box form-box"> 
           <header>REGISTER</header>
           
   <form name="myform2" action="reg.php" method="POST"> 

            <div class="field input">
               <label for="username">username</label>
               <input type="text" name="username" id="username" placeholder="Enter username" required>
            </div> 

            <div class="field input">
                <label for="email">email</label>
                <input type="text" name="email" id="email" placeholder="Enter email" required>
             </div>

            <div class="field input">
               <label for="">Password</label>
               <input type="text" name="password" id="password" placeholder="Enter password" required>
            </div>

            <div class="field">
               <input type="submit" class="btn" name="submit" value="REGISTER" required>
            </div>

            <div class="links">
               Go to signin  <a href="userlogin.php">Sign in</a>
            </div>
   </form>         

       </div>
    </div>
</body>
</html> 