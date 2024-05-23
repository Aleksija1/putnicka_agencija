<?php
// Podaci za konekciju
$servername = "localhost"; // Naziv servera
$username = "root"; // Korisničko ime
$password = "majasimba1604"; // Lozinka
$database = "putnicka_agencija"; // Naziv baze podataka
// Konekcija sa bazom
$conn = new mysqli($servername, $username, $password, $database);
// Provera konekcije
if ($conn->connect_error) {
    die("Greška prilikom povezivanja sa bazom podataka: " . 
    $conn->connect_error);
}
?>