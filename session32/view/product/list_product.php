<h1>Products page here</h1>
<table class="table table-bordered">
  <tr>
    <th style="width: 10px">#</th>
    <th>title</th>
    <th>description</th>
    <th>Image</th>
    <th>price</th>
  </tr>
 <?php 
 if ($productList->num_rows > 0) {
  while($row = $productList->fetch_assoc()) {
    $id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['title']?></td>
      <td>
        <?php echo $row['description']?>
      </td>
      <td><img src="uploads/<?php echo $row['image']?>" alt="image" class="avatar_user"></td>
       <td><?php echo $row['created']?></td>
       <td>
        <?php echo $row['price']?>
      </td>
      <td><a href="">Edit</a> | <a href="">Delete</a></td>
    </tr>
  <?php 
    }
  } else {?>
  <tr>
    <td colspan="4">Khong co san pham nao</td>
  </tr>
  <?php }?>
</table>