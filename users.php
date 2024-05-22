<?php

 session_start();

 if (!isset($_SESSION['unique_id'])) {
   header("location: login.php");
 }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Real Time Chatapp</title>
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        font-family: "Poppins", sans-serif;
      }

      body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: #f7f7f7;
      }

      .wrapper {
        background: #fff;
        width: 450px;
        border-radius: 16px;
        box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
          0 32px 64px -48px rgba(0, 0, 0, 0.5);
      }

      .users {
        padding: 25px 30px;
      }

      .users header,
      .users-list a {
        display: flex;
        align-items: center;
        padding-bottom: 20px;
        justify-content: space-between;
        border-bottom: 1px solid #e6e6e6;
      }

      .wrapper img {
        object-fit: cover;
        border-radius: 50%;
      }

     .users{
        padding: 25px 30px;
      }
      .users header,
      .users-list a{
        display: flex;
        align-items: center;
        padding-bottom: 20px;
        border-bottom: 1px solid #e6e6e6;
        justify-content: space-between;
      }
      .wrapper img{
        object-fit: cover;
        border-radius: 50%;
      }
      .users header img{
        height: 50px;
        width: 50px;
      }
      :is(.users, .users-list) .content{
        display: flex;
        align-items: center;
      }
      :is(.users, .users-list) .content .details{
        color: #000;
        margin-left: 20px;
      }
      :is(.users, .users-list) .details span{
        font-size: 18px;
        font-weight: 500;
      }
      .users header .logout{
        display: block;
        background: #333;
        color: #fff;
        outline: none;
        border: none;
        padding: 7px 15px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 17px;
      }
      .users .search{
        margin: 20px 0;
        display: flex;
        position: relative;
        align-items: center;
        justify-content: space-between;
      }
      .users .search .text{
        font-size: 18px;
      }
      .users .search input{
        position: absolute;
        height: 42px;
        width: calc(100% - 50px);
        font-size: 16px;
        padding: 0 13px;
        border: 1px solid #e6e6e6;
        outline: none;
        border-radius: 5px 0 0 5px;
        opacity: 0;
        pointer-events: none;
        transition: all 0.2s ease;
      }
      .users .search input.show{
        opacity: 1;
        pointer-events: auto;
      }
      .users .search button{
        position: relative;
        z-index: 1;
        width: 47px;
        height: 42px;
        font-size: 17px;
        cursor: pointer;
        border: none;
        background: #fff;
        color: #333;
        outline: none;
        border-radius: 0 5px 5px 0;
        transition: all 0.2s ease;
      }
      .users .search button.active{
        background: #333;
        color: #fff;
      }
      .search button.active i::before{
        content: '\f00d';
      }
      .users-list{
        max-height: 350px;
        overflow-y: auto;
      }
      :is(.users-list, .chat-box)::-webkit-scrollbar{
        width: 0px;
      }
      .users-list a{
        padding-bottom: 10px;
        margin-bottom: 15px;
        padding-right: 15px;
        border-bottom-color: #f1f1f1;
      }
      .users-list a:last-child{
        margin-bottom: 0px;
        border-bottom: none;
      }
      .users-list a img{
        height: 40px;
        width: 40px;
      }
      .users-list a .details p{
        color: #67676a;
      }
      .users-list a .status-dot{
        font-size: 12px;
        color: #468669;
        padding-left: 10px;
      }
      .users-list a .status-dot.offline{
        color: #ccc;
      }
    </style>
  </head>
  <body>

  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="#" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

      <script src="./javascript/users.js"></script>
  </body>

</html>
