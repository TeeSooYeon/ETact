<?php
 $id = $_GET['id'];
 $json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
 $data = json_decode($json,true);
 $details = array('records' => $data);
 $result = $details['records'];
?>
<html>
<br/>
<br/>
<br/>
<br/>
<div class="w3-container">
	<div class="w3-card-4">
		<header class="w3-container w3-light-blue">
			<h1><b><?php echo $result['name']; ?></b></h1>
		</header>
	<div class="w3-container w3-padding-large">
		<p> <b>Price:  </b><?php echo $result['price']; ?></p>
		<p>	<b>Description:  </b><?php echo $result['description']; ?> </p>
		<p>	<b>Category:  </b><?php echo $result['category_name'];?> </p>
	</div>
		<footer class="w3-container w3-light-blue w3-padding-small">
			<a class="w3-button w3-round-large w3-yellow w3-margin" href="form_update.php?id=<?php echo $id ?>">Update/Edit</a>
			<a class="w3-button w3-round-large w3-red w3-margin" href="pro_delete.php?id=<?php echo $id ?>">Delete/Trash</a>
		</footer>
	</div>
  </div>
</html>
