
<head>
<link rel="stylesheet" href="./assets/css/main.css" />
</head>
@extends('master')
@section('content')

<section class="header__bg" style="background-image: url('./assets/img/bg-tra-cuu-thong-tin.png')">
    <div class="container">
      <div class="header__wrapper">
        <h1 class="header__title">Tra cứu thông tin</h1>
        <p class="header__content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua.</p>
        <div class="breadrum">
          Bạn đang ở đây: Trang chủ > Dịch vụ > <span class="breadrum__here">Tra cứu thông tin</span>
        </div>
      </div>

    </div>
  </section>
  <div class="container">
    <!-- Kiem tra don hang -->
    <section class="wrapper__content">
      <h2>KIỂM TRA ĐƠN HÀNG</h2>
      <form action="" class="form__tracking">
        <ul class="row list__tracking">
          <li class="col-12 col-md-6 col-lg-3">
            <input class="form__option" type="radio" id="trackHangnhap" name="selector">
            <label class="form__label" for="trackHangnhap">Lịch trình hàng nhập</label>

            <div class="check"></div>
          </li>
          <li class="col-12 col-md-6 col-lg-3">
            <input class="form__option" type="radio" id="trackHangxuat" name="selector">
            <label class="form__label" for="trackHangxuat">Lịch trình hàng xuất</label>

            <div class="check"></div>
          </li>
          <li class="col-12 col-md-6 col-lg-3">
            <input class="form__option" type="radio" id="trackContainer" name="selector">
            <label class="form__label" for="trackContainer">Lịch trình xe container</label>

            <div class="check"></div>
          </li>
          <li class="col-12 col-md-6 col-lg-3">
            <input class="form__option" type="radio" id="trackVantaidon" name="selector">
            <label class="form__label" for="trackVantaidon">Vận tải đơn</label>

            <div class="check"></div>
          </li>
        </ul>
        <div class="row">
          <div class="col-lg-8 container__box">
            <section class="wrapper__box">
              <h3 class="wrapper__title"> Kiểm tra lịch trình hàng nhập</h3>
              <div class="line"></div>
              <div class="row form__group">
                <div class="col">
                  <label class="form__title">HBL Sea</label>
                  <input class="form__input" type="text" name="" placeholder="NPCO1xxxx">
                </div>
                <div class="col">
                  <label class="form__title">HBL Sea</label>
                  <input class="form__input" type="text" name="" placeholder="NPCO1xxxx">
                </div>
              </div>
              <input class="form__submit" type="submit" value="Xác nhận">
            </section>
          </div>
          <div class="col container__box">
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
        </div>
      </form>
    </section>
  </div>

   <!--Search Order  
   <script>
function showHint(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "getOrder.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>

<p>Suggestions: <span id="txtHint"></span></p> -->
@endsection