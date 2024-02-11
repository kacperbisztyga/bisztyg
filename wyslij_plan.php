<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $restauracja = $_POST['restauracja'];
    $uwagi = $_POST['uwagi'];
    $do = "kacperbisztyga7@gmail.com"; // Zmień na swój adres email
    $temat = "Plan na Walentynki";
    $wiadomosc = "Restauracja: " . $restauracja . "\nUwagi: " . $uwagi;
    $naglowki = "From: noreply@example.com" . "\r\n" .
                "Reply-To: noreply@example.com" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

    if (mail($do, $temat, $wiadomosc, $naglowki)) {
        echo "Plan wysłany!";
    } else {
        echo "Nie udało się wysłać planu.";
    }
}
?>
