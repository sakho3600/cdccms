<?php include('menu.php');
include ('files.php');
$dat['lon']=$_POST['lon'];
$dat['lat']=$_POST['lat'];
file_put_contents('./gps.dat',serialize($dat));
?>
<em>Nouvelles coordonnées GPS enregistrées</em>
<?php include ('footer.php'); ?>
