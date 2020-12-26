<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Вход</title>
</head>
<body>
<header class="header">
    <div class="logo_wrapper">
        <h1><a href="/" class="logo">IT.blog</a></h1>
    </div>
    <!-- logo_wrapper -->
    <ul class="nav_list">
        <li class="active_nav_list_item">HTML & CSS</li>
        <li class="nav_list_item"><a href="/category.php">JavaScript</a></li>
        <li class="nav_list_item"><a href="/category.php">PHP</a></li>
        <li class="nav_list_item"><a href="#">О проекте</a></li>
        <li class="nav_list_item"><a href="#">Вход</a></li>
    </ul>
    <!-- nav_list -->
</header>
<main class="main_wrapper">
    <section class="sing_in">
        <h2 class="sub_title">Войти в систему</h2>
        <div class="sing_in_wrapper">
            <form action="#" method="post" class="sing_in_form">

                <label for="email">Введите ваш email: <span class="obligatory_field">*</span></label>
                <input type="text" id="email" name="email" required>

                <label for="content">Введите ваше сообщение: <span class="obligatory_field">*</span></label>
                <textarea name="content" id="content" cols="30" rows="10" required></textarea>
                <button type="submit" class="btn">Войти</button>
            </form>
        </div>
    </section>
</main>
<!-- main_wrapper -->
<footer class="footer">
    <div class=" logo_wrapper_footer">
        <h1><a href="/" class="logo logo_footer">IT.blog</a></h1>
    </div>
    <section class="social">
        <h2 class="visually-hidden">Мы в социальных сетях</h2>
        <ul class="social_list">
            <li class="social_icon">
                <a href="#">Twitter</a>
            </li>
            <li class="social_icon">
                <a href="#">Facebook</a>
            </li>
            <li class="social_icon">
                <a href="#">Youtube</a>
            </li>
        </ul>
    </section>
    <div class="copyright">&copy; 2020 Denys Skotarenko</div>
</footer>
</body>
</html>