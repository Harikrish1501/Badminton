<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>court list</title>
</head>
<style>
    *{
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        padding:0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;

    }
    body{
        padding: 20px;
    }
    table{
        width: 100%;
        border-collapse: collapse;
    }
    table,tr,th,td{
        border: 4px solid black;
    }
    .image{
        width: 150px;
        height: 150px;

    }
    td{
        padding: 15px;
        text-align: center;
    }
    .image img{
        width: 100%;
        height: 100%;
        object-fit: cover;

    }
    th{
        padding: 50px;
        margin: 50px;
    }
</style>
<body>
    <div class="background"></div>
    <center>
    <h1>COURT LIST</h1>
    </center>
    <table>
        <tr> 
            <th>Court image</th>
            <th>Court type</th>
            <th>Court description</th>
            <th>Price for 2hours</th>
        </tr>
        <tr>
             <td>
                 <div class="image">
                    <img src="rubber.webp" alt="">

                 </div>
             </td>
             <td>Rubber court</td>
             <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, fugiat!</td>
             <td>100</td>
        </tr>
        <tr>
            <td>
                <div class="image">
                   <img src="wodden.jpeg" alt="">

                </div>
            </td>
            <td>Wodden  court</td>
            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, fugiat!</td>
            <td>100</td>
       </tr>
       <tr>
        <td>
            <div class="image">
               <img src="synthetic.avif" alt="">

            </div>
        </td>
        <td>synthetic  court</td>
        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, fugiat!</td>
        <td>100</td>
   </tr>
    </table>
    <center>
        <a href="user.php">Back</a>
    </center>

</body>
</html>