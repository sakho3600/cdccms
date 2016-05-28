<?php include('menu.php');
include ('files.php');
file_put_contents('./titre.dat',serialize($_POST['titre']));
?>
<em>Nouveau titre enregistré</em>
<?php include ('footer.php'); ?>
