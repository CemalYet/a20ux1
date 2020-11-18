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

    <h1 class="registrationtitle" style="text-align: center !important;"> Daily Reminder </h1>

    <div class="paragraphbox">
        <p class="text1" > Would you like us to remind you to go on walks on certain days? </p>
        <div class="container" style="padding: 0px !important;">
            <form action="/public/register/getDays" method="post">
                <ul class="daybuttons" >
                    <li >
                        <input class="daybutton" type="checkbox" id="monday" name="days[]" value="monday">
                        <label for="monday">Mo</label>
                    </li>
                    <li>
                        <input class="daybutton" type="checkbox" id="tuesday" name="days[]" value="tuesday">
                        <label for="tuesday">Tu</label>
                    </li>
                    <li>
                        <input class="daybutton" type="checkbox" id="wednesday" name="days[]" value="wednesday">
                        <label for="wednesday">We</label>
                    </li>
                    <li>
                        <input class="daybutton" type="checkbox" id="thursday" name="days[]" value="thursday">
                        <label for="thursday">Th</label>
                    </li>
                    <li>
                        <input class="daybutton" type="checkbox" id="friday" name="days[]" value="friday">
                        <label for="friday">Fr</label>
                    </li>
                    <li>
                        <input class="daybutton" type="checkbox" id="saturday" name="days[]" value="saturday">
                        <label for="saturday">Sa</label>
                    </li>
                    <li>
                        <input class="daybutton" type="checkbox" id="sunday" name="days[]" value="sunday">
                        <label for="sunday">Su</label>
                    </li>
                </ul>

                <p class="text2" style="padding: 10px 0 10px 0 !important; font-size: 14px !important;"> You can always change this again later, no pressure ;) </p>

                <div class="buttons">
                    <button type="submit" style="font-size: 20px !important;" class="button"><strong>NEXT</strong></button>
                </div>
            </form>
        </div>

    </div>

</body>

</html>
