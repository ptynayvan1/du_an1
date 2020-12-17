<div class="card mt-3">
        <div class="card-header info">
          EDIT CAR
        </div>
        <div class="card-body">
          <form action="index.php?ctrl=product&action=update" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">ID xe</label>
                <input type="text" readonly name="id" class="form-control" value="<?php echo $id ?>">
              </div>
              <div class="form-group">
                <label for="">Name</label>
                <input type="text"  value="<?php echo $p['Ten_xe'];?>" name="nameproduct" class="form-control" >

              </div>
              <div class="form-group">
                <label for="">Mô tả</label>
                <input type="text"  value="<?php echo $p['mota'];?>" name="mota" class="form-control" >
              </div>
              <div class="form-group">
                <label for="">Địa chỉ xe</label>
                <input type="text"  value="<?php echo $p['diachixe'];?>" name="address" class="form-control" >
              </div>
              <div class="form-group">
                <label for="">Ngày sản xuất</label>
                <input type="date"  value="<?php echo $p['Namsx'];?>" name="date" class="form-control" >

              </div>
              <div class="form-group">
                <label for=""><p>Img:</p>
                  <img src="../site/views/images/<?php echo $p['hinh_xe'];?>" width="300px" alt="">
                </label>
                <input type="file"  value="<?php echo $p['hinh_xe'];?>" name="productImage" class="form-control" >

              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Cập nhật</button>
                  <a href="index.php?ctrl=product" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
