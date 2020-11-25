<div class="card mt-3">
<div class="card-header info">
ADD XE
</div>
<div class="card-body">
<form action="index.php?ctrl=product&action=insert" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="">Product name</label>
    <input type="text" name="productName" class="form-control" placeholder="Tên Xe">
</div>
<div class="form-group">
    <label for="">Price</label>
    <input type="number" name="price" class="form-control" placeholder="Giá cho thuê/tháng">
</div>
<div class="form-group">
    <label for="">Mô tả</label>
    <input type="text" name="moTa" class="form-control" placeholder="Mô tả">
</div>
<div class="form-group">
    <label for="">Ngày Sản Xuất</label>
    <input type="date" name="date" class="form-control" placeholder="Ngày sản xuất">
</div>
<div class="form-group">
    <label for="" >Hãng Xe</label>
    <select name="catalogId">
    <?php
    foreach($catalogs as $cate){
    echo '<option value="'.$cate['id_hangxe'].'">'.$cate['Tenhang'].'</option>';
    }
    ?>
    </select>
</div>
    <div class="form-group">
    <label for="">Product Image</label>
    <input type="file" name="productImage" class="form-control">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Lưu</button>
    <a href="index.php?ctrl=product" class="btn btn-danger">Danh sách</a>
</div>
</form>
</div>
</div>