<div class="container">
<div class="col-12">
    <div class="row"  style="width:100%;margin-top:50px">
    <h2>Đơn hàng</h2>
<table class="table">
  <thead>
    <tr>

      <th scope="col">Tên xe</th>
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
      if ($xe['trangthai']==1) {
        $trangthai="Đang xử lí";
        $ctt=0;
      } else {
      if ($xe['trangthai']==0) {
        $trangthai="Chưa thanh toán";
        $ctt=1;
      } else {
        $trangthai="Đã xong";
        $ctt=0;
      }
      
      }?>
          <tr>
          
<td><?=$xe['Ten_xe']?></td>
<td><?=$ngaythue?></td>
<td><?=$ngaytra?></td>
<td><?=$trangthai?></td>
<td><?=number_format($gia,'0','.','.')?>VNĐ</td>
<?php
if ($ctt==1) {
  echo '<td><button class="btn btn-success"><a href="index.php?act=thanhtoan&id='.$xe['Id_donhang'].'&gia='.$gia.'">Thanh toán</a></button></td>';
}else{
  echo '<td></td>';
}
?>
</tr>
      
      <?php
     
    }
    ?>

  </tbody>
</table>
</div></div></div>