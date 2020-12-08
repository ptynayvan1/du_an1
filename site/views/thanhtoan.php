<style>
.h-st{
    color: black;
    font-weight: bold;
    font-size: 20px;

}
</style>
<div class="container mt-5">
    <form action="http://duan1.huy/site/views/vnpay_create_payment.php" method="post">
<div class="mb-3">
  <label for="exampleFormControlInput2" class="form-label">Họ tên</label>
  <input type="text" class="form-control" name="hoten" id="exampleFormControlInput1" placeholder="" value="<?=$ttcn['ho_ten']?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput3" class="form-label">Tên xe</label>
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
  <label for="exampleFormControlInput5" class="form-label">Tên xe</label>
  <input type="text" class="form-control" name="diachi" id="exampleFormControlInput1" placeholder="" value="<?=$donhang['Ten_xe']?>" readonly>
</div>
<div class="mb-3">
<input type="hidden" name="gia" value="<?=$gia?>">
<input type="hidden" name="id" value="<?=$id?>">
  <label for="exampleFormControlInput6" class="form-label h-st">Số tiền : <?=number_format($gia,'0','.','.')?>VNĐ</label>
</div>
<div class="form-group">
                        <label for="bank_code">Ngân hàng</label>
                        <select name="bank_code" id="bank_code" class="form-control">
                            <option value="">Không chọn</option>
                            <option value="NCB"> Ngan hang NCB</option>
                            <option value="AGRIBANK"> Ngan hang Agribank</option>
                            <option value="SCB"> Ngan hang SCB</option>
                            <option value="SACOMBANK">Ngan hang SacomBank</option>
                            <option value="EXIMBANK"> Ngan hang EximBank</option>
                            <option value="MSBANK"> Ngan hang MSBANK</option>
                            <option value="NAMABANK"> Ngan hang NamABank</option>
                            <option value="VNMART"> Vi dien tu VnMart</option>
                            <option value="VIETINBANK">Ngan hang Vietinbank</option>
                            <option value="VIETCOMBANK"> Ngan hang VCB</option>
                            <option value="HDBANK">Ngan hang HDBank</option>
                            <option value="DONGABANK"> Ngan hang Dong A</option>
                            <option value="TPBANK"> Ngân hàng TPBank</option>
                            <option value="OJB"> Ngân hàng OceanBank</option>
                            <option value="BIDV"> Ngân hàng BIDV</option>
                            <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                            <option value="VPBANK"> Ngan hang VPBank</option>
                            <option value="MBBANK"> Ngan hang MBBank</option>
                            <option value="ACB"> Ngan hang ACB</option>
                            <option value="OCB"> Ngan hang OCB</option>
                            <option value="IVB"> Ngan hang IVB</option>
                            <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                        </select>
                    </div>
<div class="mb-3 " >
  <input type="submit" class="btn col-2  bg-warning" id="exampleFormControlInput1" placeholder="" value="Thanh toán">
</div>
</form>
</div>