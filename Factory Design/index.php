<?php include 'inc/header.php';?>

<?php 
	
	spl_autoload_register(function($class_name){
		include $class_name.".php";
	});

	$db = new Database();
	$db->setDriver("mysql");
	$db->connectionDB("host","db","user","pass");

?>
 
<?php include 'inc/footer.php';?>