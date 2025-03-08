<?php
session_start();

// Zničí všechny session proměnné
$_SESSION = [];

// Zničí session
session_destroy();

// Přesměrování na hlavní stránku
header("Location: https://logmodel.knapf.eu/");
exit;
