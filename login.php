<?php include('header.php');
//Voic le mot de passe admin, que vous devez modifier, entre les deux apostrophes

$mot_de_passe='changeme';

//C'est tout ce que vous avez à faire

if (!isset($_SESSION['loggued'])&&$mot_de_passe==='changeme'){
				echo '<body>Pour intitialiser votre installation, merci de modifier la variable $mot_de_passe dans /login.php avec un mot de passe connu de vous seul</body></html>';
		die();

}

if(!isset($_SESSION['loggued'])&&$mot_de_passe!==$_POST['password']){
		echo '<body>Erreur sur le mot de passe; merci de <a href="welcome.php">réessayer</a></body></html>';
		die();
}else {
	$_SESSION['loggued']=true;
	echo '<body>vous êtes maintenant connecté. <a href="admin.php">Aller au panneau d\'administration</a></body></html>';}


?>
