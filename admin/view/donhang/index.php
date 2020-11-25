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
                 echo '
                    <tr>
                    
                      <td>'.$od['Id_donhang'].'</td>
                      <td>'.$od['Id_nguoidung'].'</td>
                      <td>'.$od['Id_xe'].'</td>
                      <td>'.$od['Ngay_thue'].'</td>
                      <td>padding</td>
                      <td class="text-center">
                      <a href="" class="btn btn-danger">cancel</a>
                      <a href="" class="btn btn-success">confirm</a>
                      <a href="index.php?ctrl=ctdh&action=chitietdonhang&id='.$od['Id_donhang'].'" class="btn btn-info">Chi tiết đơn hàng</a>
                      </td>
                    </tr>
                 ';
               }
             ?> 
        
            </table>
          </div>
     
        </form>
      
