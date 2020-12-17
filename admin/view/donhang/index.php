<form action="#" method="post">
      <div class="card mt-3">
        <div class="card-header">
          QUẢN LÝ ĐƠN HÀNG
        </div>
        <div class="card-body">
          <table class="table table-striped table">
              <thead>
                <tr class="p-3 mb-2 bg-danger text-white">
                  
                  <th scope="col">Mã Đơn Hàng</th>
                  <th scope="col">Mã Khách Hàng</th>
                  <th scope="col">Mã Xe</th>
                  <th scope="col">Ngày Thuê</th>
                  <th scope="col">Trạng Thái</th>
                  <th scope="col" class="text-center">Action</th>
                  
                </tr>
              </thead>
        
              <?php
               foreach($order as $od){
              ?>
            <?php
              echo '<tr>';
              echo '<td>'.$od['Id_donhang'].'</td>';
              echo '<td>'.$od['Id_nguoidung'].'</td>';
              echo '<td>'.$od['Id_xe'].'</td>';
              echo '<td>'.$od['Ngay_thue'].'</td>';
              echo '<td>'.$od['trang_thai'].'</td>';
              if($od['trang_thai'] == '0'){
                echo '<td style="text-align:center;"><a href="index.php?ctrl=donhang&action=cancel&id='.$od['Id_donhang'].'" class="btn btn-danger">cancel</a>
                  <a href="index.php?ctrl=donhang&action=confirm&id='.$od['Id_donhang'].'" class="btn btn-success">confirm</a>
                  <a href="index.php?ctrl=ctdh&action=chitietdonhang&id='.$od['Id_donhang'].'" class="btn btn-info">Chi tiết đơn hàng</a>
                  </td>
                ';
              }elseif($od['trang_thai'] == '1'){
                echo '<td style="text-align:center;"><a  href="#"  class="btn btn-danger btn-xs" disabled>Đơn Hàng được xác nhận</a>
                <a href="index.php?ctrl=ctdh&action=chitietdonhang&id='.$od['Id_donhang'].'" class="btn btn-info">Chi tiết đơn hàng</a>
                </td>';
              }
              elseif($od['trang_thai'] == '4'){
                echo '<td style="text-align:center;"><a  href="#"  class="btn btn-success btn-xs" disabled>Đơn hàng đã thanh toán </a>
                <a href="index.php?ctrl=ctdh&action=chitietdonhang&id='.$od['Id_donhang'].'" class="btn btn-info">Chi tiết đơn hàng</a>
                </td>';
              }elseif($od['trang_thai'] == '3'){
                echo '<td style="text-align:center;"><a  href="#"  class="btn btn-danger btn-xs" disabled>Đơn hàng hết hạn </a>
                <a href="index.php?ctrl=ctdh&action=chitietdonhang&id='.$od['Id_donhang'].'" class="btn btn-info">Chi tiết đơn hàng</a>
                </td>';
              }
              elseif($od['trang_thai'] == '5'){
                echo '<td style="text-align:center;"><a  href="#"  class="btn btn-danger btn-xs" disabled>Đơn hàng đã hủy </a>
                <a href="index.php?ctrl=ctdh&action=chitietdonhang&id='.$od['Id_donhang'].'" class="btn btn-info">Chi tiết đơn hàng</a>
                </td>';
              }
              else{
                echo '<td style="text-align:center;">
                        <a href="#"  class="btn btn-success btn-xs" disabled>Confirmed</a>
                        <a href="index.php?ctrl=ctdh&action=chitietdonhang&id='.$od['Id_donhang'].'" class="btn btn-info">Chi tiết đơn hàng</a>
                </td>';
              }
            //   <tr>
            //   <td>'.$od['Id_donhang'].'</td>
            //   <td>'.$od['Id_nguoidung'].'</td>
            //   <td>'.$od['Id_xe'].'</td>
            //   <td>'.$od['Ngay_thue'].'</td>
            //   <td>'.$od['trang_thai'].'</td>
            //   <td class="text-center">
            //   if('.$tt.' == 'padding'){
            //     <a href="index.php?ctrl=donhang&action=cancel&id='.$od['Id_donhang'].'" class="btn btn-danger">cancel</a>
            //     <a href="index.php?ctrl=donhang&action=confirm&id='.$od['Id_donhang'].'" class="btn btn-success">confirm</a>
            //   }elseif('.$od['trang_thai'].' == 'Canceled'){
            //     <a  href="#"  class="btn btn-danger btn-xs" disabled>Cancelled</a>
            //   }else{
            //     <a href="#"  class="btn btn-success btn-xs" disabled>Confirmed</a>
            //   }
            //   </td>
            // </tr>
               
            }
             ?>
            </table>
          </div>
     
        </form>
       
