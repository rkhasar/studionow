<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Reservation Studio Now</title>
</head>
<body>

	<form method="post" action="traitement.php">
		<fieldset>
		<legend>inscription</legend>
		<p>
			<label for="nom" name="nom">Nom</label>
			<input type="text" name="nom" id="nom" placeholder="Votre nom" size="10" maxlength="15" required>
		</p>
		<p>
			<label for="prenom" id="prenom" name="prenom">Prénom</label>
			<input type="text" name="prenom" id="prenom" placeholder="Votre prenom" size="10" maxlength="15" required>
		</p>
		<p>
			<label for="num" name="num">Numéro</label>
			<input type="tel" name="num" id="num"  pattern="^0[1-9][0-9]{8}$" placeholder="Votre numéro" required>
		</p>
		<p>
			<label for="email" id="email" name="email">Mail</label>
			<input type="email" name="email" id="email" placeholder="Votre Mail" required>
		</p>
		<p>
			<label for="pass" name="pass">Mot de passe</label>
			<input type="password" name="pass" id="pass" size="10" maxlength="15" required>
		</p>

	</fieldset>
			<fieldset>
				<legend>connexion</legend>
		
		<p>
			<label for="mail" name="mail">Mail</label>
			<input type="text" name="mail" id="mail" placeholder="Votre Mail" required>
		</p>
		<p>
			<label for="mdp" id="mdp" name="mdp">Mdp</label>
			<input type="text" name="mdp" id="mdp" placeholder="Votre Mot de passe" size="10" maxlength="15" required>
		</p>

	</fieldset>
	<input type="submit" name="envoie" value="Envoyer">
	</form>

</body>
</html>