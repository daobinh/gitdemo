<h3 align="center">UPDATE NGƯỜI DÙNG</h3>
<hr>
    <form action="index.php?mod=user&act=update" method="POST" role="form">
		<input type="hidden" name="id" value="<?php echo $user['id']  ?>">
        <div class="form-group">
            <label for="">NAME</label>
            <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="name" value="<?php echo $user['name']  ?>">
        </div>
        <div class="form-group">
            <label for="">MOBILE</label>
            <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="mobile" value="<?php echo $user['mobile']  ?>">
        </div>  
        <div class="form-group">
            <label for="">EMAIL</label>
            <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="email" value="<?php echo $user['email']  ?>">
        </div>
        <div class="form-group">
            <label for="">PASSWORD</label>
            <input type="password" class="form-control" id="" placeholder="Nhập vào password" name="password">
        </div>
        <div class="form-group">
            <label for="">Giới tính </label><br>
            <input type="radio" name="gender" value="1" <?php echo $gender_male ?> > Male
            <input type="radio" name="gender" value="0" <?php echo $gender_female ?> > Female
            <input type="radio" name="gender" value="2" <?php echo $gender_other ?> > Other
        </div>
         <div class="form-group">
            <label for="">ADDRESS</label>
            <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address" value="<?php echo $user['address']  ?>">
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
    </form>