<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Chloé Pottier, graphiste et apprenante développeur web. Actuellement en formation chez Access Code School, à Lons-Le-Saunier, Jura (39)." />
    <meta name="keywords" content="Chloé Pottier portfolio graphiste développeur web infographiste Saint-Amour Jura" />
    <meta property="og:title" content="Chloé Pottier graphiste développeur web" />
    <meta property="og:url" content="http://chloepottierinfographiste.fr" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Walter+Turncoat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message - Chloé Pottier - graphiste développeuse web - jura</title>
</head>
<body>
    
<?php
    include('header.php');
    $verif='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,5}$#'; 
    $nom = htmlentities($_POST['nom']);
    $prenom = htmlentities($_POST['prenom']);
    $societe = htmlentities($_POST['societe']);
    $tel = htmlentities($_POST['telephone']);
    $email = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);
    // $captcha = $_POST['captcha'];
    $msg .= "Nom :\t$nom\n";
    $msg .= "Prenom :\t$prenom\n";
    $msg .= "Société :\t$societe\n";
    $msg .= "Tel :\t$tel\n";
    $msg .= "E-mail:\t$email\n";
    $msg .= "Message:\t$message\n\n";
    // $captcha = $_POST['g-recaptcha-response']; 
    $destinataire = "chloe.pottier@free.fr";
    $subject = "Formulaire de contact";
    $mailheaders = "From: Portfolio \n";

        if (empty($nom) OR empty($email) OR empty($message)){ //OR empty($captcha){
                echo '<p class="text-center text-white font-weight-600 font-size-24 mb-5 p-2">Veuillez remplir tous les champs</p>';
        } else if(valid_email($email) == false){
            echo '<p class="text-center text-white font-weight-600 font-size-24 mb-5 p-2">Adresse e-mail invalide</p>';
        } else{
            
            if($envoi=mail($destinataire, $subject, $msg, $mailheaders)) {
                echo'<p class="envoi bg-prune-dark-menu position-absolute text-center text-white font-weight-600 font-size-24 mb-5 p-2">Merci '.$prenom.' '.$nom.', votre mail a bien été envoyé !</p>';
            }
            else echo '<p class="text-center text-white font-weight-600 font-size-24 mb-5 p-2">L\'envoi a échoué, merci de renouveller l\'opération !</p>';
        };
        function valid_email($str) {
            return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
            };
        ?>
        <div class="btn-portfolio position-absolute">
            <a href="index.php" class="btn-retour">Portfolio </a>
        </div>
    </body>
</html>