<h3 align="center">ZENT GROUP - CREATE - USER</h3>
<hr>
    <form id="registrationForm" class="form-horizontal" action="index.php?mod=user&act=store" method="POST" role="form" data-toggle="validator">

        <div class="form-group">
            <label for="">NAME</label>
            <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="name">
        </div>
        <div class="form-group">
            <label for="">MOBILE</label>
            <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="mobile">
        </div>  
        <div class="form-group">
            <label for="">EMAIL</label>
            <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="email">
        </div>
        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" id="" placeholder="" name="avatar">
        </div>
        <div class="form-group">
            <label for="">PASSWORD</label>
            <input type="password" class="form-control" id="" placeholder="Nhập vào password" name="password">
        </div>
        <div class="form-group">
            <label for="">Giới tính </label><br>
            <input type="radio" name="gender" value="1"> Male
            <input type="radio" name="gender" value="0"> Female
            <input type="radio" name="gender" value="2"> Other
        </div>
         <div class="form-group">
            <label for="">ADDRESS</label>
            <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address">
        </div>
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6LcShikUAAAAAGJLJ5HiT0TYi53pJ1VLQHzJJwnq"></div>
            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
        </div>
    </form>