
      <div class="card mt-3">
        <div class="card-header info">
          THÊM HÃNG XE
        </div>
        <div class="card-body">
          <form action="index.php?ctrl=catalog&action=add" method="post">
        
            <div class="form-group">
                <label for="">Mã hãng xe</label>
                <input type="text" readonly name="id" class="form-control" placeholder="Mã loại tự phát sinh">
              </div>
              <div class="form-group">
                <label for="">Tên hãng xe</label>
                <input type="text" name="nameCata" class="form-control" placeholder="Tên loại">
              </div>
              <div class="form-group">
                <label for="">Logo hãng xe</label>
                <input type="text" name="logo" class="form-control" placeholder="Tên loại">
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Lưu</button>
                  <a href="index.php?ctrl=catalog" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
