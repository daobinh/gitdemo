<h2 align="center">DANH SÁCH NGƯỜI VIẾT</h2>
<table id="example" class="table table-striped table-bordere">
    <thead>
  		<tr>
            <th>ID</th>
            <th>NAME</th>
            <th>POST_ID</th>
            <th>CREATED_AT</th>
            <th>UPDATED_AT</th>
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
	            <td><?php echo $row['name']; ?></td>
	            <td><?php echo $row['post_id']; ?></td>
              <td><?php echo $row['created_at']; ?></td>
	            <td><?php echo $row['updated_at']; ?></td>
	            <td>
                <a href="index.php?mod=tags&act_tags=show&id=<?php echo $row['id'] ?>" class="btn btn-primary">Detail</a>
                <!-- <a href="update_users.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Update</a> -->
                <a href="index.php?mod=tags&act_tags=delete&id=<?php echo $row['id'] ?>" class="btn btn-warning" onclick="return confirm('Bạn có thực sự muốn xóa không?');">Delete</a>
	            </td>
      		</tr>
      		
        <?php } ?>
    </tbody>
</table>
