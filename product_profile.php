<?php
 $id = $_GET['id'];
 $json = file_get_contents('http://rdapi.herokuapp.com/product/read.php&id='.$id);
 $data = json_decode($json,true);
 
 $list = $data['records'];
?>
<html>
  <table>
    <tr>
      <th>Name</th>
      <th>Price</th>
      <th>Category</th>
      <th>Description</th>
    </tr>
    <?php
      foreach($list as $result){
    ?>
    <tr>
      <td> <?php echo $result['name']; ?> </td>
      <td><?php echo $result['price']; ?> </td>
      <td><?php echo $result['description']; ?> </td>
      <td><?php echo $result['category_name'];?> </td>
    </tr>
    <?php
      }
    ?>
  </table>
</html>
