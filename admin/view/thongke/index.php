<form action="#" method="post">
      <div class="card mt-3">
        <div class="card-header">
          Thống kê loại xe
        </div>
        <div class="card-body">
          <table class="table table-striped table">
              <thead>
                <tr class="p-3 mb-2 bg-danger text-white">
                  <th scope="col">Hãng xe</th>
                  <th scope="col">ToTal</th>
                </tr>
              </thead>
              <tbody>
              <?php
                foreach($items as $ite){
                  echo'
                  <tr>
                  <td>'.$ite['Tenhang'].'</td>
                  <td>'.$ite['tongso'].'</td>
                </tr>
                  ';
                }
              
              ?>
                    
                     
              </tbody>
            </table>
          </div>
        <div class="card-footer">
            <a href="index.php?ctrl=thongke&action=chart" class="btn btn-danger">Xem biểu đồ</a>
         
        </div>
        
      </div>

</form>

<form action="#" method="post">
      <div class="card mt-3">
        <div class="card-header">
          Thống Kê Xe
        </div>
        <div class="card-body">
          <table class="table table-striped table">
              <thead>
                <tr class="p-3 mb-2 bg-danger text-white">
                  <th scope="col">Mã xe</th>
                  <th scope="col">Tên Xe</th>
                  <th scope="col">Số lượng</th>
                </tr>
              </thead>
              <tbody>
              <?php
                foreach($xe as $x){
                  echo'
                  <tr>
                  <td>'.$x['id_xe'].'</td>
                  <td>'.$x['Ten_xe'].'</td>
                  <td>'.$x['soLuong'].'</td>
                </tr>
                  ';
                }
              
              ?>
                    
                     
              </tbody>
            </table>
          </div>
        <div class="card-footer">
            <a href="index.php?ctrl=thongke&action=chartxe" class="btn btn-danger">Xem biểu đồ</a>
         
        </div>
        
      </div>

</form>