<?php include('menu.php');
include ('files.php');
file_put_contents('./contact.dat',serialize($_POST['contact']));
?>
<em>Nouveau champ contact enregistré</em>
<?php include ('footer.php'); ?>
