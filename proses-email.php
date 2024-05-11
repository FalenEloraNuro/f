<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "faleneloranuro@gmail.com";
    $subject = "Pesan dari Formulir";
    $message = "Nama: ".$_POST['name']."\n";
    $message .= "Email: ".$_POST['email']."\n";
    $message .= "No Paket: ".$_POST['package']."\n";

    // Proses pengiriman email
    mail($to, $subject, $message);

    // Redirect ke halaman terima kasih
    header("Location: terima-kasih.html");
    exit();
}
?>
