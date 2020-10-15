<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/stylesheets/back.css">
    <link rel="stylesheet" href="/public/stylesheets/navbar.css">
    <title>Title</title>
</head>
<body>

<header class="navbar">
    <a class="app_name" href="home">
        <span class="app_name_title"> snAPP </span>
    </a>
    <nav class="header_nav" role="navigation">
        <ul class="header_nav_list">
            <?php foreach ($menu_items as $menu): ?>
                <li class="header_nav_list_item"><a href="<?=$menu['link']?>" title="<?=$menu['title']?>" class="header_nav_list_item_link"><?=$menu['name']?></a></li>
            <?php endforeach; ?>
        </ul>

    </nav>
</header>

<main>
    <p style="font-size: 3rem; padding-top: 1em; text-align: center;">About page</p>
</main>
</body>
</html>