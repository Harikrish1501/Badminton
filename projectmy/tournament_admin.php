<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="tournament";
$db=mysqli_connect($servername,$username,$password,$dbname);
if($db==false)
{
     die("connection error");
}
$query="select * from treg";
$result=mysqli_query($db,$query);




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style> 
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}
h1{
    color: black;
}

.table-container {
    width: 80%;
    margin: 50px auto;
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 0 auto;
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

thead {
    background-color: #3498db;
    color: black;
}

button {
    background-color: red;
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

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    font-weight: bold;
}

tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

tbody tr:hover {
    background-color: #f1f1f1;
}

@media (max-width: 600px) {
    th, td {
        padding: 10px;
    }
}

</style>
<body>
    <center>
    <h1>FETCHING DATA FROM TOURNAMENT LIST</h1>
    </center>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>CATEGORY</th>
                    <th>PARTNER</th>
                    <th>AGE</th>
                </tr>
            </thead>
            <tr>
                <?php
                  
                  while($row=mysqli_fetch_assoc($result))

                {
                    ?>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['category'] ?></td>
                    <td><?php echo $row['partner'] ?></td>
                    <td><?php echo $row['age'] ?></td>

                 </tr>
                    <?php
                }  

                ?>



            </tr>
          
        </table>
        <center>
        <a href="admin.php"> <button>BACK</button></a>
        </center>
    </div>
</body>
</html>
