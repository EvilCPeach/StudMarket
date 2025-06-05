<?php
    require_once './config/link.php';
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)){
        $inputEmail = $_POST['userEmail'];
        $inputPassword = $_POST['userPassword'];
        $select = " SELECT `email-user` AS 'Почта', `password-user` AS 'Пароль', `id-role` AS 'Роль' 
        FROM `users`
        JOIN `roles` ON `roles`.`id-role` = `users`.`role-user`
        WHERE `email-user` = '$inputEmail' ";
        $querySelect = $link->prepare($select);
        $querySelect->execute();
        $resultSelect = $querySelect->fetchAll(PDO::FETCH_ASSOC);
        foreach($resultSelect as $user){
            $userPassword = $user['Пароль'];
            if(password_verify($inputPassword,$userPassword)){
                header('location: pages/userPage.php');
            }
        }
    }
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
    <main class="up" id="up">

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
                    <p id="entryShow">Вход</p>
                </div>
                <div class="registration">
                    <p id="regShow">Регистрация</p>
                </div>
                <button class="closeModal" id="closeModal">
                    <img src="./images/close-icon.png" alt="Закрыть">
                </button>
            </article>
            <form action="" method="POST" class="entryForm" id="entryForm">
                <input type="email" placeholder="Введите почту" name="userEmail" class="inputPadding" required>
                <input type="password" placeholder="Введтие пароль" name="userPassword" class="inputPadding" required>
                <input type="submit" value="Войти">
            </form>
            <form action="./functions/registration.php" method="POST" class="registrationForm hidden" id="regForm">
                <input type="email" placeholder="Введите почту" name="userEmail" class="inputPadding" required>
                <input type="password" placeholder="Придумайте пароль" name="userPassword" class="inputPadding" required>
                <input type="password" placeholder="Повторите пароль" name="userPasswordClone" class="inputPadding" required>
                <input type="submit" value="Зарегистрироваться">
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
    <main class="aboutUs">
        <section class="title">
            <h2>О нас</h2>
        </section>
        <section class="textAboutUs">
            <p>С помощью маркетплейса «СтудМаркета» студенты предоставляют свои профессиональные услуги в разных сферах креативных индустрий Калининградской области. А для работодателей в свою очередь - «СтудМаркет» простой способ найти специалистов среди студентов для своей специализации.</p>
        </section>
    </main>
    <footer>
        <section class="footer-links">
            <a href="#">Главная</a>
            <a href="#aboutUs">О нас</a>
            <a href="#portfolio">Портфолио</a>
            <a href="#up">Вверх</a>
        </section>
        <p>©Дронов Д.С. 2025 специально для ГАУ КО "Колледж предпринимательства"</p>
    </footer>
    <script src="./scriptes/script.js"></script>
</body>
</html>