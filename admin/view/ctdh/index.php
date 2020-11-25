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
                  <th scope="col">Mã Xe</th>
                  <th scope="col">Số Lượng </th>
                </tr>
              </thead>
        
             <?php
               foreach($ct as $oa){
                echo'
                <tr>
                <td></td>
                <td>'.$oa['madh'].'</td>
                <td>'.$oa['masp'].'</td>
                <td>'.$oa['soluong'].'</td>
                <td></td>
              </tr>
       
                ';
              }
             ?> 
        
            </table>
          </div>
        
        </form>
      
