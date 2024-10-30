 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userpage</title>
 </head>
 <style>
    *{
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      outline: none;
      font-family: "Poppins", sans-serif;
      box-shadow: #42424a;

   
    }
    body{
      overflow-x: hidden;
      color: #0c060d;
    }
    header{
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      padding: 0 249px;
      border-bottom: 1px solid #dbdbdb;
    }
    header ul li{
      display: inline-block;
      list-style: none;
      margin: 0 40px;
    }
    header ul li:last-child{
      margin-right: 0;

    }
    header ul li a{
      text-decoration: none;
      color:#42424a;
      padding:22px 0;
      display: inline-block;
      transition: all ease 0.3s;
      font-size: 18px;

    }
    header ul li a:hover{
      color:red;
    }
    header ul.submenu{
      position: absolute;
      width: 200px;
      background-color: #ffffff;
      box-shadow: 0 20px 45px #00000020;
      margin-top: -50px;
      opacity:0;
      z-index: -999;
      transition: all ease 0.5s;
    }
    header ul li:hover .submenu{
      z-index: 99;
      opacity:1;
      margin-top: 0;
    }
    header ul.submenu li{
      margin:0;
      width: 100%;
    }
    header ul.submenu li a{
      padding:15px 20px;
      display:inline-block;
      width:100%;
    }
    
</style>
 <body>
   <main>
      <header>
           <div class="logo">
            <h1>Badminton</h1>
           </div>
           <nav>
               <ul>
                  <li><a href="#">COURT </a>
                    <ul class="submenu"> 
                   <li> <a href="ctlist.php">court list </a></li>
                   <li> <a href="ctbook.php">book court</a></li>
                
               </ul>
              </li>


              <li><a href="#"> SEVICES</a>
                 <ul class="submenu"> 
                  <li><a href="servlst.php">Service list</a></li>
                  <li><a href="servicereg.php">Book Service</a></li>
                 </ul>
                  </li>

                 
                 <li><a href="#">EVENTS</a>
                  <ul class="submenu"> 
                 <li> <a href="tournament.php">Tournaments</a></li>
                 
             </ul>
             </li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="userlogin.php">Logout</a></li>
            </ul>
             
            </nav>
      </header>
      <section class="hero_sec">
        <center> 
         <img src="badminton3.jpg" alt="">
        </center>

      </section>
   </main>
    
 </body>
 </html>