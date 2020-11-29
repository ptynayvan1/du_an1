<form action="#" method="post">
      <div class="card mt-3">
        <div class="card-header">
          QUẢN LÝ LOẠI HÀNG
        </div>
        <div class="card-body">
          <table class="table table-striped table">
              <thead>
                <tr class="p-3 mb-2 bg-danger text-white"> 
                  <th scope="col">Tên Xe</th>
                  <th scope="col">Tên User</th>
                  <th scope="col">Cmt</th>
                  <th scope="col">Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
             <?php
               foreach($cmt as $conn){
                echo'
                <tr>
                  <td>'.$conn['Ten_xe'].'</td>
                  <td>'.$conn['ho_ten'].'</td>
                  <td>'.$conn['Binh_luan'].'</td>
                  <td>'.$conn['Thoigian_binhluan'].'</td>
                  <td>
                    <a href="index.php?ctrl=binhluan&action=delete&id='.$conn['Id_binhluan'].'" class="btn btn-warning">Xoá</a>
                  </td>
               
              </tr>
       
                ';
              }
             ?> 
        
            </table>
          </div>
      
        </form>
      
