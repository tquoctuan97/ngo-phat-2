<?php $__env->startSection('content'); ?>

<body>
    <main>
        
        <section id="banner">
            <div class="owl-carousel"><?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="banner__item d-flex align-items-center bg--cover" style="background-image: url(<?php echo e(Voyager::image( $sl->image ), false); ?>);">
                
                    <div class="curtain"></div>
                    <div class="banner__content text-center text-md-left">
                        <h2 class="title--size-56 -size-ipad-32 -size-phone-24 -txt-light text-uppercase"><?php echo e($sl->name, false); ?></h2>
                        <p class="subtitle--size-20 -size-phone-16 -txt-light "><?php echo e($sl->description, false); ?></p>
                        <a href="#" class="btn--txt-light -size-phone-14 -bg-primary">Tìm hiểu ngay</a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </section>
        
        <section id="introduction" class="bg--contain">
            <div class="container__section row ">
                <div class="col-12 col-lg-6 text-center text-lg-left order-1">
                    <h2 class="title__section ">Hơn <strong class="-txt-hightlight">52.000</strong> khách hàng tin dùng</h2>
                    <p class="subtitle">
                        <strong>NGO PHAT LOGISTICS</strong> là một trong những nhà cung cấp dịch vụ vận tải quốc tế, dịch vụ giao nhận, khai thuê hải quan và vận chuyển nội địa hàng đầu tại Việt Nam
                    </p>
                    <div class="box__quote">
                        <p class="text">Với 14 năm hoạt động trong lĩnh vực dịch vụ vận tải quốc tế. Tôi luôn mong muốn mang đến giá trị: Hiệu quả cao, chi phí thấp, nhanh chóng, uy tín.</p>
                        <div class="d-lg-flex d-inline-block">
                            <div class="author__avatar -circle m-auto m-lg-0"></div>
                            <div class="author__name text ml-3">Nguyễn Thị B, Chủ tịch công ty LOGISTICS</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mb-5 order-0 order-lg-2 text-center text-lg-right">
                    <a href="#" class="box__video -icon -size-60"><img src="./img/videos-img.png" alt=""></a>
                </div>
            </div>
            <?php $__currentLoopData = $body; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="container__section boxes__icon d-none d-md-flex">
                <div class="col-md-3 col-12">
                    <div class="box text-center">
                        <div class="box__icon"><img src="./img/icon/Group (1).svg" alt=""></div>
                        <div class="subtitle"><?php echo e($bd->future_box, false); ?></div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box text-center">
                        <div class="box__icon">
                            <img src="./img/icon/Group 2.svg" alt=""> 
                        </div>
                        <div class="subtitle"><?php echo e($bd->future_box_1, false); ?></div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box text-center">
                        <div class="box__icon"><img src="./img/icon/clock.svg" alt=""></div>
                        <p class="subtitle"><?php echo e($bd->future_box_2, false); ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box text-center">
                        <div class="box__icon clear__pseudo"><img src="./img/icon/Group.svg" alt=""></div>
                        <p class="subtitle"><?php echo e($bd->future_box_3, false); ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="bg--cover">
            <div class="curtain"></div>
            <div class="container__section row align__items--center text-center text-md-left">
                <div class="content col-md-6 col-12">
                    <h2 class="title__section -txt-light">Dịch vụ đa dạng</h2>
                    <p class="subtitle--txt-light mb-0"><?php echo e($bd->paragraph_1, false); ?></p>
                </div>
                <div class="col-md-6 col-12 d-flex justify-content-center justify-content-md-end align-items-center">
                    <a href="#" class="btn--txt-light -bg-primary -size-phone-14 mt-4 mt-md-0 ">Yêu cầu báo giá</a>
                </div>
            </div>
            <div class="owl-carousel-5  controls-outline ">
                <article class="card card__3d text-center">
                    <div class="card__avatar mb-5">
                        <img src="./img/services/image 2-1.png" alt="" class="-circle">
                    </div>
                    <h3 class="title--size-18 -size-phone-16 underline">
                        Vận Chuyển Hàng Không
                    </h3>
                    <p class="subtitle--size-16">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="#" class="see-more">Xem thêm</a>
                </article>
                <article class="card card__3d text-center">
                    <div class="card__avatar mb-5">
                        <img src="./img/services/image 2-1.png" alt="" class="-circle">
                    </div>
                    <h3 class="title--size-18 -size-phone-16 underline">
                        Vận Chuyển Hàng Không
                    </h3>
                    <p class="subtitle--size-16">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="#" class="see-more">Xem thêm</a>
                </article>
                <article class="card card__3d text-center">
                    <div class="card__avatar mb-5">
                        <img src="./img/services/image 2-1.png" alt="" class="-circle">
                    </div>
                    <h3 class="title--size-18 -size-phone-16 underline">
                        Vận Chuyển Hàng Không
                    </h3>
                    <p class="subtitle--size-16">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="#" class="see-more">Xem thêm</a>
                </article>
                <article class="card card__3d text-center">
                    <div class="card__avatar mb-5">
                        <img src="./img/services/image 2-1.png" alt="" class="-circle">
                    </div>
                    <h3 class="title--size-18 -size-phone-16 underline">
                        Vận Chuyển Hàng Không
                    </h3>
                    <p class="subtitle--size-16">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="#" class="see-more">Xem thêm</a>
                </article>
                <article class="card card__3d text-center">
                    <div class="card__avatar mb-5">
                        <img src="./img/services/image 2-1.png" alt="" class="-circle">
                    </div>
                    <h3 class="title--size-18 -size-phone-16 underline">
                        Vận Chuyển Hàng Không
                    </h3>
                    <p class="subtitle--size-16">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="#" class="see-more">Xem thêm</a>
                </article>
                
            </div>
        </section>

            <!-- contact -->
        <section id="contact" class="bg--cover">
            <div class="container__section">
                <form action="">
                    <div class="card card__contact">
                        <h2 class="title__section">Đặt lịch hẹn tư vấn <strong class="-txt-hightlight">miễn phí</strong></h2>
                        <p class="subtitle--size-17 -txt-smoke">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut corporis enim, eos. Fugiat aliquam ducimus totam.
                        </p>
                        <div class="row mx-0">
                            <form action="">
                            <div class="col-md-6 col-12 bordered">
                                <input type="text" name="username" placeholder="Tên của bạn" required >
                                <span><img src="./img/icon-form/user-6.svg" alt=""></span>
                            </div>
                            <div class="col-md-6 col-12 bordered">
                                <input type="tel"  name="phone" placeholder="Số điện thoại" required>
                                <span><img src="./img/icon-form/telephone.svg" alt=""></span>
                            </div>
                            <div class="col-md-6 col-12 bordered">
                                <input type="email"  name="location" placeholder="Địa chỉ e-mail" required>
                                <span><img src="./img/icon-form/black-back-closed-envelope-shape.svg" alt=""></span>
                            </div>
                            <div class="col-md-6 col-12 bordered">
                                <select name="support" placeholder="Dịch vụ cần hỗ trợ">
                                    <option>Dịch vụ cần hỗ trợ<option>
                                    <option>Dịch vụ <option>
                                    <option>Dịch vụ <option>
                                </select>
                                <span><img src="./img/icon-form/Group.svg" alt=""></span>
                            </div>
                            <div class="col-12 bordered">
                                <textarea name="note" id="" rows="4" placeholder="Nội dung..."></textarea>
                            </div>
                            <div class="col-12 text-right ">
                                <button type="submit" class="btn--bg-primary -size-phone-14  -txt-light phone-fluid">gửi yêu cầu</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        
        <!-- post news -->
        <section id="news">
            <div class="container__section">
                <h2 class="title__section mb-5">Tin tức <strong class="-txt-hightlight">nổi bật</strong></h2>
                <div class="owl-carousel-3 controls-outline dots-dark">
                    <?php $__currentLoopData = $new_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ps): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="card card__post">
                        <div class="card__avatar">
                            <img src="<?php echo e(Voyager::image( $ps->image ), false); ?>" alt="" class="img__fluid">
                        </div>
                        <div class="card__content">
                            <h3 class="title--size-14  -txt-dark">
                                <?php echo e($ps->title, false); ?>

                            </h3>
                            <p class="subtitle--size-12 -txt-smoke">
                                <?php echo e($ps->meta_description, false); ?>

                            </p>
                        </div>
                        <a href="#" class="see-more">Xem thêm</a>
                    </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>               
                   

                </div>
            </div>
        </section>

        
        <!-- customer -->
        <section id="customers">
            <div class="container__section">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <h2 class="title__section">
                            Hơn <strong class="-txt-hightlight">10+ đối tác</strong> trên thế giới
                        </h2>
                        <p class="subtitle--txt-smoke -size-17">
                        <?php echo e($bd->paragraph_2, false); ?>

                        </p>
                    </div>
                    <div class="col-md-6 col-12 text-right">
                        <img src="./img/customers.png" alt="Danh sách khách hàng thân thiết">
                    </div>
                </div>
            </div>
        </section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- consult -->
        <section id="consult" class="bg--cover">
            <div class="curtain"></div>
            <div class="container__section">
                <div class="row align-items-center">
                    <div class="col-md-6 col-12 text-md-left text-center ">
                        <h2 class="title__section -txt-light">Sẵn sàng để bắt đầu</h2>
                        <p class="title--size-28 -size-ipad-18 -size-phone-16 -txt-light mt-3">Đăng ký hoặc liên hệ với chúng tôi</p>
                    </div>
                    <div class="col-md-6 col-12 text-md-right text-center mt-3 ">
                        <a href="#" class="btn--bg-primary -size-phone-14 -txt-light">liên hệ ngay</a>
                    </div>
                </div>
            </div>
        </section>        
    </main>
</body>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ngophat\resources\views/home/body.blade.php ENDPATH**/ ?>