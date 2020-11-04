<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/stylesheets/loginpage.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merriweather" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
</head>

<body>
    <h1 class="loginpagetitle"> snAPP </h1>
    <img class="loginpageimg" src="<?= base_url()?>/images/whiteTree.png" alt="White Tree">

    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
    <?php endif;?>

    <form class="" action="/login/auth" method="post">
        <div class="inputs">
            <div class="text-box">
                <input type="text" placeholder="Username" name="username" id="username" value="<?= set_value('username') ?>">
            </div>

            <div class="text-box">
                <input type="password" placeholder="Password" name="password" id="password" value="">
            </div>
        </div>

        <div class="buttons">
            <button type="submit" class="button"><strong>LOG IN</strong></button>
            <button type="button" class="button" onclick="window.location.href='/register'"><strong>REGISTER</strong></button>
        </div>
    </form>
</body>

</html>