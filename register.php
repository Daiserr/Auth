<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>Фамилия</label>
        <input type="text" name="surname" placeholder="Введите фамилию">
        <label>Имя</label>
        <input type="text" name="name" placeholder="Введите имя">
        <label>Отчество</label>
        <input type="text" name="patronymic" placeholder="Введите отчество">
        <label>E-mail</label>
        <input type="email" name="email" placeholder="Введите email">
        <label>Придумайте логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Придумайте пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Зарегистрироваться</button>
        <div class="cent">
            <p>
                У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>!
            </p>
        </div>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>