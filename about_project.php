<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>О проекте</title>
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
    <section class="about_project">
        <h2 class="sub_title">О проекте</h2>
        <div class="about_project">
            <p class="about_project_content">
                Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца. Я совсем один и блаженствую в здешнем краю, словно созданном для таких, как я. Я так счастлив, мой друг, так упоен ощущением покоя, что искусство мое страдает от этого. Ни одного штриха не мог бы я сделать, а никогда не был таким большим художником, как в эти минуты. Когда от милой моей долины поднимается пар и полдневное солнце стоит над непроницаемой чащей темного леса и лишь редкий луч проскальзывает в его святая святых, а я лежу в высокой траве у быстрого ручья и, прильнув к земле, вижу тысячи всевозможных былинок и чувствую, как близок моему сердцу крошечный мирок, что снует между стебельками, наблюдаю эти неисчислимые, непостижимые разновидности червяков и мошек и чувствую близость всемогущего, создавшего нас по своему подобию, веяние вселюбящего, судившего нам парить в вечном блаженстве, когда взор мой туманится и все вокруг меня и небо надо мной запечатлены в моей душе, точно образ возлюбленной, - тогда, дорогой друг, меня часто томит мысль: "Ах! Как бы выразить, как бы вдохнуть в рисунок то, что так полно, так трепетно живет во мне, запечатлеть отражение моей души, как душа моя - отражение предвечного бога!" Друг
            </p>
        </div>
    </section>
    <section class="write_to_author">
        <h2 class="sub_title">Написать автору</h2>
        <div class="write_to_wrapper">
            <form action="#" method="post" class="write_form">
                <label for="user">Введите ваше имя: <span class="obligatory_field">*</span></label>
                <input type="text" id="user" name="name" required>

                <label for="email">Введите ваш email: <span class="obligatory_field">*</span></label>
                <input type="text" id="email" name="email" required>

                <label for="content">Введите ваше сообщение: <span class="obligatory_field">*</span></label>
                <textarea name="content" id="content" cols="30" rows="10" required></textarea>
                <button type="submit" class="btn">Отправить</button>
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