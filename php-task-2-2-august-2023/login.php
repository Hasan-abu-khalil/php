<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 50%;
            margin: 50px auto;
        }

        h2 {
            text-align: center;
            font-size: 50px;
            color: #666;
        }

        .btn {
            font-size: 20px;
            height: 50px;
            width: 90%;
            margin: auto;
            background: rgba(5, 226, 237, 0.874);
            border: none;
            outline: none;
            color: red;
            border-radius: 20px;
            transition: all .5s;

        }

        input {
            font-size: 20px;
            width: 100%;
            height: 30px;
            margin: 10px 0;
            background: rgb(8, 120, 248);
            border: none;
            outline: none;
            border-radius: 20px;
            transition: all .5s;
            color: #fff;
            padding: 3px 10px;

        }

        input:hover {
            background: rgba(8, 120, 248, 0.724);
        }

        input:focus {
            background: rgba(8, 120, 248, 0.724);
        }
    </style>
</head>


<body>
    <h2>Login</h2>
    <form action="#" method="GET">
        <label for="username">Username:</label>
        <input type="text" name="name">

        <label for="email">Email:</label>
        <input type="email" name="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <br>
        <input class="btn" type="submit" value="Login">
    </form>
</body>

</html>




<?php
session_start();

$name = 'hasan';
$email = 'hasan@gmail.com';
$password = 'hasan123';




if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['password'])) {
    $submitted_name = $_GET['name'];
    $submitted_email = $_GET['email'];
    $submitted_password = $_GET['password'];


    if ($submitted_name === $name && $submitted_email === $email && $submitted_password === $password) {

        $_SESSION['is_logged_in'] = true;
        $_SESSION['name'] = $submitted_name;

        header('Location: task-2.php');
        exit;
    } else {
        // Invalid credentials, show an error message
        echo "Fill in the missing blank";
    }
}
?>