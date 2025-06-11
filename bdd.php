<?php
try {
  $db = new PDO(
    "mysql:host=localhost;dbname=app_commun;charset=utf8",
    "root",
    "root",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (Exception $e) {
  die("Erreur de connexion à la base de données : " . $e->getMessage());
}
