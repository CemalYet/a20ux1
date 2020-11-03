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

    <h1 class="registrationtitle"> Daily reminder </h1>

    <div class="paragraphbox">
        <p class="text1"> Would you like us to remind you to go on walks on certain days? </p>

        <div class="daybuttons">
            <button type="button"><strong> Mo </strong></button>
            <button type="button"><strong> Tu </strong></button>
            <button type="button"><strong> We </strong></button>
            <button type="button"><strong> Th </strong></button>
            <button type="button"><strong> Fr </strong></button>
            <button type="button"><strong> Sa </strong></button>
            <button type="button"><strong> Su </strong></button>
        </div>

        <p class="text2"> You can always change this again later, no pressure ;) </p>
    </div>

    <div class="buttons">
        <button class="button" onclick="window.location.href='<?php echo base_url()?>/index.php/newcontroller/registrationdone'"><strong>NO THANKS</strong></button>
        <button class="button" onclick="window.location.href='<?php echo base_url()?>/index.php/newcontroller/registrationdone'"><strong>NEXT</strong></button>
    </div>


</body>

</html>
