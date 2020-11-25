<div class="card mt-3">
        <div class="card-header info">
          CHI TIẾT XE
        </div>
        <div class="card-body">
          <form action="index.php?ctrl=product&action=update" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" style="font-weight:bold;">ID xe</label>
                <input type="text" readonly name="id" class="form-control" value="<?php echo $p['id_xe'] ?>">
            </div>
           <?php 
              echo '
              <p><span style="font-weight:bold;">Name:</span> '. $p['Ten_xe'].' </p>
              <p><span style="font-weight:bold;">Mô tả:</span> '. $p['mota'].' </p>
              <p><span style="font-weight:bold;">Địa chỉ xe: </span>'. $p['diachixe'].' </p>
              <p><span style="font-weight:bold;">Năm sản xuât:</span> '. $p['Namsx'].' </p>
              <p><span style="font-weight:bold;">Số lượt xem:</span> '. $p['Soluotxem'].' </p>
              <p><span style="font-weight:bold;">Image:</span> '. $p['hinh_xe'].' </p>
              ';
           ?>
              
          </form>
          <div class="form-group">
                    <a href="index.php?ctrl=product&action=delte&id=<?php echo $p['id_xe']?>" class="btn btn-warning">Xoá</a>
                    <a href="index.php?ctrl=product&action=edit&id=<?php echo $p['id_xe']?>" class="btn btn-primary">Sửa</a>
              </div>
        </div>
      </div>
