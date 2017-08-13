
<h2 align="center">DANH SÁCH NGƯỜI DÙNG</h2>
<a href="index.php?mol=user&act=create" class="btn btn-primary btn-add">Thêm mới</a>
<table id="example" class="table table-striped table-bordered">
    <thead>
  		<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
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
	            <td><?php echo $row['email']; ?></td>
	            <td><?php echo $row['gender']; ?></td>
	            <td>
                <a href="index.php?mod=user&act=show&id=<?php echo $row['id'] ?>" class="btn btn-primary">Detail</a>
                <a href="index.php?mod=user&act=edit&id=<?php echo $row['id'] ?>" class="btn btn-success">Update</a>
                <a href="index.php?mod=user&act=delete&id=<?php echo $row['id'] ?>" class="btn btn-warning" onclick="return confirm('Bạn có thực sự muốn xóa không?');">Delete</a>
	            </td>
      		</tr>
        <?php } ?>
    </tbody>
</table>
