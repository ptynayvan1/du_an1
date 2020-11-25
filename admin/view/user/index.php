<form action="#" method="post">
      <div class="card mt-3">
        <div class="card-header">
          User
        </div>
        <div class="card-body">
          <table class="table table-striped table">
              <thead>
                <tr class="p-3 mb-2 bg-danger text-white">
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Address</th>
                  <th scope="col">CMND</th>
                  <th scope="col" class="text-center">Action</th>
                </tr>
              </thead>
              
              <tbody>
              <?php
                foreach($user as $u){
                  echo'
                  <tr>
                  <td>'.$u['ho_ten'].'</td>
                  <td>'.$u['email'].'</td>
                  <td>'.$u['sdt'].'</td>
                  <td>'.$u['dia_chi'].'</td>
                  <td>'.$u['cmnd'].'</td>
                  <td class="text-center">
                    <a class="btn btn-danger" href="index.php?ctrl=user&action=delete&id='.$u['Id_nguoidung'].'">Xoa</a>
                    <a class="btn btn-info" href="index.php?ctrl=user&action=info&id='.$u['Id_nguoidung'].'">Info</a>
                  </td>
                </tr>
                  ';
                }
              
              ?>
                    
                     
              </tbody>
            </table>
          </div>
        
      </div>

</form>