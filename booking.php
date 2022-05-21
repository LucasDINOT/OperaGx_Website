<!DOCTYPE html>
<html lang="en">
<?php 
        $id = $_GET['id'];
        $link = mysqli_connect("localhost", "root", "", "cinema_db");

        $movieQuery = "SELECT * FROM movieTable WHERE movieID = $id"; 
        $movieImageById = mysqli_query($link,$movieQuery);
        $row = mysqli_fetch_array($movieImageById);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Book <?php echo $row['movieTitle']; ?> Now</title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>

<body class="bg_2">
    <div class="booking-panel">
        <div class="booking-panel-section booking-panel-section1">
            <h1>Réservez votre ticket</h1>
        </div>
        <div class="booking-panel-section booking-panel-section2" onclick="window.history.go(-1); return false;">
            <i class="fas fa-2x fa-times"></i>
        </div>
        <div class="booking-panel-section booking-panel-section3">
            <div class="movie-box">
                <?php
                    echo '<img src="'.$row['movieImg'].'" alt="">';
                    ?>
            </div>
        </div>
        <div class="booking-panel-section booking-panel-section4">
            <div class="title"><?php echo $row['movieTitle']; ?></div>
            <div class="movie-information">
                <table>
                    <tr>
                        <td>GENRE</td>
                        <td><?php echo $row['movieGenre']; ?></td>
                    </tr>
                    <tr>
                        <td>DURÉE</td>
                        <td><?php echo $row['movieDuration']; ?></td>
                    </tr>
                    <tr>
                        <td>DATE DE SORTIE</td>
                        <td><?php echo $row['movieRelDate']; ?></td>
                    </tr>
                    <tr>
                        <td>DIRECTEUR</td>
                        <td><?php echo $row['movieDirector']; ?></td>
                    </tr>
                    <tr>
                        <td>ACTEURS</td>
                        <td><?php echo $row['movieActors']; ?></td>
                    </tr>
                </table>
            </div>
            <div class="booking-form-container">
                <form action="" method="POST">

                    <select name="date" required>
                        <option value="" disabled selected>DATE</option>
                        <option value="12-3">12 Janvier 2022</option>
                        <option value="13-3">13 Janvier 2022</option>
                        <option value="14-3">14 Janvier 2022</option>
                        <option value="15-3">15 Janvier 2022</option>
                        <option value="16-3">16 Janvier 2022</option>
                    </select>

                    <select name="hour" required>
                        <option value="" disabled selected>HEURE</option>
                        <option value="09-00">13:30 </option>
                        <option value="12-00">16:00 </option>
                        <option value="15-00">20:00 </option>
                    </select>

                    <input placeholder="Nom" type="text" name="fName" required>

                    <input placeholder="Prénom" type="text" name="lName">

                    <input placeholder="Numéro de téléphone" type="text" name="pNumber" required>

                    <button type="submit" value="submit" name="submit" class="form-btn">Reservez maintenant</button>
                    <?php
                    $fNameErr = $pNumberErr= "";
                    $fName = $pNumber = "";
            
                    if(isset($_POST['submit'])){
                     
            
                        $fName = $_POST['fName'];
                        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $fName)) {
                            $fNameErr = 'Name can only contain letters, numbers and white spaces';
                            echo "<script type='text/javascript'>alert('$fNameErr');</script>";
                        }   
            
                        $pNumber = $_POST['pNumber'];
                        if (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $pNumber)) {
                            $pNumberErr = 'Le numéro de téléphone ne peut contenir que des chiffres et des espaces';
                            echo "<script type='text/javascript'>alert('$pNumberErr');</script>";
                        } else {
                            echo "Merci pour votre réservation !";
                        }
                        
                        $insert_query = "INSERT INTO 
                        bookingTable (  `movieName`,
                                        `bookingDate`,
                                        `bookingTime`,
                                        `bookingFName`,
                                        `bookingLName`,
                                        `bookingPNumber`)
                        VALUES (        '".$row['movieTitle']."',
                                        '".$_POST["date"]."',
                                        '".$_POST["hour"]."',
                                        '".$_POST["fName"]."',
                                        '".$_POST["lName"]."',
                                        '".$_POST["pNumber"]."')";
                        mysqli_query($link,$insert_query);

                        //echo "Merci pour votre réservation !";

                        }
                    ?>
                </form>
            </div>
        </div>
    </div>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>