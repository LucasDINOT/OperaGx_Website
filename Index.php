<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="UTF-8">
  <meta name="OperaGX" content="width=device-width, initial-scale=1.0">
  
  <link rel="icon" href="Image/logo.png" sizes="32x32">
  <link rel="stylesheet" href="style\styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <title>OperaGX</title>
</head>



<body>
  <header>
  <div id="menu-container">                  
      <div id="nav">
          <img id="logoNavbar" src="img/logoBlanc.png" height="150" width="150"> 
          <a class="navButton borderR" href="Index.php">Accueil</a>
          <a class="navButton borderR" href="Alaffiche.php">À l'affiche</a>
          <a class="navButton borderR" href="Alaffiche.php">Réserver</a>
          <a class="navButton" href="contact.php">Contact</a>
      </div>
    </div>             
  </header>

  <section>
    <div class="bg"></div>
    <h2>Bienvenue à l'Opéra GX</h2>
    <img src="Img/img2.png" class="micka">
  </section>

  <div id="bloc1">
    <div id="reservation">
      <img id="res1" src="img/reservation.png" width="200px" height="200px">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi arcu, 
        pharetra vel dui eu, elementum tempor dolor. Mauris vel laoreet risus, 
        vitae efficitur tortor. In condimentum augue nisi, id maximus neque condimentum 
        sit amet.
      </p>
      <button id="send" class="button btncontact"><a href="Index.php">Comment réserver ?</a></button>
    </div>
    <div id="acces">
      <img id="res2" src="img/afficheopera.png" width="200px" height="200px">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi arcu, 
        pharetra vel dui eu, elementum tempor dolor. Mauris vel laoreet risus, 
        vitae efficitur tortor. In condimentum augue nisi, id maximus neque condimentum 
        sit amet.
      </p>
      <button id="send" class="button2 btncontact"><a href="contact.php">Contact</a></button>
    </div>
  </div>

  <div id="bloc2">
      <div id="affiches">
        <div id="prog1">
          <img src="img/poster-1.jpg">
          <p>
            Praesent eget varius erat. Ut nec ipsum dolor. 
            Phasellus mauris mauris, mattis eu rutrum quis, 
            molestie condimentum lectus. 
          </p>
        </div>
        <div id="prog2">
          <img src="img/poster-2.jpg">
          <p>
            Praesent eget varius erat. Ut nec ipsum dolor. 
            Phasellus mauris mauris, mattis eu rutrum quis, 
            molestie condimentum lectus. 
          </p>
        </div>
        <div id="prog3">
          <img src="img/poster-3.jpg">
          <p>
            Praesent eget varius erat. Ut nec ipsum dolor. 
            Phasellus mauris mauris, mattis eu rutrum quis, 
            molestie condimentum lectus.  
          </p>
        </div>
        <div id="prog4">
          <img src="img/poster-4.jpg">
          <p>
            Praesent eget varius erat. Ut nec ipsum dolor. 
            Phasellus mauris mauris, mattis eu rutrum quis, 
            molestie condimentum lectus. 
          </p>
        </div>
      </div>
    <button id="knowmore" class="button btncontact"><a href="contact.php">En savoir plus</a></button>
    <a class="button-btncontact45" id="navUser" href="login.php"><?php if(isset($_SESSION['username'])){ echo $_SESSION['username'];}else{echo "Connexion";}?></a>
  </div>

  <div id="bloc3">
    <p>
      Praesent eget varius erat. Ut nec ipsum dolor. Phasellus mauris mauris, mattis eu rutrum quis, molestie condimentum
      lectus. Integer non nunc gravida, accumsan turpis sit amet, bibendum lectus. Cras vel metus luctus, interdum neque ac,
      interdum erat. Integer ac nisl ut quam gravida fermentum tristique eget lorem. Praesent malesuada pulvinar tincidunt.
    </p>
  </div>
  <footer>

  <div id="footer">
    <a class="txt" href="#">Accès</a>
    <a class="txt" href="#">Évènements</a>
    <a class="txt" href="#">Réservation</a>
    <a href="#"><img src="img/iconFacebook.png" height="60px" width="60px"></a>
    <a href="#"><img src="img/iconInsta.png" height="60px" width="60px"></a>
    <a href="#"><img src="img/iconTwitter.png" height="60px" width="60px"></a>
    <a href="#"><img src="img/iconYtb.png" height="60px" width="80px"></a>
    <a class="txt" href="#">Contact</a>
    <a class="txt" href="#">Mention légales</a>
  </div>  

  </footer>
</body>
  

<script type="text/javascript">
  var position = document.documentElement;
  position.addEventListener("mousemove", e => {
    position.style.setProperty('--x', e.clientY + "px");
  })
</script>

<script>
    function checkVisible( elm, evalType ) {
      evalType = evalType || "visible";

      var vpH = $(window).height(), // Viewport Height
          st = $(window).scrollTop(), // Scroll Top
          y = $(elm).offset().top,
          elementHeight = $(elm).height();

      if (evalType === "visible") return ((y < (vpH + st)) && (y > (st - elementHeight)));
      if (evalType === "above") return ((y < (vpH + st)));
    }
</script>

<script>
  $(document).ready(function() {
  $("button").mouseover(function() {
    var p = $("p#44.test").css("background-color", "yellow");
    p.hide(1500).show(1500);
    p.queue(function() {
      p.css("background-color", "red");
    });
  });
});
</script>