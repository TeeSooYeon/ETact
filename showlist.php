<?php
 $json = file_get_contents('http://rdapi.herokuapp.com/product/read.php');
 $data = json_decode($json,true);
 
 $search = $_POST['search'];
 
 if(isset($search)){
	$jsearch = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
	$res = json_decode($jsearch,true);

	$list = $res['records'];
	
 }else{
	$list = $data['records'];
 }
 
?>
<html>
<br/>
<br/>
<br/>
<div class="w3-container">
	<form action="index.php?page=list" method="POST">
	Search:<input type="text" name="search" placeholder="Search Product Name">
		<input class="w3-button w3-green" type="submit" name="submit" value="Search">
		<button type="submit" name="submit" class="w3-button w3-green"><i class='fas fa-search'></i></button>
	</form>
	<hr/>
  <table class="w3-table-all w3-hoverable">
    <tr class="w3-light-blue">
      <th>Name</th>
      <th>Category</th>
    </tr>
    <?php
      foreach($list as $result){
    ?>
    <tr>
     <td> <a href="index.php?page=show_product&id=<?php echo $result['id'];?>"> <?php echo $result['name']; ?> </a> </td>
      <td><?php echo $result['category_name'];?> </td>
    </tr>
    <?php
      }
    ?>
  </table>
 </div>
</html>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
