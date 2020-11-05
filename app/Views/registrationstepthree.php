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

        <!--        <div class="daybuttons">
                    <div>
                        <input class="daybutton" type="checkbox" name="monday">
                        <label for="monday">Option 1</label>
                    </div>
                    <div>
                        <input type="checkbox" class="daybutton" name="tuesday">
                        <label for="tuesday">Option 2</label>
                    </div>
                    <div>
                        <input type="checkbox" class="daybutton" name="wednesday">
                        <label for="wednesday">Option 3</label>
                    </div>
                    <div>
                        <input type="checkbox" class="daybutton" name="thursday">
                        <label for="thursday">Option 1</label>
                    </div>
                    <div>
                        <input type="checkbox" class="daybutton" name="friday">
                        <label for="friday">Option 2</label>
                    </div>
                    <div>
                        <input type="checkbox" class="daybutton" name="saturday">
                        <label for="saturday">Option 3</label>
                    </div>
                    <div>
                        <input type="checkbox" class="daybutton" name="sunday">
                        <label for="sunday">Option 3</label>
                    </div>
                </div>-->

        <p class="text2"> You can always change this again later, no pressure ;) </p>
    </div>

    <div class="buttons">
        <button class="button" onclick="window.location.href='/public/registrationdone'"><strong>NO THANKS</strong></button>
        <button type="button" class="button" onclick="window.location.href='/public/registrationdone'"><strong>NEXT</strong></button>
    </div>
</body>

</html>
