<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "alabdalaouiabdel@hotmail.com"; 
    $subject = "Nieuw contactformulierbericht";
    $body = "Naam: $name\n";
    $body .= "E-mail: $email\n";
    $body .= "Bericht:\n$message";

    if (mail($to, $subject, $body)) {
        echo "<p>Bedankt voor je bericht! We nemen spoedig contact met je op.</p>";
    } else {
        echo "<p>Er is een fout opgetreden bij het verzenden van het bericht. Probeer het later opnieuw.</p>";
    }
} else {
    echo "<p>Er is een fout opgetreden. Probeer het formulier opnieuw in te dienen.</p>";
}
?>
