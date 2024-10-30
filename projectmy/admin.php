<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background-color: #f7f7f7;
}

.wrapper {
    display: flex;
}

.sidebar {
    width: 250px;
    height: 100vh;
    background: #2f3640;
    color: white;
    padding: 20px;
    position: fixed;
}

.sidebar h1 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 24px;
}

.sidebar ul {
    list-style: none;
}

.sidebar ul li {
    margin: 20px 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    padding: 10px;
    display: block;
    border-radius: 5px;
    transition: 0.3s;
}

.sidebar ul li a:hover {
    background-color: #1abc9c;
}

.main_content {
    margin-left: 250px;
    padding: 20px;
    width: calc(100% - 250px);
}

.header {
    background-color: #1abc9c;
    color: white;
    padding: 20px;
    text-align: center;
    font-size: 24px;
    border-radius: 5px;
}

.info {
    margin-top: 20px;
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.info p {
    font-size: 18px;
    line-height: 1.6;
}

/* For Icons */
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

</style>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <h1>ADMIN PANEL</h1>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i>DASHBOARD</a></li>
                <li><a href="courtbook_admin.php"><i class="fas fa-user"></i>COURT LIST</a></li>
                <li><a href="servicebook_admin.php"><i class="fas fa-cog"></i>SERVICE LIST</a></li>
                <li><a href="tournament_admin.php"><i class="fas fa-cog"></i>TOURNAMENT LIST</a></li>
                

                <li><a href="#"><i class="fas fa-sign-out-alt"></i> LOGOUT</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main_content">
            <div class="header">Welcome to the Admin Panel</div>
            
        </div>
    </div>
</body>
</html>
