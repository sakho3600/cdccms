<?php include('menu.php');
include ('files.php');
file_put_contents('./title.dat',serialize($_POST['title']));
?>
<em>Nouveau titre enregistré</em>
<?php include ('footer.php'); ?>
