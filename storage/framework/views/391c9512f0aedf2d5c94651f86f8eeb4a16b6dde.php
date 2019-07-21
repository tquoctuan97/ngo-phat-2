
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="owlcarousel/assets/docs.theme.min.css"> -->
    <link rel="stylesheet" href="./owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./fontawesome-5.8.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <!-- <link rel="stylesheet" href="./css/main.css"> -->
    <title>Ngô Phát logistics</title>
</head>

<body>
    <header>

        <div class="container__fluid row  py-4">
            <div class=" col-12 col-xl-4 header__logo">
                <a href="#" class="d-flex align-items-center justify-content-center justify-content-xl-start">
                    <img src="./img/logo.png" alt="Logo">
                    <h1 class="title -txt-primary m-0 text-uppercase">ngô phát logistics</h1>
                </a>
                <!-- <a id="hamburger" href='#1' class="hamburger d-inline-block d-md-none ">
                    <i class="fas fa-bars"></i>
                </a>    -->
            </div>
            <nav class="col-12 col-xl-8 py-4 py-xl-0 d-none d-md-block">             
                <ul class="nav__menu justify-content-center justify-content-xl-end">
                    <li><a class="nav__item" href="#">Về chúng tôi</a></li>
                    <li><a class="nav__item" href="#">Dịch vụ</a></li>
                    <li><a class="nav__item" href="#">Tra cứu thông tin</a></li>
                    <li><a class="nav__item" href="#">Liên hệ</a></li>
                    <li>
                        <a href="#" class="nav__item btn__border--primary">Báo giá dịch vụ</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
    <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sli): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section id="banner">
    
    <div class="owl-carousel">
        
                <div class="banner__item d-flex align-items-center bg--cover" src ="source/img/<?php echo e($sli->title); ?>" style="background-image: url('source/img/<?php echo e($sli->title); ?>');width:100%;height:100%;">
                    
                </div>
                
    </div>
    
    </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</main><?php /**PATH C:\xampp\htdocs\ngophat\resources\views/home/menu.blade.php ENDPATH**/ ?>