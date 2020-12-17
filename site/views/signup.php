<?php if (isset($a)) {
    echo '<script>
    alert("Vui lòng nhập đủ thông tin")
</script>';
}?>

<div class="container">
  <div class="row">
<form class="col-12" method="post" action="index.php?act=signup_">
    <h3 style="margin-top: 15px;margin-bottom:30px">Đăng kí tài khoản</h3>
  <div class="form-group">
    <label for="exampleInputEmail1">Họ tên</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="hoten" placeholder="Họ và tên" pattern="[a-z]{1,20}" title="nhập các kí tự 'a-z'">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Email" pattern="{1,20}[@]" title="nhập các kí tự 'a-z'">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Số điện thoại</label>
    <input type="number" class="form-control" id="exampleInputPassword2" name="sdt" placeholder="Số điện thoại">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword3">Địa chỉ</label>
    <input type="text" class="form-control" id="exampleInputPassword3" name="dc" placeholder="Địa chỉ">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Thành phố</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="tp" placeholder="Thành phố">
  </div> 

  <div class="form-group">
    <label for="exampleInputPassword1">Quốc gia</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="qg" placeholder="Quốc gia">
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Chứng minh nhân dân</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="cmnd" placeholder="Chứng minh nhân dân" pattern="[0-9]{1,9}" title="nhập Số Và Chỉ nhập 9 số">
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Tên đăng nhập</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="tendn" placeholder="Tên đăng nhập"pattern="[a-z]{1,20}" title="nhập các kí tự 'a-z'">
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Mật khẩu</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="matkhau" placeholder="Mật khẩu" pattern="[a-z][0-9]{6,15}" title="nhập các kí tự '0-9' 'a-z' và từ 6-15 số">
  </div>
  <button type="submit" class="btn btn-primary">Đăng ký</button>
</form>
</div>
</div>