
     
        <div class="card-header">
          QUẢN LÝ HÃNG XE
        </div>
        
          <table class="table table-striped table">
              <thead>
                <tr class="p-3 mb-2 bg-danger text-white">
                  <th scope="col">Mã loại</th>
                  <th scope="col">Tên loại</th>
                  <th scope="col">Logo</th>
                  <th scope="col" class="text-center">Action</th>
                </tr>
              </thead>
        
             <?php
               foreach($catalogs as $cat){
                echo'
                <tr>
                <td>'.$cat['Id_hangxe'].'</td>
                <td>'.$cat['Tenhang'].'</td>
                <td>'.$cat['Logo'].'</td>
                <td class="text-center">
                  <a href="index.php?ctrl=catalog&action=delte&id='.$cat['Id_hangxe'].'" class="btn btn-warning">Xoá</a>
                  <a href="index.php?ctrl=catalog&action=edit&id='.$cat['Id_hangxe'].'" class="btn btn-info">Sửa</a>
                </td>
              </tr>
       
                ';
              }
             ?> 
        
            </table>
            <a href="index.php?ctrl=catalog&action=addnew">Thêm Hãng Xe</a>
      
      
      
