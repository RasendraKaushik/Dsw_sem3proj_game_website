<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin'])!=true){
        header("location:login.php");
        exit;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
      .button-container {
        position: fixed;
        bottom: 190px;
        left: 50%;
        transform: translateX(-50%);
        }
        .button {
          padding: 10px 20px;
          background-color: #8234db;
          color: #fff;
          text-decoration: none;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          box-shadow: 0 0 10px rgba(58, 49, 143, 0.7); /* Adjust the color and spread as needed */
          transition: box-shadow 0.3s ease; /* Add a smooth transition effect */
        }

        .button:hover {
          box-shadow: 0 0 20px rgba(52, 152, 219, 0.9); /* Adjust the color and spread on hover */
        }
          </style>
</head>
  <body>
  <?php
    include "navbar.php";
    ?>
    <br><br><br>
    
    <div id="form">
        <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
    </div>

    <div class="button-container" >
          <a href="catalouge.html" class="button">PLAY GAMES</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>