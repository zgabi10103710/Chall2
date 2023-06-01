<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérification de l'authentification (exemple simplifié)
    if ($username === 's' && $password === 's') {
        // Authentification réussie
        header("Location: TuCroyerQueCetaitFini.html");
        // Vous pouvez rediriger l'utilisateur vers une page sécurisée ici
    } else {
        // Authentification échouée
        echo 'Nom d\'utilisateur ou mot de passe incorrect.';
    }
}
?>