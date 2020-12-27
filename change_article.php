<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Админ панель</title>
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
    <section class="change_article">
        <form action="#" method="post" enctype="multipart/form-data" class="ch_art_form">
            <label for="title">Заголовок статьи: </label>
            <input type="text" id="title" name="title">

            <label for="content_article">Содержимое статьи:</label>
            <textarea name="content_article" id="content_article" cols="30" rows="10"></textarea>
            <button class="btn">Изменить статью</button>
        </form>
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