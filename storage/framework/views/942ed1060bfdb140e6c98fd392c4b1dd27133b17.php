<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/lib/carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/lib/carousel/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css" />
    
    <!-- <link rel="stylesheet" href="./css/main.css"> -->
    <title>Ngô Phát logistics</title>
    <base href="<?php echo e(asset(''), false); ?>">
</head>  
<header class="drop-shadow">
        <div class="container header__bar">
            <a class="header__brand" href="#">
                <img class="brand-logo" src="./assets/img/logo-ngo-phat.png" />
                <span class="brand-name" href="<?php echo e(asset(''), false); ?>">Ngo Phat Logistics</span>
            </a>
            <nav class="navigation__list">
                <?php echo menu('main','menu'); ?>

            </nav>
        </div>
    </header>   
    <body>      
<?php echo $__env->yieldContent('content'); ?>
    </body>
<footer style="background-image: url('./assets/img/bg-footer.png');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 footer__information">
                    <img src="./img/logo-ngo-phat.png" height="78.82">
                    <div class="contact__information">
                        <p class="brand-name">NGO PHAT TS CO., LTD. (NPCO)</p>
                        <ul>
                            <li><a href="#">20/4 Nguyễn Hữu Thọai, P.19, Q.Bình Thạnh, TP.HCM
                                </a></li>
                            <li><a href="#">+848 3518 0499</a></li>
                            <li><a href="#">info@ngophat.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col footer__link">
                    <div class="row">
                        <div class="col">
                            <strong>Features</strong>
                            <ul>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Feature</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <strong>Resources</strong>
                            <ul>
                                <li><a href="#">Resource</a></li>
                                <li><a href="#">Resource</a></li>
                                <li><a href="#">Resource</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <strong>Company</strong>
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Company</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </footer>
    <div class="copyright" >
        Copyright NGO PHAT TS CO., LTD ©2019 All rights reserved
    </div>
    <script src="./assets/lib/jquery/jquery-3.4.1.min.js"></script>
    <script src="./assets/lib/carousel/owl.carousel.min.js"></script>
    <script src="./assets/js/main.js"></script>

    
</body>


</html>
<?php /**PATH C:\xampp\htdocs\ngophat-phase-1\ngo-phat-2\resources\views/master.blade.php ENDPATH**/ ?>