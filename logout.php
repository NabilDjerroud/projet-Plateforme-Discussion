<?php
// Démarrage de la session
session_start();

// Destruction de toutes les données de session
$_SESSION = array();

// Destruction de la session
session_destroy();

// Redirection vers une page après la déconnexion (par exemple, la page d'accueil)
header("Location: index.php"); // 
exit;
?>