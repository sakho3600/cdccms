<?php include('menu.php');
include('files.php');


$data=array('nom' => $_POST['categorie_nom'],'description'  => $_POST['categorie_description']);

if (file_exists('categories.dat')) {$dat=unserialize(file_get_contents('categories.dat'));array_push($dat,$data);}else{$dat=array($data);}

file_put_contents('categories.dat', serialize($dat));


?>
<h3>Catégorie crée</h3>
<?php include ('footer.php'); ?>
