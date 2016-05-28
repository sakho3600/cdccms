<?php include ('menu.php');
include ('files.php');
$oldname=$_POST['oldname'];
$oldcat=$_POST['oldcat'];
$nom=$_POST['nom'];
$categorie=$_POST['categorie'];
$description=$_POST['description'];
$prix=$_POST['prix'];


$prods=unserialize(file_get_contents('produits.dat'));
$dat=Array();
foreach ($prods as $prod){
	if ($prod['categorie']===$oldcat&&$prod['nom']===$oldname){
		$prod['nom']=$nom;
		$prod['categorie']=$categorie;
		$prod['description']=$description;
		$prod['prix']=$prix;
	}
	array_push($dat, $prod);
}

file_put_contents('produits.dat', serialize($dat));

echo 'Modification enregistrée. <script>window.location.href=\'./modification_rapide.php\'</script>';
include ('footer.php');
?>
