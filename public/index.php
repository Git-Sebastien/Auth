<?php
require '../vendor/autoload.php';

session_start();
use App\Auth;

dump(Auth::login(10));


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="p-4">
    <?php if (isset($_SESSION['auth'])):?>
        <div class="alert alert-success">
            Vous êtes bien connecter en tant que : <?= $_SESSION['auth'] ?? null ?> - <a href="./logout.php">Se deconnecter</a>
        </div>
    <?php endif?>

    <?php if(!isset($_GET['login'])) :?>
        <a href="/login.php" class="btn btn-primary">Se connecter</a>
    <?php endif?>
        <h1>Accèder aux pages</h1>

        <ul>
            <li><a href="admin.php">Page réservée à l'administrateur</a></li>
            <li><a href="user.php">Page réservée à l'utilisateur</a></li>
        </ul>
</body>
</html>