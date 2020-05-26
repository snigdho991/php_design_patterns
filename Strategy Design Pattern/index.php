<?php include "inc/header.php"; ?>


<?php 
	
	spl_autoload_register(function($name){
		
		include $name.".php";
	});
	
	$user   = new User();
	$update = $user->getUpdate();

	switch ($update) {

		/*
		case 'msg':
			$objSend = new SendMsg();
			break;
		*/

		case 'email':
			$objSend = new SendEmail();
			break;

		case 'fax':
			$objSend = new SendFax();
			break;
		
		case 'sms':
			$objSend = new SendSms();
			break;
	}

	$objSend->notification();
		
?>

		
		
<?php include "inc/footer.php"; ?>