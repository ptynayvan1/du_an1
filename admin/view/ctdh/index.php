<form action="#" method="post">
      <div class="card mt-3">
        <div class="card-header">
          QUẢN LÝ ĐƠN HÀNG
        </div>
        <div class="card-body">
          <table class="table table-striped table">
              <thead>
                <tr class="p-3 mb-2 bg-danger text-white">
                  <th scope="col"></th>
                  <th scope="col">Mã đơn hàng</th>
                  <th scope="col">Tên Xe</th>
                  <th scope="col">Mã Xe</th>
                  <th scope="col">Họ tên</th>
                  <th scope="col">sdt</th>
                  <th scope="col">Ngày đặt</th>
                </tr>
              </thead>
        
             <?php
               foreach($ct as $oa){
                echo'
                <tr>
                <td></td>
                <td>'.$oa['Id_donhang'].'</td>
                <td>'.$oa['Ten_xe'].'</td>
                <td>'.$oa['Id_xe'].'</td>
                <td>'.$oa['ho_ten'].'</td>
                <td>'.$oa['sdt'].'</td>
                <td>'.$oa['Ngay_thue'].'</td>
              </tr>
       
                ';
              }
             ?> 
        
            </table>
          </div>
        
        </form>
      
