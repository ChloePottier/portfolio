<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Chloé Pottier, graphiste et apprenante développeur web. Actuellement en formation chez Access Code School, à Lons-Le-Saunier, Jura (39)." />
    <meta name="keywords" content="Chloé Pottier portfolio graphiste développeur web infographiste Saint-Amour Jura 39" />
    <meta property="og:title" content="Chloé Pottier graphiste développeur web" />
    <meta property="og:url" content="http://chloepottierinfographiste.fr" />
    <meta property="og:description" content="Chloé Pottier, graphiste et apprenante développeur web. Actuellement en formation chez Access Code School, à Lons-Le-Saunier, Jura (39)." />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Walter+Turncoat&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chloé Pottier - Portfolio - graphiste développeuse web - jura</title>
</head>

<body>
    <?php include('header.php'); ?>
    <!-- Portfolio -->
    <div class="container-fluid" id="portfolio">
        <div class="container pb-5">
            <?php include "presentation.php"; 
            include "galerie.php";
            ?>
            
        </div>
    </div>
    <!--Compétences -->
    <?php include "competences.php"; ?>
    <!-- Expérience -->
    <?php include "experience.php"; ?>
    <!-- Formation -->
    <?php include "formation.php"; ?>
    <!-- CONTACT -->
    <?php include "footer.php"; ?>
    <!-- Script JQUERY pour Ajax -->
   
</body>

</html>