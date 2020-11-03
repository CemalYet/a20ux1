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
    <div class="inputs">
        <div class="text-box">
            <input type="text" placeholder="username" name="" value="">
        </div>

        <div class="text-box">
            <input type="text" placeholder="password" name="" value="">
        </div>
    </div>

    <div class="buttons">
        <button type="button" class="button" onclick="window.location.href='<?php echo base_url()?>/index.php/newcontroller/registrationstepone'"><strong>REGISTER</strong></button>
        <button type="button" class="button"><strong>LOG IN</strong></button>
    </div>
</body>

</html>