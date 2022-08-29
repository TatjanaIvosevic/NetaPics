<?php
require 'vendor/autoload.php';
define("SITE", "https://localhost/master"); // enter your path on localhost
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "neta");
define("SECRET", "gfhUi34xVbds23Qgk");

$actions = ['login', 'register', 'forget'];

$messages = [
    0 => 'Nema direktnog pristupa!',
    1 => 'Nepoznat korisnik!',
    2 => 'Korisnik sa ovim imenom već postoji, izaberi drugo ime!',
    3 => 'Proveri svoj email i aktiviraj svoj nalog!',
    4 => 'Popuni sva polja!',
    5 => 'Odjavljen korisnik!',
    6 => 'Tvoj nalog je deaktiviran, možeš se ulogovati sada!',
    7 => 'Lozinke se ne podudaraju!',
    8 => 'Format e-mail adrese nije ispravan!',
    9 => 'Lozinka je previše kratka! Ukucaj lozinku dužine 8 karaktera!',
    10 => 'Postoji problem sa mail serverom. Pokušaćemo da pošaljemo email kasnije!',
    11 => 'Tvoj nalog je uspešno aktiviran!',
    12 => 'Greška prilikom obrade podataka'
];
