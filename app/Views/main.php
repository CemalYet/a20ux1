<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/stylesheets/main.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/public/stylesheets/navbar.css">
    <title>Title</title>
</head>
<body>

<header class="navbar">
    <a class="app_name" href="home">
        <span class="app_name_title"> snAPP </span>
    </a>
    <nav class="header_nav">
        <ul class="header_nav_list">
            <?php foreach ($menu_items as $menu): ?>
                <li class="header_nav_list_item"><a href="<?=$menu['link']?>" title="<?=$menu['title']?>" class="header_nav_list_item_link"><?=$menu['name']?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>s
</header>

<main>
    <nav>
        <div class="flex_container">
            <div class="flex_item" id="0">
                <img class="image" src="<?=base_url()?>/public/images/ash.jpg" alt="">
            </div>
            <div class="flex_item" id="1">
                <img class="image" src="<?=base_url()?>/public/images/Binr.jpg" alt="">
            </div>
            <div class="flex_item" id="2">
                <img class="image" src="<?=base_url()?>/public/images/chestnut.jpg" alt="">
            </div>
            <div class="flex_item" id="3">
                <img class="image" src="<?=base_url()?>/public/images/forester.jpg" alt="">
            </div>
            <div class="flex_item" id="4">
                <img class="image" src="<?=base_url()?>/public/images/tanzania.jpg" alt="">
            </div>
        </div>
    </nav>
    <p>First iteration of our web page!</p>
</main>
</body>
</html>