<head>
<link rel="stylesheet" href="./assets/css/main.css" />
</head>

<?php $__env->startSection('content'); ?>

<!--Service-->
<section class="header__bg" style="background-image: url('./assets/img/bg-dich-vu.png');">
        <div class="container">
            <div class="header__wrapper">
                <h1 class="header__title">Dịch vụ đa dạng</h1>
                <p class="header__content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor
                    incididunt ut labore et dolore magna aliqua.</p>
                <div class="breadrum">
                    <span>Bạn đang ở đây:&nbsp</span><a href="#">Trang chủ</a><span class="ic-arrow-right"></span><span
                        class="breadrum__here">Dịch vụ</span>
                </div>
            </div>

        </div>
    </section>
    <div class="container">
        <div class="wrapper__content">
            <!-- Grid service here -->
            <div class="grid__service">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('service',$service->id_service), false); ?>" class="service__card">
                    <div class="service__card-img-zone"><img class="service__card-img"
                            src="<?php echo e(Voyager::image($service->image), false); ?>" alt="service-card" /></div>
                    <div class="service__card-content">
                        <div class="service__card-title"><?php echo e($service->id_service, false); ?></div>
                        <div class="service__card-line"></div>
                        <div class="service__card-text"><?php echo e($service->description, false); ?>

                        </div>
                        <div class="service__card-detail">Xem thêm</div>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                

            </div>

            <!-- Grid service end -->
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ngophat\resources\views/page/archiveService.blade.php ENDPATH**/ ?>