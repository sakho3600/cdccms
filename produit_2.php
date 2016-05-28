<?php include('menu.php');
include('files.php');


$data=array('nom' => $_POST['nom'],'description'  => $_POST['description'], 'categorie' => $_POST['categorie'], 'prix' => $_POST['prix']);

if (file_exists('produits.dat')) {$dat=unserialize(file_get_contents('produits.dat'));
									array_push($dat,$data);}else{$dat=array($data);}

file_put_contents('produits.dat', serialize($dat));


?>
<h3>Article crée</h3>
<?php include ('footer.php'); ?>
