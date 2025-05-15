<?php
    require_once './config/link.php';
    session_start();
    $select = " SELECT * FROM `roles` ";
    $querySelect = $link->prepare($select);
    $querySelect->execute();
    $result = $querySelect->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>СтудМаркет</title>
</head>
<body class="notScroll">
    <main class="preloader" id="preloader">
        <section class="spinner" id="spinner"></section>
    </main>
    <header class="" id="header">
        <a href="" class="logo">
            <img src="./images/logo_1.svg" alt="">
        </a>
        <section class="links">
            <a href="#">Главная</a>
            <a href="#aboutUs">О нас</a>
            <a href="#portfolio">Портфолио</a>
            <article class="dropdown-links">
                <a href="#">Главная</a>
                <a href="#aboutUs">О нас</a>
                <a href="#portfolio">Портфолио</a>
            </article>
        </section>
        <section class="entry">
            <button class="profile" id="profile">
                <img src="./images/profile_icon.png" alt="">
            </button>
            <article class="dropdown-profile" id="dropdown-profile">
                <a href="#">Вход</a>
                <a href="#">Регистрация</a>
            </article>
        </section>
    </header>
    <main class="ss">
        
    </main>
    <footer>

    </footer>
    <script src="./scriptes/script.js"></script>
</body>
</html>