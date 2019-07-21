<head>
<link rel="stylesheet" href="../assets/css/main.css" />
</head>

<?php $__env->startSection('content'); ?>
<!--Post-->

<section class="header__bg" style="background-image: url('./assets/img/bg-tin-tuc.png')">
        <div class="container">
            <div class="header__wrapper">
                <h1 class="header__title">Tin tức</h1>
                <p class="header__content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor
                    incididunt ut labore et dolore magna aliqua.</p>
                <div class="breadrum">
                    <span>Bạn đang ở đây:&nbsp</span><a href="#">Trang chủ</a><span class="ic-arrow-right"></span><a
                        href="#">Tin tức</a><span class="ic-arrow-right"></span><span class="breadrum__here"><?php echo e($post->title, false); ?></span>
                </div>
            </div>

        </div>
    </section>
    <div class="container wrapper__content">
        <section class="row">
            <div class="col-lg-8 col-md-12">

                <!-- Content Post here -->
                <div class="single-post__title-zone">
                    <div class="single-post__title">
                    <?php echo e($post->title, false); ?>

                    </div>

                    <div class="meta__row single-post__subtile-zone">
                        <span class="hot-view-post-date" style="font-size: 16px"><?php echo e($post->created_at, false); ?></span>
                        <div class="dot"></div>
                        <span class="hot-view-post-type" style="font-size: 16px">TIN TỨC</span>
                    </div>
                </div>

                <div class="single-post__content">
                    <img class="signle-post__feature-img" src="<?php echo e(Voyager::image($post->image), false); ?>" alt="photo" />
                    <p style="margin-top: 45px">
                        <?php echo $post->body; ?>

                    </p>
                    
                </div>

                <div class="single-post__share">
                    <div class="single-post__share-box">
                        <span>CHIA SẺ BÀI VIẾT NÀY</span>
                        <img class="facebook__logo" src="./assets/img/facebook.png" alt="facebook" />
                    </div>
                    <div class="facebook__embedded">
                        <!-- embedded facebook api here -->
                        <div class="facebook__logo" data-href="https://www.facebook.com" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                    </div>
                </div>

                <!-- Grid Post here -->
                <div class="single-post__relate-zone">
                    <h3 class="single-post__relate-title">
                        BÀI VIẾT LIÊN QUAN
                    </h3>
                    <div class="grid__post">
                    <?php $__currentLoopData = $new_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('post',$post->id), false); ?>" class="post__card">
                        <div class="post__card-img-zone"><img class="post__card-img" src="<?php echo e(Voyager::image($post->image), false); ?>"
                                alt="post-card" /></div>
                        <div class="post__card-content">
                            <div class="post__card-title"><?php echo e($post->title, false); ?></div>
                            <div class="meta__row post-card-info">
                                <span class="post__card-date"><?php echo e($post->created_at, false); ?></span>
                                <div class="dot"></div>
                                <span class="post__card-type">TIN TỨC</span>
                            </div>
                            <div class="post__card-text"><?php echo e($post->meta_description, false); ?></div>
                            <div class="post__card-detail">Xem thêm</div>
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="search">
                    <input class="search__input" type="text" placeholder="Tìm kiếm bài viết..." required></input>
                    <a href="#" class="search__icon"><span class="ic-search"></span></a>
                </div>
                <div class="hot-view">
                    <span class="hot-view__title"> XEM NHIỀU NHẤT</span>
                    <div><?php $num=1;?> 
                    <?php $__currentLoopData = $view_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="hot-view__post">
                            <span class="hot-view__post-number"><?php echo e($num, false); ?></span>
                            <div>
                                <a class="hot-view__post-title"><?php echo e($view->title, false); ?></a>
                                <div class="meta__row">
                                    <span class="hot-view__post-date"><?php echo e($view->created_at, false); ?></span>
                                    <div class="dot"></div>
                                    <span class="hot-view__post-type">TIN TỨC</span>
                                </div>
                            </div>
                        </div>
                        <?php $num++;?> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
                <!-- Write sidebar -->
                <section class="wrapper__box" style="height: auto">
                    <div>
                        <h3 class="wrapper__title">Hỗ trợ trực tuyến</h3>
                        <div class="line"></div>
                        <div class="group__list">
                            <a href="#">
                                <span class="ic-phone"></span>08 3518 0499
                            </a>
                            <a href="#">
                                <span class="ic-phone"></span>08 3518 0488
                            </a>
                        </div>
                    </div>
                    <div>
                        <h3 class="wrapper__title">Tài liệu dịch vụ</h3>
                        <div class="line"></div>
                        <div class="group__list">
                            <a href="#">
                                <span class="ic-download"></span>Catalog dịch vụ 2019
                            </a>
                            <a href="#">
                                <span class="ic-download"></span>Bảng giá dịch vụ Quý II/ 2019
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ngophat\resources\views/page/post.blade.php ENDPATH**/ ?>