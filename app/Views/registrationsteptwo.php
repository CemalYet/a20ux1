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
    <label class="container">
        <form action="/public/register/getUseLocation" method="post">
            <label class="locationCheck" for="locationCheckbox">
                I agree to let this app use my location
                <input type="checkbox" name="locationCheckbox" id="locationCheckbox"/>
            </label>

            <br>

            <div class="buttons">
                <button type="submit" class="button"><strong>NEXT</strong></button>
            </div>

        </form>
    </label>



</body>

</html>

