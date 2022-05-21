<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style\styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Contactez-nous</title>
    <link rel="icon" type="image/png" href="Img/logo.png">
</head>
<header></header>
<body>
    
    <div class="gmap_canvas"><iframe id="gmap_canvas"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49118.332891853745!2d0.4322256612836706!3d43.326171990536366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a9affd9642750b%3A0x406f69c2f3d8090!2s65230%20Guizerix!5e1!3m2!1sfr!2sfr!4v1639692705413!5m2!1sfr!2sfr" frameborder="0" scrolling="no"
            marginheight="0" marginwidth="0"></iframe>
    </div>
    <div class="contact-us-container">
        <div class="contact-us-section contact-us-section1">
            <h1>Contact</h1>
            <p>Contactez nous ici</p>
            <form action="" method="POST">
                <input placeholder="Prénom" name="fName" required>
                <input placeholder="Nom" name="lName">
                <input placeholder="Addresse Email" name="eMail" required><br>
                <textarea maxlength="1500" placeholder="Tapez votre message ... (1500 chararactères max)" name="feedback" rows="10" cols="30"
                    required></textarea><br>
                <button type="submit" name="submit" value="submit">Envoyer</button>
            </form>

        </div>
        <div class="contact-us-section contact-us-section2">
            <h1>Addresses & Infos</h1>
            <h3>Numéros de téléphones</h3>
            <p><a href="tel:05 14 76 40 43">05 14 76 40 43</a>
            </p>
            <h3>Addresse</h3>
            <p>Quelque part dans Guizerix</p>
            <h3>E-mail</h3>
            <p><a href="mailto:theatre-reservation@guiz.com">theatre-reservation@guiz.com</a></p>
        </div>
    </div>
    <footer></footer>
    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>