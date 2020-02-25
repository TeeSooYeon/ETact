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
    <table class="w3-table-all w3-hoverable">
    <tr class="w3-light-blue">
      <th>Name</th>
      <th>Price</th>
      <th>Description</th>
      <th>Category</th>
    </tr>
    <tr>
      <td> <?php echo $result['name']; ?> </td>
      <td><?php echo $result['price']; ?> </td>
      <td><?php echo $result['description']; ?> </td>
      <td><?php echo $result['category_name'];?> </td>
   </tr>
  </table>
  <br/>
  <a class="w3-button w3-round-large w3-yellow" href="pro_update.php?id=<?php echo $id ?>">Update/Edit</a>
  <br/>
  <br/>
  <br/>
  <a class="w3-button w3-round-large w3-red" href="pro_delete.php?id=<?php echo $id ?>">Delete/Trash</a>
  </div>
</html>
