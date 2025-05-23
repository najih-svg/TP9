
<?php
// Vérification que les champs existent
if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
} else {
    echo "Veuillez remplir tous les champs du formulaire.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Réponse</title>
</head>
<body>
  <h1>Merci pour votre message !</h1>
  <p><strong>Nom :</strong> <?= $nom ?></p>
  <p><strong>Email :</strong> <?= $email ?></p>
  <p><strong>Message :</strong> <?= nl2br($message) ?></p>
</body>
</html>