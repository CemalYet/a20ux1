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
    <h1 class="registrationtitle"> Registration </h1>

    <form class="" action="/register/save" method="post">
        <div class="inputs">
            <div class="text-box">
                <input class="inputsregistration" type="text" placeholder="Username" name="username" value="<?= set_value('username') ?>">
            </div>

            <div class="text-box">
                <input class="inputsregistration" type="text" placeholder="Email address" name="email"  value="<?= set_value('email') ?>">
            </div>

            <div class="text-box">
                <input class="inputsregistration" type="password" placeholder="Password" name="password" value="">
            </div>

            <div class="text-box">
                <input class="inputsregistration" type="password" placeholder="Confirm password" name="password_confirm" value="">
            </div>

            <?php if(isset($validation)):?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif;?>

        </div>

        <div class="buttons">
            <button type="submit" class="button"><strong>NEXT</strong></button>
        </div>
    </form>

</body>

</html>
