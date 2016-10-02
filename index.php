<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="cible.php" method="post" enctype="multipart/form-data">

		<p><label>Prénom :</label><input type="text" name="prenom" /></p>
		<p><label>Nom :</label><input type="text" name="nom" /></p>
		<p><label>Age :</label><input type="text" name="age" /></p>


		<p>Sexe :
		<label>Homme : </label><input type=radio name="sexe" value="masculin">
		<label>Femme : </label><input type=radio name="sexe" value="feminin">
		</p>

		<p><label>Ville :</label><input type="text" name="ville" /></p>

		<p>Loisir :
			<select name="loisir">
			    <option value="foot">Foot</option>
			    <option value="basket">Basket</option>
			    <option value="informatique">Informatique</option>
			    <option value="cinema">Cinéma</option>
			</select>
		</p>

        <p>
            Envoyer un fichier :
            <input type="file" name="fichier" />
        </p>

		<p><input type="submit" value="Valider" /></p>

	</form>

</body>
</html>