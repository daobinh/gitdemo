<h3 align="center">ZENT GROUP - UPDATE-POST</h3>
<hr>
<form action="index.php?mod=post&act_post=update" method="POST" role="form" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $data['id']  ?>">
    <select class="user_id form-control">
        <option value="<?php echo $users['id'] ?>"><?php echo $users['name'];?></option>
    </select>
    <!-- <div class="form-group">
        <label for="">USER_ID</label>
        <input type="text" class="form-control" id="" placeholder="Nhập userid" name="usser_id">
    </div> -->
    <div class="form-group">
        <label for="">TITLE</label>
        <input type="text" class="form-control" id="" placeholder="Nhập title" name="title" value="<?php echo $data['title']  ?>">
    </div>  
    
    <div class="form-group">
        <label for="">IMAGE</label>
        <input type="file" id="" placeholder="" name="image" value="<?php echo $data['image']  ?>">
    </div>
    <div class="form-group">
        <label for="">DESCRIPTION</label>
        <input type="text" class="form-control" id="" placeholder="Nhập vào description" name="description" value="<?php echo $data['description']  ?>">
    </div>
    <div class="form-group">
        <label for="">CONTENT</label>
        <textarea rows="4" cols="100" class="form-control" id="editor1" placeholder="Nhập vào content" name="content" ><?php echo $data['content'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="">UPDATE_AT</label>
        <div class='input-group date' id='datetimepicker1'>
            <input type='text' class="form-control" name="updated_at"/>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>
    <!-- <div class="g-recaptcha" data-sitekey="6LcShikUAAAAAGJLJ5HiT0TYi53pJ1VLQHzJJwnq"></div> -->
    <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
</form>