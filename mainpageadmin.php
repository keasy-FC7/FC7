<!DOCTYPE html>
<html lang="fr">
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</html>
<html>
 <meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<head>

</head>

<body>
<h1>Recherche</h1>
<form action="keyword.php" id="keywordform">
   Recherche:<br>
  <input type="text" name="keyword"><br>
  Veuillez entrer le departement :<br>
  <input type="text" name="departement"><br>
  <input type="submit" value="submit">
  </form>
  <label for="keywords">Choisir quel category a chercher:</label>
<select name="keywords" id="keywords" form="keywordform">
  <option value="Nom">Nom</option>
  <option value="Prenom">Prenom</option>
  <option value="Faculte">Faculte</option>
 
  <option value="Nombre_de_cle">Nombre de cle</option>
  <option value="Code_de_cle">Code de cle</option>
  <option value="Nom_piece">Nom de la piece</option>
  <option value="Batiment">Batiment</option>
  <option value="Date_de_remise">Date de remise</option>
  <option value="Date_de_fin">Date de fin</option>
  <option value="Depot">Depot</option>
</select>
<hr>

<?php
include "db_connect.php";
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Admin</h1>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Bonjour</h2>
			<p>De retour, <?=$_SESSION['name']?>!</p>
		</div>
		<h2>Faire des modifications</h2>
		<a href="mainpageadmin.php">Page admin </a>
	</body>

<form action="keyword.php" id="keywordform">
   Recherche:<br>
  <input type="text" name="keyword"><br>
  Veuillez entrer le departement :<br>
  <input type="text" name="departement"><br>
  <input type="submit" value="submit">
  </form>
  <label for="keywords">Choisir quel category a chercher:</label>
<select name="keywords" id="keywords" form="keywordform">
  <option value="Nom">Nom</option>
  <option value="Prenom">Prenom</option>
  <option value="Faculte">Faculte</option>
 
  <option value="Nombre_de_cle">Nombre de cle</option>
  <option value="Code_de_cle">Code de cle</option>
  <option value="Nom_piece">Nom de la piece</option>
  <option value="Batiment">Batiment</option>
  <option value="Date_de_remise">Date de remise</option>
  <option value="Date_de_fin">Date de fin</option>
  <option value="Depot">Depot</option>
</select>
<hr>
<h1>Ajouter une personne a la table général</h1>
<a href="ajoute.php">ici</a>
<hr>
<h1>Transfer</h1>
<form action="transfer.php">
  veuillez entrer le nom de la personne a ajouter :<br>
  <input type="text" name="nom"><br>
  
  Veuillez entrer le departement :<br>
  <input type="text" name="departement"><br>
  <input type="submit" value="ajouter" ><br>
  
</form>
 <hr>
 <h1>Supprimer</h1>
<form action="delete.php">
  veuillez entrer le nom de la personne a supprimer :<br>
  <input type="text" name="nom"><br>
   Veuillez entrer le departement :<br>
  <input type="text" name="departement"><br>
  <input type="submit" value="supprimer" ><br>
 </form>
  
<?php
//include "keyword.php";

$mysqli->close();

?>
<br>
</body>

</html>
