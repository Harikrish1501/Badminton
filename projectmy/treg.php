<?php
$host="localhost";
$user="root";
$password="";
$db="tournament";

$db=mysqli_connect($host,$user,$password,$db);
if($db==false)
{
     die("connection error");
}
 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $category=$_POST['category'];
    $partner=$_POST['partner'];
    $age=$_POST['age'];

    $query = "INSERT INTO  treg(name,email,phone,category,partner,age) VALUES ('$name','$email','$phone','$category','$partner','$age')";
    if($db->query($query)==TRUE){
        echo "Registration successful!";
        $_SESSION['name']=$name;
        $_SESSION['email']=$email;
        $_SESSION['phone']=$phone;
        $_SESSION['category']=$category;
        $_SESSION['partner']=$partner;
        $_SESSION['age']=$age;
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
    <title>Badminton Tournament Registration</title>
    
</head>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
    body {
    font-family: Arial, sans-serif;
    background-color: #f7f9fc;
    margin: 0;
    padding: 0;
}

header {
    text-align: center;
    background-color:black;
    color: goldenrod;
    padding: 20px;
    position: relative;
}

.banner {
    width: 100%;
    height: auto;
    margin-top: 10px;
    border-radius: 8px;
}

main {
    display: flex;
    justify-content: space-around;
    padding: 20px;
    flex-wrap: wrap;
}

.form-container {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 45%;
}

.form-container h2 {
    color: black;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group input, .form-group select {
    width: 100%;
    padding: 8px;
    border-radius: 10px;
    border: 1px solid #ccc;
}

button {
    background-color:goldenrod;
    color: black;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
    margin-top: 10px;
}

button:hover {
    background-color: gold;
}

.image-section {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 45%;
}

.side-image {
    width: 100%;
    height: 200%;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

footer {
    text-align: center;
    padding: 10px 0;
    background-color:black;
    color: goldenrod;
}
footer h3{
    color: #ffffff;
}

@media (max-width: 768px) {
    main {
        flex-direction: column;
        align-items: center;
    }

    .form-container, .image-section {
        width: 100%;
    }

    .side-image {
        margin-bottom: 30px;
        margin: 100%;
        padding: 100%;
    }
}

</style>
<body>
    <header>
        <h1>Badminton Tournament Registration</h1>
        <img class="banner">
    </header>

    <main>
        <section class="form-container">
            <h2>Register for the Tournament</h2>
            <form action="treg.php" method="POST">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="category">Category:</label>
                    <select id="category" name="category">
                        <option value="singles">Singles</option>
                        <option value="doubles">Doubles</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="partner">Doubles Partner (if applicable):</label>
                    <input type="text" id="partner" name="partner">
                </div>

                <div class="form-group">
                    <label for="age">Age Group:</label>
                    <select id="age" name="age">
                        <option value="under_18">Under 18</option>
                        <option value="18_35">18-35</option>
                        <option value="35_above">35 and Above</option>
                    </select>
                </div>

                <button type="submit">REGISTER</button>
            </form>
        </section>

        <aside class="image-section">
            
            <img src="regimage.webp"  class="side-image">
        </aside>
    </main>

    <footer>
        <h1><u>RULES</u></h1>
        <br>
        <h3>* PLAYERS SHOULD BRING THE COPY OF THEIR IDENTIFICATION PROOF.</h3><br>
        <h3>* PLAYERS SHOULD BE ON TIME FOR TEAM ENTRY.</h3><br>
        <h3>* PLAYERS SHOULD BRING THE SEPARATE SHUTTLE.<h3><br>
        <h3>* EACH MATCH CONTAIN ONE-SET(21 points). </h3><br>
        <h3>* UMPIRE DECISION IS FINAL.</h3>
    </footer>
</body>
</html>
