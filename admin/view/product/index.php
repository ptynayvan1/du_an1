
     
        <div class="card-header">
          QUẢN LÝ XE
        </div>
       
          <table class="table table-striped table">
              <thead>
                <tr class="p-6 mb-2 bg-danger text-white">
                  <th scope="col">Id</th>
                  <th scope="col">Tên loại</th>
                  <th scope="col">Địa chỉ</th>
                  <th scope="col">Năm sản xuất</th>
                  <th scope="col" class="text-center">Action</th>

                </tr>
              </thead>
          <tbody>
             <?php
               foreach($products as $kia){
                echo'
                <tr>   
                  <td>'.$kia['id_xe'].'</td>
                  <td>'.$kia['Ten_xe'].'</td>
                  <td>'.$kia['diachixe'].'</td>
                  <td>'.$kia['Namsx'].'</td>
                
                
                  <td class="text-center">
                    <a href="index.php?ctrl=product&action=delte&id='.$kia['id_xe'].'" class="btn btn-warning">Xoá</a>
                    <a href="index.php?ctrl=product&action=edit&id='.$kia['id_xe'].'" class="btn btn-primary">Sửa</a>
                    <a href="index.php?ctrl=product&action=detail&id='.$kia['id_xe'].'" class="btn btn-info">Xem chi tiết</a>
                  </td>
                  
              </tr>
       
                ';
              }
             ?> 
        </tbody>
            </table>
        
     
        
      
