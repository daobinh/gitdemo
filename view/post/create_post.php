<h3 align="center">ZENT GROUP - CREATE - POST</h3>
<hr>
<form id="registrationForm"  class="form-horizontal" action="index.php?mod=post&act_post=store" method="POST" role="form" enctype="multipart/form-data">
    <!-- <div class="form-group">
       <label for="">NAME</label>
        <select class="user_id form-control" >
                <option value="<?php echo $user['id'] ?>"><?php echo $users['name'];?></option>
        </select> 
    </div> -->
    <div class="form-group">
        <label for="">NAME</label>
        <input type="text" class="form-control"  name="name" value="<?php echo $users['name']; ?>" readonly>
    </div>  
    
    <!-- <div class="form-group">
        <label for="">USER_ID</label>
        <input type="text" class="form-control" id="" placeholder="Nhập userid" name="usser_id">
    </div> -->
    <div class="form-group">
        <label for="">TITLE</label>
        <input type="text" class="form-control" id="" placeholder="Nhập title" name="title">
    </div>  
    
    <div class="form-group">
        <label for="">IMAGE</label>
        <input type="file" id="" placeholder="" name="image">
    </div>
    <div class="form-group">
        <label for="">DESCRIPTION</label>
        <input type="text" class="form-control" id="" placeholder="Nhập vào description" name="description">
    </div>
    <div class="form-group">
        <label for="">CONTENT</label>
        <textarea rows="4" cols="100" class="form-control" id="editor1" placeholder="Nhập vào content" name="content"></textarea>
        <!-- <input type="text" class="form-control" id="" placeholder="Nhập vào content" name="content"> -->
    </div>
    <div class="form-group">
        <label for="">Created_AT</label>
            <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" name="created_at" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>

    </div>
    <div class="form-group">
        <div class="g-recaptcha" data-sitekey="6LcShikUAAAAAGJLJ5HiT0TYi53pJ1VLQHzJJwnq"></div>
        <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
    </div>
</form>