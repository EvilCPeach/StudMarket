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
        </section>
        <button class="buttonHamburger" id="buttonHamburger">
            <img src="./images/free-icon-arrow-right-1549454.png" alt="">
        </button>
        <section class="dropdown-links" id="dropdown-links">
            <a href="#">Главная</a>
            <a href="#aboutUs">О нас</a>
            <a href="#portfolio">Портфолио</a>
        </section>
        <section class="entry">
            <button class="profile" id="profile">
                <img src="./images/profile_icon.png" alt="">
            </button>
            <article class="dropdown-profile" id="dropdown-profile">
                <a href="#" id="profileEntry">Вход</a>
                <a href="#" id="profileRegistration">Регистрация</a>
            </article>
        </section>
    </header>
    <main class="bgModal hidden" id="bgModal"></main>
    <main class="parentModal hidden" id="parentModal">
        <section class="modal" id="modal">
            <article class="modal-top">
                <div class="modalEntry">
                    <p>Вход</p>
                </div>
                <div class="registration">
                    <p>Регистрация</p>
                </div>
                <button class="closeModal" id="closeModal">
                    <img src="./images/close-icon.png" alt="Закрыть">
                </button>
            </article>
            <form action="" method="POST" class="entryForm">
                <input type="email" placeholder="Введите почту" class="inputPadding" required>
                <input type="password" placeholder="Введтие пароль" class="inputPadding" required>
                <input type="submit" value="Войти">
            </form>
        </section>
    </main>
    <main class="slider">
        <section class="images" id="images">
            <article class="image">
                
            </article>
            <article class="image">
                
            </article>
            <article class="image">
                
            </article>
        </section>
        <button class="previous" id="previous">
            <img src="./images/free-icon-arrow-right-1549454.png" alt="">
        </button>
        <button class="next" id="next">
            <img src="./images/free-icon-arrow-right-1549454.png" alt="">
        </button>
    </main>
    <footer>
        <section class="footer-links">
            <a href="#">Главная</a>
            <a href="#aboutUs">О нас</a>
            <a href="#portfolio">Портфолио</a>
            <a href="#">Вверх</a>
        </section>
        <p>©Дронов Д.С. 2025 специально для ГАУ КО "Колледж предпринимательства"</p>
    </footer>
    <script src="./scriptes/script.js"></script>
</body>
</html>