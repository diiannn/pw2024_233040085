<?php 

if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "abc123") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            color: #337357;
             background-color: #337357; 
        }
        
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto;
            background-color: white;
            width: 50%;
            height: 90%;
            font-size: 1.5rem;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 20px;
        }

        h1 {
            color: #114232;
        }

        img {
            height: 300px;
        }

        input {
            margin-top: 10px;
            border-radius: 20px;
            border: 2px solid black;
            width: 220px;
            height: 25px;
        }

        button {
            margin-top: 15px;
            cursor: pointer;
            font-size: 1.2rem;
            background-color: lightgreen;
            border-radius: 20px;
            padding: 10px;
            border: 2px solid black;
        }
        
        p {
            color: red;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="content">
                <h1><i>Login Admin</i></h1>
                <img src="img/1.png" alt="">
            <?php if (isset($error)) : ?>
                <p>username / password anda salah <?= $_POST["username"]; ?></p>
            <?php endif; ?>
            <form action="" method="post">
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
                <br>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
                <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>