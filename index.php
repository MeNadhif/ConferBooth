<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url(./images/bgrd.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: sans-serif;
        }

        .input {
            position: fixed;
            top: 50%;
            left: 603px;
            transform: translate(-30%, -50%);
            background: rgba(21, 26, 24, 0.9);
            padding-left: 70px;
            padding-right: 70px;
            padding-top: 30px;
            padding-bottom: 30px;
            width: 270px;
            box-shadow: 0px 0px 25px 10px black;
            border-radius: 15px;
        }

        .input i {
            font-size: 50px;
            color: white;
            padding: 0px 0;
        }

        .input input {
            color: white;
            font-size: 18px;
        }

        .box-input {
            display: flex;
            justify-content: space-between;
            margin: 10px;
            border-bottom: 2px solid white;
            padding: 8px 0;
        }

        .box-input i {
            font-size: 23px;
            color: white;
            padding: 5px 0;
        }

        .box-input input {
            width: 85%;
            padding: 5px 0;
            background: none;
            border: none;
            outline: none;
            color: white;
            font-size: 18px;
        }

        .box-input input::placeholder {
            color: white;
        }

        .btn-input .box-input input:hover {
            background: rgba(10, 10, 10, s 0.5);
        }

        .btn-input {
            margin-left: 10px;
            margin-bottom: 20px;
            background: none;
            border: 1px solid white;
            width: 92.5%;
            padding: 10px;
            color: white;
            font-size: 18px;
            letter-spacing: 3px;
            cursor: pointer;
            transition: all .2s;
            border-radius: 10px;
        }

        .btn-input:hover {
            background: black
        }
    </style>
</head>

<body>

    <center><img src="./images/cf.png" alt="conferbooth" style="height: 40px; width: 300px; padding-top: 65px;"></center>
    <div class="input">
        <center><i class="fas fa-user-circle"></i></center>
        <form action="./roleAdmin/rolea.php" method="POST">
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" placeholder="Username">
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password">
            </div>
            <button type="submit" name="login" class="btn-input">Login</button>
            <center><strong style="color: white;"><input type="checkbox" value="simpanpassword"> SIMPAN
                    PASSWORD</strong>
            </center>
        </form>
    </div>
</body>

</html>