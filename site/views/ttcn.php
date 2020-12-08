<div class="container mt-5">
    <form action="index.php?act=capnhat" method="post">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tên đăng nhập</label>
  <input type="text" class="form-control" name="tendn" id="exampleFormControlInput1" placeholder="" value="<?=$ttcn['ten_dangnhap']?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput2" class="form-label">Họ tên</label>
  <input type="text" class="form-control" name="hoten" id="exampleFormControlInput1" placeholder="" value="<?=$ttcn['ho_ten']?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput3" class="form-label">Email</label>
  <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="" value="<?=$ttcn['email']?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput4" class="form-label">Số điện thoại</label>
  <input type="number" class="form-control" name="sdt" id="exampleFormControlInput1" placeholder="" value="<?=$ttcn['sdt']?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput5" class="form-label">Thành phố</label>
  <input type="text" class="form-control" name="tp" id="exampleFormControlInput1" placeholder="" value="<?=$ttcn['thanh_pho']?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput5" class="form-label">Địa chỉ</label>
  <input type="text" class="form-control" name="diachi" id="exampleFormControlInput1" placeholder="" value="<?=$ttcn['dia_chi']?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput6" class="form-label">Chứng minh nhân dân</label>
  <input type="number" class="form-control" name="cmnd" id="exampleFormControlInput1" placeholder="" value="<?=$ttcn['cmnd']?>">
</div>
<div class="mb-3 " >
  <input type="submit" class="btn col-2  bg-warning" id="exampleFormControlInput1" placeholder="" value="Cập nhật">
</div>
</form>
</div>