<?php
session_start();
include 'koneksi.php';
include 'koneksi.php';

if(isset($_SESSION['login'])){
    header("location:");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
   
    <style>
html{
    margin: 0 auto;
}

body {
    background: url(y.jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    flex-direction: column;
}

*{
    font-family: sans-serif;
    box-sizing: border-box;
}

form {
    border: 2px solid #ccc;
    padding: 30px;
    background: rgba(0, 0, 0, 0.7);
    border-radius: 15px;

}

h2{
    text-align: center;
    margin-bottom: 40px;
    color : azure;
}

input{
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;

}

label{
    color: #888;
    font-size: 18px;
    padding: 10px;

}   

button{
    float: right;
    background: red;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
}

button:hover{
    opacity: .7;

}
.error{
    background: #f2dede;
    color: #a94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;

}
h1 {
    text-align: center;
    color: #fff;
}

a{
    float: right;
    background: red;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
    text-decoration: none;
}

a:hover{
    opacity: .7;

}

    </style>
</head>
<body>
    <form action= "login.php" method= "post">

        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])){ ?>
            <p class ="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name">
        <label>Password</label>
        <input type= "password" name="password" placeholder="Password">
        <button type="reset" name="reset">Reset</button>
        <button type="submit">Login</button>
    </form>
</body>
</html>