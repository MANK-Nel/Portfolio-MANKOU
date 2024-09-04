<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['contactName']);
    $email = htmlspecialchars($_POST['contactEmail']);
    $subject = htmlspecialchars($_POST['contactSubject']);
    $message = htmlspecialchars($_POST['contactMessage']);

    // Configurer l'adresse de destination de l'email
    $to = "mankou986@gmail.com";

    // Sujet de l'email
    $email_subject = "Nouveau message de: $name - $subject";

    // Contenu de l'email
    $email_body = "Vous avez reçu un nouveau message à partir de votre formulaire de contact.\n\n".
                  "Nom: $name\n".
                  "Email: $email\n".
                  "Objet: $subject\n".
                  "Message:\n$message";

    // En-têtes de l'email
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Envoi de l'email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Rediriger vers une page de confirmation
        header("Location: merci.html");
        exit();
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
} else {
    echo "Erreur : méthode de requête non supportée.";
}
?>
