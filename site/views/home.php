<div class="site-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 text-center order-lg-2">
                        <div class="img-wrap-1 mb-5">
                            <img src="./site/views/images/feature_01.png" alt="Image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 ml-auto order-lg-1">
                        <h3 class="mb-4 section-heading"><strong>You can easily avail our promo for renting a car.</strong></h3>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, explicabo iste a labore id est quas, doloremque veritatis! Provident odit pariatur dolorem quisquam, voluptatibus voluptates optio accusamus, vel quasi quidem!</p>

                        <p><a href="#" class="btn btn-primary">Meet them now</a></p>
                    </div>
                </div>
            </div>
        </div>

      

        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="section-heading"><strong>Car Listings</strong></h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>


                <div class="row">         
                <?php
                   foreach ($showxe as $k) {?>
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
                   ?>

                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="section-heading"><strong>Features</strong></h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-5">
                        <div class="service-1 dark">
                            <span class="service-1-icon">
                <span class="icon-home"></span>
                            </span>
                            <div class="service-1-contents">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                                <p class="mb-0"><a href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="service-1 dark">
                            <span class="service-1-icon">
                <span class="icon-gear"></span>
                            </span>
                            <div class="service-1-contents">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                                <p class="mb-0"><a href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="service-1 dark">
                            <span class="service-1-icon">
                <span class="icon-watch_later"></span>
                            </span>
                            <div class="service-1-contents">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                                <p class="mb-0"><a href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-5">
                        <div class="service-1 dark">
                            <span class="service-1-icon">
                <span class="icon-verified_user"></span>
                            </span>
                            <div class="service-1-contents">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                                <p class="mb-0"><a href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="service-1 dark">
                            <span class="service-1-icon">
                <span class="icon-video_library"></span>
                            </span>
                            <div class="service-1-contents">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                                <p class="mb-0"><a href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="service-1 dark">
                            <span class="service-1-icon">
                <span class="icon-vpn_key"></span>
                            </span>
                            <div class="service-1-contents">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                                <p class="mb-0"><a href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="section-heading"><strong>Testimonials</strong></h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="./site/views/images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Mike Fisher</span>
                                    <span>Owner, Ford</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="./site/views/images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Jean Stanley</span>
                                    <span>Traveler</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="./site/views/images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Katie Rose</span>
                                    <span>Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-primary py-5" style="background-image:url(./site/views/images/1.jpg);  background-attachment: fixed; background-size:cover;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-4 mb-md-0">
                        <h2 class="mb-0 text-white">What are you waiting for?</h2>
                        <p class="mb-0 opa-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                    </div>
                    <div class="col-lg-5 text-md-right">


                        <div class="form-control-wrap">
                            <input type="text" id="cf-3" placeholder="Pick up" class="form-control datepicker px-3">
                            <span class="icon icon-date_range"></span>

                        </div>
                        <div class="form-control-wrap">
                            <input type="text" id="cf-3" placeholder="Pick up" class="form-control datepicker px-3">
                            <span class="icon icon-date_range"></span>

                        </div>



                    </div>
                </div>
            </div>
        </div>