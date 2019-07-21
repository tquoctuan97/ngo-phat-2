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
    <base href="<?php echo e(asset('')); ?>">
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

<?php echo $__env->yieldContent; ?>
    <footer>
        <section id="footer-info">
            <div class="row container__fluid footer__info bg--contain">
                <div class="col-md-6 col-12 row text-center">
                    <div class="col-lg-3 col-12">
                        <img src="./img/logo.png" alt="Ngô Phát Logistics" class="footer__logo">
                    </div>
                    <div class="col-lg-9 col-12 text-lg-left">
                        <h2 class="title__foot -txt-primary text-uppercase">NGO PHAT TS CO., LTD. (NPCO)
                        </h2>
                        <p class="text"><i class="fas fa-directions -mr-10"></i> 20/4 Nguyễn Hữu Thọai, P.19, Q.Bình
                            Thạnh, TP.HCM
                        </p>
                        <p class="text"><i class="fas fa-phone -mr-10"></i> +848 3518 0499</p>
                    </div>
                </div>
                <div class="col-md-6 col-12 d-none d-md-flex justify-content-end">
                    <div class="col-md-3 text-right">
                        <div class="d-inline-block text-left">
                            <h3 class="title__foot -size-18 -size-ipad-14 -size-phone-12">Feature</h3>
                            <a href="#">
                                <p class="text">Feature</p>
                            </a>
                            <a href="#">
                                <p class="text">Feature</p>
                            </a>
                            <a href="#">
                                <p class="text">Feature</p>
                            </a>
                            <a href="#">
                                <p class="text">Feature</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 text-right">
                        <div class="d-inline-block text-left">
                            <h3 class="title__foot -size-18 -size-ipad-14 -size-phone-12">Feature</h3>
                            <a href="#">
                                <p class="text">Feature</p>
                            </a>
                            <a href="#">
                                <p class="text">Feature</p>
                            </a>
                            <a href="#">
                                <p class="text">Feature</p>
                            </a>
                            <a href="#">
                                <p class="text">Feature</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 text-right">
                        <div class="d-inline-block text-left">
                            <h3 class="title__foot -size-18 -size-ipad-14 -size-phone-12">Feature</h3>
                            <a href="#">
                                <p class="text">Feature</p>
                            </a>
                            <a href="#">
                                <p class="text">Feature</p>
                            </a>
                            <a href="#">
                                <p class="text">Feature</p>
                            </a>
                            <a href="#">
                                <p class="text">Feature</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 text-right">
                        <div class="d-inline-block text-left">
                            <h3 class="title__foot -size-18 -size-ipad-14 -size-phone-12">Feature</h3>
                            <a href="#">
                                <p class="text">Feature</p>
                            </a>
                            <a href="#">
                                <p class="text">Feature</p>
                            </a>
                            <a href="#">
                                <p class="text">Feature</p>
                            </a>
                            <a href="#">
                                <p class="text">Feature</p>
                            </a>
                        </div>
                    </div>


                </div>
        </section>
        <div id="copyright">
            <div class="container__fluid -bg-primary text-center py-3 ">
                <p class="-size-12 -txt-light">Copyright NGO PHAT TS CO., LTD ©2019 All rights reserved</p>
            </div>
        </div>
    </footer>


    <script src="./https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="./owlcarousel/vendors/jquery.min.js"></script>
    <script src="./owlcarousel/owl.carousel.js"></script>
    <script src="./js/main.js"></script>
</body>


</html>
<?php /**PATH C:\xampp\htdocs\ngophat\resources\views/home/master.blade.php ENDPATH**/ ?>