<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Категория</title>
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
    <section class="articles">
        <h2 class="sub_title category_title">Название категории</h2>
        <div class="articles_wrapper">
            <article class="preview_article">
                <h3 class="title_of_article">Название стать</h3>
                <img  class="preview_image" src="/images/preview_image.jpg" alt="">
                <div class="preview_content">
                    Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца. Я совсем один и блаженствую в здешнем краю, словно созданном для таких, как я.
                </div>
                <a href="#">Читать далее</a>
                <div class="author_time">
                    <p class="author">Автор: Денис Скотаренко</p>
                    <time datetime="10-12-2020">Дата публикации: 14.12.2020</time>
                </div>
            </article>
            <!-- preview_article -->
            <article class="preview_article">
                <h3 class="title_of_article">Название стать</h3>
                <img  class="preview_image" src="/images/preview_image.jpg" alt="">
                <div class="preview_content">
                    Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца. Я совсем один и блаженствую в здешнем краю, словно созданном для таких, как я.
                </div>
                <a href="#">Читать далее</a>
                <div class="author_time">
                    <p class="author">Автор: Денис Скотаренко</p>
                    <time datetime="10-12-2020">Дата публикации: 14.12.2020</time>
                </div>
            </article>
            <!-- preview_article -->
        </div>
        <!-- articles_wrapper -->
    </section>
    <section class="pagination">
        <h2 class="sub_title visually-hidden">Пагинация</h2>
        <ul class="pagination_list">
            <li class="pagination_item"><a href="#">1</a></li>
            <li class="pagination_item active_pagination_item">2</li>
            <li class="pagination_item"><a href="#">3</a></li>
            <li class="pagination_item"><a href="#">4</a></li>
            <li class="pagination_item"><a href="#">5</a></li>
        </ul>
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