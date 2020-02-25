<?php
$load = (isset($_GET['page'])&& $_GET['page'] !='')? $_GET['page'] : '';
?>

<html>
	<head>
		<title>Api Utilization</title>
	</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
	<div class="w3-bar w3-blue w3-top">
			<li class="w3-bar-item w3-button"><a href="index.php?page=home">Home</a></li>
			<li class="w3-bar-item w3-button"><a href="index.php?page=list">Show Products</a></li>
			<li class="w3-bar-item w3-button"><a href="index.php?page=create">Create Product</a></li>
	</div>
<?php
	switch($load){
		case 'home':
			require_once('home.php');
		break;
		case 'list':
			require_once('showlist.php');
		break;
		case 'show_product':
			require_once('product_profile.php');
		break;	
		case 'create':
			require_once('form_create.php');
		break;
		case 'update':
			require_once('form_update.php');
		break;
		case 'delete':
			require_once('form_delete.php');
		break;
		default:
			require_once('home.php');
	}
?>
</html>
