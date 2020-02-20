<?php
 $json = file_get_content('http://rdapi.herokuapp.com/product/read.php');
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
        $name = $result['name'];
        $price = $result['price'];
        $desc = $result['description'];
        $cat = $result['category_name'];
    ?>
    <tr>
      <td> <?php echo $name ;?> </td>
      <td><?php echo $price ;?></td>
      <td><?php echo $cat ;?></td>
      <td><?php echo $desc ;?></td>
    </tr>
    <?php
      }
    ?>
  </table>
</html>
