<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Construction du message
    $subject = "Message from Contact Form";
    $body = "Name: $name\nEmail: $email\n\n$message";
    
    // Envoyer l'e-mail
    $to = "p.borges0627@gmail.com";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès!";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}   
?>
