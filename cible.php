<?php 

	if (empty($_POST['prenom']))
	{
		echo 'Veuillez-remplir le champ prénom SVP !';
	}
	elseif (empty($_POST['nom'])) {
		echo 'Veuillez-remplir le champ nom SVP !';
	}
	elseif (!is_numeric($_POST['age'])) {
		echo 'Veuillez-remplir le champ age en numérique SVP !';
	}
	elseif (empty($_POST['sexe'])) {
		echo 'Veuillez-remplir le champ sexe SVP !';
	}
	elseif (empty($_POST['ville'])) {
		echo 'Veuillez-remplir le champ ville SVP !';
	}
	elseif (isset($_FILES['fichier']) AND $_FILES['fichier']['error'] == 0)
	{
        if ($_FILES['fichier']['size'] <= 1000000)
        {
            $infosfichier = pathinfo($_FILES['fichier']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees))
            {
                move_uploaded_file($_FILES['fichier']['tmp_name'], 'uploads/' . basename($_FILES['fichier']['name']));
                echo 'Merci ' . ($_POST['prenom']) . ' ' . ($_POST['nom']) . ", l'envoi a bien été effectué ";
            }
        }
        else
        {
        	echo "Le fichier doit être inférieur à 1Mo !";
        }
	}
	else
	{
	?>

	<p>Hé hé, je sais comment tu t'appelles. Tu t'appelles

<?php
		echo htmlspecialchars(($_POST['prenom']) . ' ' . ($_POST['nom']) . ', tu as ' . ($_POST['age']) . ' ans ' . 'de sexe ' . ($_POST['sexe']) . ' et tu habites à ' . ($_POST['ville']) . ' et ton loisir preféré est : ' . ($_POST['loisir']) . ' !'); 
	}

?>