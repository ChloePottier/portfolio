<?php

$errorMSG = "";

// nom
if (empty($_POST["nom"])) {
    $errorMSG = "Votre nom est obligatoire !";
} else {
    $nom = $_POST["nom"];
}
// prénom
if (empty($_POST["prenom"])) {
    $errorMSG = "Votre prénom est obligatoire !";
} else {
    $prenom = $_POST["prenom"];
}
//téléphone
if (isset($_POST["telephone"])) {
    $telephone = $_POST["telephone"];
} 
//société
if (isset($_POST["societe"])) {
    $societe = $_POST["societe"];
} 
// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Votre e-mail est obligatoire ! ";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Votre message est obligatoire !";
} else {
    $message = $_POST["message"];
}


$EmailTo = "chloe.pottier@free.fr";
$Subject = "Formulaire de contact";

// prepare email body text
$Body = "";
$Body .= "Nom : ";
$Body .= $nom;
$Body .= "\n";
$Body .= "Prénom : ";
$Body .= $prenom;
$Body .= "\n";
$Body .= "Société : ";
$Body .= $societe;
$Body .= "\n";
$Body .= "Téléphone : ";
$Body .= $telephone;
$Body .= "\n";
$Body .= "Email : ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message : ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Message envoyé !";
}else{
    if($errorMSG == ""){
        echo "Quelque chose s'est mal passé, nous n'avons pas pu envoyer votre message.";
    } else {
        echo $errorMSG;
    }
}

?>