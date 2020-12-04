<style>
    .listing {
        background-color:lightcyan;
        margin-left: 20px;
    }
</style>
<div class="row" style=" margin-bottom:-120px;margin-top:80px">         
                <?php
               
                if (is_array($checktk)) {
                    echo $checktk['Tenhang'].$checktk['Loaixe'];
                   foreach ($timkiem as $k) {?>
                         <div class="col-md-6 col-lg-4 mb-4">
                        
<div class="listing d-block  align-items-stretch">
    <div class="listing-img h-100 mr-4">
        
        <img src="./site/views/images/<?=$k['hinh_xe']?>" alt="Image" class="img-fluid" onerror="this.src='./site/views/images/hinhloi.jpg'">
    </div>
    <div class="listing-contents h-100">
        <a href="listing.html">
            <h3><a href="index.php?act=ctxe&idxe=<?=$k['id_xe']?>"><?=$k['Ten_xe']?></a> </h3>
        </a>
        <div>
        <p>Số lượt xem : <?=$k['Soluotxem']?></p>
            <h6>  <i class="fa fa-map-marker" style="font-size:24px;color:red"> </i><?=$k['diachixe']?></h6>
            <p><a href="contact.html" class="btn btn-primary btn-sm">Thuê ngay</a></p>
            
        </div>
        
    </div>

</div>

</div>
                       <?php
                        }
                   }else{
                       echo '<p style="text-align:center;margin: 0 auto;margin-bottom: 20px;font-size: 20px;font-weight: bold;color: red;">Thông tin tìm kiếm không tồn tại</p>';
                   }
                   ?>

                </div>