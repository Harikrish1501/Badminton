<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badminton Tournaments Registration</title>
     
</head>
<style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
*{
    
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
    body {
    font-family: Arial, sans-serif;
    background-color: #e0f7fa;
    margin: 0;
    padding: 0;
}

header {
    background-color: rgb(29, 37, 63);
    color: white;
    text-align: center;
    padding: 10px 0;
}

nav ul {
    display: flex;
    justify-content: center;
    background-color: #007bb5;
    margin: 0;
    padding: 0;
    list-style: none;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

main {
    text-align: center;
    
    padding: 20px;
}

.tournament-table {
    margin: 20px auto;
    border-collapse: collapse;
    width: 80%;
    background-color: #fff;
}

.tournament-table th, .tournament-table td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
}

.tournament-table th {
    background-color: rgb(204, 41, 41);
    color: white;
}

button {
    background-color:  rgb(204, 41, 41);
    color: white;
    border: groove;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 20px;
}

button:hover {
    background-color:rgb(181, 21, 21);
}

footer {
    background-color: #e0f7fa;
    text-align: center;
    padding: 10px 0;
    color: #333;
}

footer a {
    color: #007bb5;
    text-decoration: none;
}

footer a:hover {
    text-decoration: underline;
}

footer p {
    margin: 5px 0;
}
.background{
    position: absolute;
    top: 0;
    left: 0;
    width:100%;
    min-height:100vh;
    background-image: url(reg1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    z-index:-1;
    filter: blur(2px);

}  

</style>
<body>
    <header>
        <h1>INTERCOURT TOURNAMENT REGISTRATION</h1>
    </header>
    <div class="background"></div>
    <main>
        <section>
            <h1>  WELCOME FOR REGISTRATION  </h1>
            <br>
            <h1><u>UPCOMING TOURNAMENTS </u></h1>


            <table class="tournament-table">
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>Tournament</th>
                        <th>Location</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Last Day For Registration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="radio" name="tournament"></td>
                        <td>INTER COURT TOURNAMENT</td>
                        <td>SMASH BADMINTON ACADEMY</td>
                        <td>19-09-2024</td>
                        <td>22-09-2024</td>
                        <td>16-09-2024</td>
                    </tr>
                </tbody>
            </table>
            <a href="treg.php"> <button>CONTINUE</button></a>
        </section>
    </main>
 
 
</body>
</html>
