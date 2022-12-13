<!DOCTYPE html>
<html>
<head>
<title>Test méthode POST</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body> <!-- Corps de la page -->
<form action="formulaire.php" method="POST"> <!-- Début du formulaire -->

<!-- Zones de texte -->
<label for="nom"> Votre Nom : </label><input type="text" name="nom" id="nom" placeholder="Entrez votre nom" /><br/>
<label for="Adresse mail">Votre adresse mail</label><input type="text" name="Adresse mail" id="Adresse mail" placeholder="Entrez votre mail"/><br/>
<label for="Adresse mail">Sujet</label><input type="text" name="Sujet" id="Sujet" placeholder="Sujet"/><br/>

<input type="submit" name="btOK" value="Envoyer">
</form> <!-- Fin du formulaire -->
</body>
</html>