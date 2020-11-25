<div class="card mt-3">
        <div class="card-header info">
          QUẢN LÝ LOẠI HÀNG
        </div>
        <div class="card-body">
          <form action="index.php?ctrl=catalog&action=update" method="post" >
            <div class="form-group">
                <label for="">Mã danh mục</label>
                <input type="text" readonly name="id" class="form-control" value="<?php echo $id ?>">
              </div>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text"  value="<?php echo $cat['Tenhang'];?>" name="nameCata" class="form-control" >
              </div>
              <div class="form-group">
                <label for="">Logo</label>
                <input type="text"  value="<?php echo $cat['Logo'];?>" name="logo" class="form-control" >
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Cập nhật</button>
                  <a href="index.php?ctrl=catalog" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
