<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Thank you</title>
    <style>
    body {
        font-family: "Roboto", sans-serif;
    }
    </style>
</head>

<body style="color:white;background:blue;display:flex;justify-content: center;align-items: center;height:100vh;">
    <div class="container text-center">
        <h2 style=" display: flex;justify-content: center;margin-bottom: 20px;">
            <span style="font-size:4em" class="fa fa-envelope"></span>
        </h2>
        <?php
            session_start();
           ?>
        <div>
            <h3 style="font-size: 1.3em">Thank you for registering. your ID number is
                <?php  echo $_SESSION['idid'] ;?> 
            </h3>
        </div>
        <div>
           Use the ID number to login Click here to <button type="button" class="btn btn-warning"><a href="login.php"> Login</a> </button>
        </div>

    </div>
</body>

</html>