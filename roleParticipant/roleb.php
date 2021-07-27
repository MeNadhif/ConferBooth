<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Role Peserta</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url(../images/bgrd.jpg);
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
            margin-bottom: 20px;
        }

        .input p {
            color: white;
        }

        .btn-input .box-input input:hover {
            background: rgba(10, 10, 10, s 0.5);
        }

        .btn-input {
            margin-left: 10px;
            margin-top: 5px;
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

        h2 {
            color: white;
            padding-top: 390px;
            padding-left: 50px;
        }

        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .bottom {
            position: fixed;
            text-align: center;
            top: 90%;
            left: 100px;
            transform: translate(-30%, -50%);
            background: rgba(21, 26, 24, 0.9);
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 0px;
            padding-bottom: 0px;
            width: 150px;
            border-radius: 15px;
        }

        .bottom p {
            color: white;
        }

        .bottom a {
            color: lightgreen;
            font-size: 15px;
            text-decoration: none;
        }

        .bottom a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <center><img src="../images/cf.png" alt="conferbooth" style="height: 40px; width: 300px; padding-top: 65px;"></center>
    <div class="input">
        <center><i class="fas fa-user-circle"></i></center>
        <form action="./Participant/index.php" method="get">
            <button type="submit" name="Participant" class="btn-input">Peserta</button>
        </form>
    </div>
    <h2><i class="fas fa-sign-out-alt"></i><a href="#"> Log out</a></h2>
    <div class="bottom">
        <p>Have question ?
            <strong>
                <a href="#">Contact Us</a>
            </strong>
        </p>
    </div>
</body>

</html>