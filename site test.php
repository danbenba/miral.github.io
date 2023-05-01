<!DOCTYPE html>
<html>
<head>
	<title>Exemple de site PHP/HTML</title>
</head>
<body>

	<h1>Bienvenue sur mon site PHP/HTML!</h1>

	<?php
		// Connexion à la base de données
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ma_base_de_donnees";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Vérification de la connexion
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}"("

		// Récupération des informations de l'utilisateur à partir de la base de données
		$sql = "SELECT nom, prenom, email FROM utilisateurs WHERE id = 1";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// Affichage des informations de l'utilisateur
			while($row = mysqli_fetch_assoc($result)) {
				echo "Nom: " . $row["nom"] . "<br>";
				echo "Prénom: " . $row["prenom"] . "<br>";
				echo "Email: " . $row["email"] . "<br>";
			}
		} else {
			echo "Aucun utilisateur trouvé.";
		}

		mysqli_close($conn);
	?>

</body>
</html>
