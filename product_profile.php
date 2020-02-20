<?php
 $id = $_GET['id'];
 $json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
 $data = json_decode($json,true);
 $details = array('records' => $data);
 $result = $details['records'];
?>
<html>
  <table>
    <tr>
      <th>Name</th>
      <th>Price</th>
      <th>Category</th>
      <th>Description</th>
    </tr>
    <tr>
      <td> <?php echo $result['name']; ?> </td>
      <td><?php echo $result['price']; ?> </td>
      <td><?php echo $result['description']; ?> </td>
      <td><?php echo $result['category_name'];?> </td>
   </tr>
  </table>
</html>
