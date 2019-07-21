<head>
<link rel="stylesheet" href="./assets/css/main.css" />
</head>
@extends('master')
@section('content')

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
                @foreach($services as $service)
                <a href="{{route('service',$service->id_service)}}" class="service__card">
                    <div class="service__card-img-zone"><img class="service__card-img"
                            src="{{Voyager::image($service->image)}}" alt="service-card" /></div>
                    <div class="service__card-content">
                        <div class="service__card-title">{{$service->id_service}}</div>
                        <div class="service__card-line"></div>
                        <div class="service__card-text">{{$service->description}}
                        </div>
                        <div class="service__card-detail">Xem thêm</div>
                    </div>
                </a>
                @endforeach
                

            </div>

            <!-- Grid service end -->
        </div>
    </div>


@endsection