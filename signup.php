<?php
include('configuration.php');
if(isset($_POST['loginsub']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql= "INSERT INTO product  (`username`,`email`,`password`) VALUES ('$username','$email','$password')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('New record inserted.')</script>";
    }
    else{
        echo "Error: " . mysqli_error($conn);
    }
mysqli_close($conn); // Close the database connection after executing the query
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Page</title>
    <style>
         body {
            font-family: Ariel,sans-serif;
            margin: 0;
            padding: 0;
            background-image: 0;
            background-size: cover ;
        }


        .title-bar {
            background-color:black;
            padding: 10px;
            text-align: centre;
        }

        .title-bar .logo {
            display: inline-block;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .title-bar .logo img {
        display: block;
        width: 100%;
        height: auto;
        border-radius: 50%;
        background-color: transparent;
        transform:scale(2.5);
}

        .title-bar h1 {
            color: white;
            margin: 0;
            display: inline;
            vertical-align: left;
        }

        .container {
            max-width: 400px;
            margin: 40px auto;
            padding: 20px;
            background-color:rgba(10, 10, 10, 10);
            border-radius: 9px;
        }

        h1 {
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }

        form {
            text-align: center;
        }

        input[type="text"],
        input[type="password"] {
            padding: 10px;
            margin-top: 10px;
            font-size: 16px;
            border: 1px solid ;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
            background-color: #118AE
            color: #fff;
        }

        input[type="submit"] {
            padding: 7px;
            margin-top: 10px;
            font-size: 16px;
            border: none;
            border-radius: 1px;
            background-color: #6F2232;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #950740;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #950740;
        }

        nav ul li {
            float: left;
        }

        nav ul li a {
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav ul li a:hover {
            background-color: #C3073F;
        }
    </style>
</head>
<body>
<div class="title-bar">
    <div class="logo">
        <img src="tlogo1.png" alt="Logo">
    </div>
        <h1>Hyped Sneaks</h1>
    </div>

    <div class="container">
        <h1>Sign Up</h1>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button name="loginsub" type="submit">submit</button>
        </form>
    </div class="container">   
</div class="title-bar">    
</body>
</head>
</html>    
        