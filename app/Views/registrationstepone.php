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

    <div class="inputs">
        <div class="text-box">
            <input class="inputsregistration" type="text" placeholder="username" name="" value="">
        </div>

        <div class="text-box">
            <input class="inputsregistration" type="text" placeholder="email address" name="" value="">
        </div>

        <div class="text-box">
            <input class="inputsregistration" type="text" placeholder="password" name="" value="">
        </div>

        <div class="text-box">
            <input class="inputsregistration" type="text" placeholder="repeat password" name="" value="">
        </div>
    </div>

    <div class="buttons">
        <button type="button" class="button" onclick="window.location.href='<?php echo base_url()?>/index.php/newcontroller/registrationsteptwo'"><strong>NEXT</strong></button>
    </div>


</body>

</html>
