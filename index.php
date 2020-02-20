<?php
$load = (isset($_GET['page'])&& $_GET['page'] !='')? $_GET['page'] : '';
?>

<html>
	<ul>
		<li><a href="index.php?page=list">Show</a></li>
		<li><a href="index.php?page=create">Create</a></li>
		<li><a href="index.php?page=update">Delete</a></li>
		<li><a href="index.php?page=delete">Update</a></li>
	</ul>
<?php
	switch($load){
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
	}
?>
</html>
