<style>
  .btn a{
    color:white;
  }
  .btn {
    color:white;
  }
</style>
<div class="container">
<div class="col-12">
    <div class="row"  style="width:100%;margin-top:50px">
    <h2>Đơn hàng</h2>
<table class="table">
  <thead>
    <tr>

      <th scope="col">Tên xe</th>
      <th scope="col">Ngày đặt</th>
      <th scope="col">Ngày thuê</th>
      <th scope="col">Ngày trả</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($xedt as $xe) {
      $first_date = strtotime($xe['ngay_tra']);
      $second_date = strtotime($xe['Ngay_thue']);
      $datediff = abs($first_date - $second_date);
      $ngay=floor($datediff/(60*60*24));
      $gia=$xe['Gia_thue']*$ngay;
      $ngaytra=date("d-m-Y",strtotime($xe['ngay_tra']));
      $ngaythue=date("d-m-Y",strtotime($xe['Ngay_thue']));
    //  switch ($xe['trang_thai']) {
    //   case '0':
    //     $trangthai="Chờ xác nhận";
    //     $ctt = 0;
    //     break;
    //   case '1':
    //     $trangthai="Chưa thanh toán";
    //     $ctt=1;
    //     break;
    //   case '2':
    //     $trangthai="Đã giao hàng";
    //     break;
    //   case '3':
    //     $trangthai="Hết hạn";
    //     $ctt=2;
    //     break;
    //   case '4':
    //       $trangthai="Đã thanh toán";
    //       $ctt=4;
    //       break;
    //   case '5':
    //       $trangthai="Đơn hàng bị hủy";
    //       $ctt=5;
    //   break;
    //   default:
    //     $trangthai="Không xác định";
    //     break;
    //  }
     ?>
          <tr>
          
<td><?=$xe['Ten_xe']?></td>
<td><?=$xe['ngay_dat']?></td>
<td><?=$ngaythue?></td>
<td><?=$ngaytra?></td>
<td><?=number_format($gia,'0','.','.')?>VNĐ</td>
<?php
if ($xe['trang_thai']=='1') {
  echo '<td><button class="btn btn-success"><a href="index.php?act=thanhtoan1&id='.$xe['Id_donhang'].'&gia='.$gia.'">Thanh toán</a></button></td>';
}else if($xe['trang_thai']=='0'){
  echo '<td><a  href="#"  class="btn btn-danger btn-xs" disabled>Chờ xác nhận</a></td>';
}else if($xe['trang_thai']=='4'){
  echo '<td><a  href="#"  class="btn btn-success btn-xs" disabled>Thanh toán thành công</a></td>';
}else if($xe['trang_thai']=='3'){
  echo '<td><a  href="#"  class="btn btn-danger btn-xs" disabled>Đơn hàng hết hạn</a></td>';
}else if($xe['trang_thai']=='5'){
  echo '<td><a  href="#"  class="btn btn-danger btn-xs" disabled>Đơn hàng bị hủy</a></td>';
}else {
  echo '<td><a  href="#"  class="btn btn-danger btn-xs" disabled>Không xác định</a></td>';
}
?>
</tr>
      
      <?php
     
    }
    ?>

  </tbody>
</table>
</div></div></div>