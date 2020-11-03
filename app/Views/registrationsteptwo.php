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
    <h1 class="registrationtitle"> Geo Tagging </h1>

    <div class="paragraphbox">
        <p class="text1"> In order to put your pictures on our Discovery map, we would need to use your location. </p>

        <p class="text2"> Don't worry, we won't sell your location like those other nasty social media platforms ;) </p>
    </div>
    <label class="container"> I agree to let this app use my location
        <input type="checkbox" checked="checked">
        <span class="checkmark"></span>
    </label>
    <div class="buttons">
        <button type="button" class="button" onclick="window.location.href='<?php echo base_url()?>/index.php/newcontroller/registrationstepthree'"><strong>NO THANKS</strong></button>
        <button type="button" class="button" onclick="window.location.href='<?php echo base_url()?>/index.php/newcontroller/registrationstepthree'"><strong>NEXT</strong></button>
    </div>


</body>

</html>

