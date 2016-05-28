<?php include('menu.php');
include ('files.php');
$dat['horaires']=$_POST['horaires'];
$dat['localisation']=$_POST['localisation'];
file_put_contents('./description.dat',serialize($dat));
?>
<em>Nouvelle description enregistrée</em>
<?php include ('footer.php'); ?>
