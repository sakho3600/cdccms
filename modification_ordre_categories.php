<?php include ('menu.php');
include ('files.php');

if (isset($_GET['action'])){
	$dat=Array();
if ($_GET['target']==='cat'){
		$dat=unserialize(file_get_contents('categories.dat'));
		$record='categories.dat';
		
	}
	else {echo 'ERROR';die();}
	
	
	if ($_GET['action']==='up'&&is_numeric($_GET['index'])) {
			
		$debut=array_slice($dat, 0, $_GET['index']-1);
		
		$mover=array_slice($dat, $_GET['index'], 1);
		
		$flip=array_slice($dat, $_GET['index']-1, 1);
		
		if ($_GET['index']==count ($dat)-1){
			$after=array();
		} else {
		
		
			$after=array_slice($dat, $_GET['index']+1, count($dat)- $_GET['index']-1);
		
		}
		
		if (count($debut)==0){
			
			$temp=array();
			
			}else {
		
			$temp=$debut;
		
		}
		
		$temp = array_merge ($temp, $mover);
		
		
		$temp = array_merge ($temp, $flip);
		
		if (count($after)!=0) { 
		
			$temp = array_merge ($temp, $after);
		
		}
	
		$dat=$temp;
		
		
				
	}
	else if ($_GET['action']==='down'&&is_numeric($_GET['index'])) {
		
		if ($_GET['index']==0){
			$debut=array();
		} else {
		
			$debut=array_slice($dat, 0, $_GET['index']);
		}
		$mover=array_slice($dat, $_GET['index'], 1);
		
		$flip=array_slice($dat, $_GET['index']+1, 1);
		
		$after=array_slice($dat, $_GET['index']+2, count($dat)- $_GET['index']-1);
		
		
		if (count($debut)==0){
			
			$temp=array();
			
			}else {
		
			$temp=$debut;
		
		}
		
		$temp = array_merge ($temp, $flip);
		
		
		$temp = array_merge ($temp, $mover);
		
		
		
		if (count($after)!=0) { 
		
			$temp = array_merge ($temp, $after);
		
		}
		$dat=$temp;
		
		
	}
	else {echo 'ERROR';die();}
	file_put_contents($record, serialize($dat));


}


echo '<h1>Modification de l\'ordre d\'affichage des catégories</h1><h2>L\'ordre d\'affichage des catégories primera toujours sur l\'ordre individuel des produits</h2><ol>';
	if (file_exists('categories.dat')) {
		$prods=unserialize(file_get_contents('categories.dat'));
			echo '<ol>';
			$j=0;
		
			foreach ($prods as $prod) {
			
				
				?>
 <li>Produit : <em><?php echo htmlspecialchars($prod['nom']);?></em>
    <?php echo htmlspecialchars($prod['description']);?>
      				<?php
				
				if ($j!==0) {
					echo '<a href="?action=up&target=cat&index='.$j.'">Monter</a> ';
				}
				if ($j!=count($prods)-1) {
					echo '<a href="?action=down&target=cat&index='.$j.'">Descendre</a>';
				}

				
				
				echo '</li>';
				$j++;
				echo '';
			}
			echo '</ol>';
			
		
}
else {echo 'Merci de créer tout d\'abord de nouveaux produits';}
	

include ('footer.php');
?>
