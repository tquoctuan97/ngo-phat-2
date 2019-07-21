<head>
<link rel="stylesheet" href="../assets/css/main.css" />
</head>
@extends('master')
@section('content')
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
                        href="#">Tin tức</a><span class="ic-arrow-right"></span><span class="breadrum__here">{{$post->title}}</span>
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
                    {{$post->title}}
                    </div>

                    <div class="meta__row single-post__subtile-zone">
                        <span class="hot-view-post-date" style="font-size: 16px">{{$post->created_at}}</span>
                        <div class="dot"></div>
                        <span class="hot-view-post-type" style="font-size: 16px">TIN TỨC</span>
                    </div>
                </div>

                <div class="single-post__content">
                    <img class="signle-post__feature-img" src="{{Voyager::image($post->image)}}" alt="photo" />
                    <p style="margin-top: 45px">
                        {!!$post->body!!}
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
                    @foreach($new_post as $post)
                    <a href="{{route('post',$post->id)}}" class="post__card">
                        <div class="post__card-img-zone"><img class="post__card-img" src="{{Voyager::image($post->image)}}"
                                alt="post-card" /></div>
                        <div class="post__card-content">
                            <div class="post__card-title">{{$post->title}}</div>
                            <div class="meta__row post-card-info">
                                <span class="post__card-date">{{$post->created_at}}</span>
                                <div class="dot"></div>
                                <span class="post__card-type">TIN TỨC</span>
                            </div>
                            <div class="post__card-text">{{$post->meta_description}}</div>
                            <div class="post__card-detail">Xem thêm</div>
                        </div>
                    </a>
                    @endforeach
                    
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <form action="{{route('search')}}"class="search" method="GET">
                    <input class="search__input"  name="key" type="text" placeholder="Tìm kiếm bài viết..." required>
                    <input type="submit"class="search__icon ic-search"></form>
                
                <div class="hot-view">
                    <span class="hot-view__title"> XEM NHIỀU NHẤT</span>
                    <div><?php $num=1;?> 
                    @foreach($view_post as $view)
                        <div class="hot-view__post">
                            <span class="hot-view__post-number">{{$num}}</span>
                            <div>
                                <a class="hot-view__post-title">{{$view->title}}</a>
                                <div class="meta__row">
                                    <span class="hot-view__post-date">{{$view->created_at}}</span>
                                    <div class="dot"></div>
                                    <span class="hot-view__post-type">TIN TỨC</span>
                                </div>
                            </div>
                        </div>
                        <?php $num++;?> 
                        @endforeach

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

@endsection