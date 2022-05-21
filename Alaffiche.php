<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style\styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Opéra GX</title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>

<header></header>

<body>
    <?php
    $link = mysqli_connect("localhost", "root", "", "cinema_db");
    $sql = "SELECT * FROM movieTable";
    ?>
    
    <div id="home-section-1" class="movie-show-container">
        <h1>Actuellement en salle</h1>
        <h3>Reservez votre place dès maintenant !</h3>

        <div class="movies-container">

            <?php
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                for ($i = 0; $i <= 5; $i++){
                                    $row = mysqli_fetch_array($result);
                                    echo '<div class="movie-box">';
                                    echo '<img src="'. $row['movieImg'] .'" alt=" ">';
                                    echo '<div class="movie-info ">';
                                    echo '<h3>'. $row['movieTitle'] .'</h3>';
                                    echo '<a href="booking.php?id='.$row['movieID'].'"><i class="fas fa-ticket-alt"></i> Reserver un siège</a>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                mysqli_free_result($result);
                            } else{
                                echo '<h4 class="no-annot">Réservations indisponibles</h4>';
                            }
                        } else{
                            echo "ERREUR: Ne peux pas executer $sql. " . mysqli_error($link);
                        }
                        
                        // Close connection
                        mysqli_close($link);
                        ?>
        </div>
    </div>
    <div id="home-section-2" class="services-section">
        <h1>Comment ça marche ?</h1>
        <h3>Simple, rapide et efficace</h3>

        <div class="services-container">
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-video"></i>
                </div>
                <h2>1. Choisissez votre film</h2>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-credit-card"></i>
                </div>
                <h2>2. Payez vos places</h2>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-theater-masks"></i>
                </div>
                <h2>3. Prenez votre siège & amusez vous !</h2>
            </div>
            <div class="service-item"></div>
            <div class="service-item"></div>
        </div>
    </div>
    <div id="home-section-3" class="trailers-section">
        <h1 class="section-title">Nouvelles sorties</h1>
        <h3>En salle</h3>
        <div class="trailers-grid">
            <div class="trailers-grid-item">
                <img src="img/thumb-1.jpg" alt="">
                <div class="trailer-item-info" data-video="o_fVfZN7POE">
                    <h3>Roméo & Juliette</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/thumb-2.jpg" alt="">
                <div class="trailer-item-info" data-video="l4AnDL3w-qU">
                    <h3>Bash</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/thumb-3.jpg" alt="">
                <div class="trailer-item-info" data-video="ADCBmPTAKhY">
                    <h3>Double show</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/thumb-4.jpg" alt="">
                <div class="trailer-item-info" data-video="ADCBmPTAKhY">
                    <h3>Les Princes</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/thumb-5.jpg" alt="">
                <div class="trailer-item-info" data-video="ADCBmPTAKhY">
                    <h3>Mademoiselle Molière</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/thumb-6.jpg" alt="">
                <div class="trailer-item-info" data-video="ADCBmPTAKhY">
                    <h3>Le Mystère de l'aviateur</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
        </div>
    </div>
    

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
    
</body>
   <footer></footer>
</html>