<?php include('menu.php');
include ('files.php');

if (file_exists('./image.dat')){unlink (read('./image.dat'));}

?>
<em>Image suprimmée ! </em>
<?php include ('footer.php');?>
