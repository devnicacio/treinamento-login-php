<?php
    session_start();

    if(!isset($_SESSION['id'])){
        session_start();
        header('Location: /login');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../../public/css/dashboard.css">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@300,301,400,401,500,501,700,701,900,901,1,2&display=swap" rel="stylesheet">
</head>
<body>
    <div class="circulo1"></div>
    <div class="circulo2"></div>
    <div class="circulo3"></div>

    <div class="conteudo">
        <div class="card-dashboard">
            <div class="titulo"></div>
            <p>Bem-vindo à sua dashboard!</p>
        </div>
        <div class="logout">
            <form action="/logout" method="POST">
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>
