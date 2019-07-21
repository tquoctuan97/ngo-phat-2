@extends('master')
@section('content')

<!--Archive Post-->
    
<section class="header__bg" style="background-image: url('./assets/img/bg-tin-tuc.png'); image-rendering: pixelated;">
        <div class="container">
            <div class="header__wrapper">
                <h1 class="header__title">Tin tức</h1>
                <p class="header__content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor
                    incididunt ut labore et dolore magna aliqua.</p>
                <div class="breadrum">
                    Bạn đang ở đây: Trang chủ > <span class="breadrum__here">Tin tức</span>
                </div>
            </div>

        </div>
    </section>
    <div class="container wrapper__content">
        <section class="row">
            <div class="col-lg-8 col-md-6">

                <!-- Grid Post here -->
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

                <div class="post__pagination">{{ $new_post->links() }}
                    <div class="post__pagination-cell"><img src="./assets/img/double-arrow.png" alt="previous" /></div>
                    <div class="post__pagination-cell active">1</div>
                    
                    <div class="post__pagination-cell"><img style="transform: rotate(180deg)"
                            src="./assets/img/double-arrow.png" alt="previous" /></div>
                </div>
                <!-- Grid Post end -->

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="search">
                    <input class="search__input" type="text" placeholder="Tìm kiếm bài viết..." required></input>
                    <a href="#" class="search__icon"><span class="ic-search"></span></a>
                </div>
                <div class="hot-view">
                    <span class="hot-view__title"> XEM NHIỀU NHẤT</span>
                    <div><?php $num=1;?>
                        @foreach($view_post as $post)
                        <div class="hot-view__post">
                            <span class="hot-view__post-number">{{$num}}</span>
                            <div>
                                <a class="hot-view__post-title">{{$post->title}}</a>
                                <div class="meta__row">
                                    <span class="hot-view__post-date">{{$post->created_at}}</span>
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
    <!-- Footer -->


@endsection