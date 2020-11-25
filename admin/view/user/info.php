<?php
    echo '
        <p>ID: '.$u['Id_nguoidung'].'</p>
        <p>Họ tên: '.$u['ho_ten'].'</p>
        <p>Email: '.$u['email'].'</p>
        <p>SĐT: '.$u['sdt'].'</p>
        <p>Địa Chỉ: '.$u['dia_chi'].'</p>
        <p>CMND: '.$u['cmnd'].'</p>
    ';
?>
<table class="table table-striped table">
              <thead>
                <tr class="p-6 mb-2 bg-danger text-white">
                  <th scope="col">ID đơn hàng</th>
                  <th scope="col">Tên Xe</th>
                  <th scope="col">Ngày thuê</th>
                </tr>
              </thead>
          <tbody>
             <?php
               echo '
                <tr>   
                  <td>'.$u['Id_donhang'].'</td>
                  <td>'.$u['Ten_xe'].'</td>
                  <td>'.$u['Ngay_thue'].'</td>
                  
              </tr>
       
                ';
              
             ?> 
        </tbody>
            </table>
        