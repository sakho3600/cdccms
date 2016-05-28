<?php include('menu.php');
include ('files.php');
file_put_contents('./livraison.dat',serialize($_POST['livraison']));
?>
<em>Nouvelle zone de livraison enregistrée</em>
<?php include ('footer.php'); ?>
