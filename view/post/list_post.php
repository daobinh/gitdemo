
<h2 align="center">DANH SÁCH BÀI VIẾT</h2>
<a href="index.php?mod=post&act_post=create" class="btn btn-primary btn-add">Thêm mới</a>
<table id="example" class="table table-striped table-bordere">
    <thead>
  		<tr>
            <th>ID</th>
            <th>USER_ID</th>
            <th>TITLE</th>
            <th>DESCRIPTTION</th>
            <th>CONTENT</th>
            <th>IMAGE</th>
            <th>Action</th>
      	</tr>
    </thead>
    <tbody>
        <?php 
            //vòng lặp để hiện thị danh sách
            foreach ($data as $row) {
              
        ?>
  			<tr>
	            <td><?php echo $row['id']; ?></td>
	            <td><?php echo $row['user_id']; ?></td>
	            <td><?php echo $row['title']; ?></td>
              <td><?php echo $row['description']; ?></td>
              <td><?php echo $row['content']; ?></td>
	            <td><img height="100px" width="100px" src="<?php echo $row['image'] ; ?>"></td>
	            <td>
                <a href="index.php?mod=post&act_post=show&id=<?php echo $row['id'] ?>" class="btn btn-primary">Detail</a>
                <a href="index.php?mod=post&act_post=edit&id=<?php echo $row['id'] ?>" class="btn btn-success">Update</a>
                <a href="index.php?mod=post&act_post=delete&id=<?php echo $row['id'] ?>" class="btn btn-warning" onclick="return confirm('Bạn có thực sự muốn xóa không?');">Delete</a>
	            </td>
      		</tr>
      		
        <?php } ?>
    </tbody>
</table>
