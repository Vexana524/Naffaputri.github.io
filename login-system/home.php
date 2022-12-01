<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    # code...

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

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
    background-color: #604747;
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
    <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
    <a href= "logout.php">Logout</a>
</body>
</html> 

<?php
}else{
    header("Location: proyek/login-system/index.php");
    exit();
}
 ?>