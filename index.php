<?php

include_once __DIR__ . ('/dbconnect.php');

session_start();

$item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 8;
$current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
$offset = ($current_page - 1) * $item_per_page;

$sqlsp = "SELECT * FROM sanpham ORDER BY masp ASC LIMIT " . $item_per_page . " OFFSET " . $offset . " ";
$relsultsp = mysqli_query($conn, $sqlsp);

// Danh sach tat ca san pham
$totalRecords = mysqli_query($conn, "SELECT * FROM sanpham");

$totalRecords = $totalRecords->num_rows;
$totalPages = ceil($totalRecords / $item_per_page);

$arraysp = [];
while ($row = mysqli_fetch_array($relsultsp, MYSQLI_ASSOC)) {
  $arraysp[] = array(
    'masp' => $row['masp'],
    'tenhang' => $row['tenhang'],
    'math' => $row['math'],
    'hinhsp' => $row['hinhsp'],
    'soluong' => $row['soluong'],
    'donvitinh' => $row['donvitinh'],
    'giamoi' => $row['giamoi'],
    'giacu' => $row['giacu'],
    'malh' => $row['malh']
  );
}

//bien truyen nhan
$themgiohang = 'themgiohang';

// Sản phẩm pham giam gia nhieu nhat
$sqlSanPhamMoi = "SELECT *, ((giacu-giamoi)/giacu)*100 AS giamgia FROM sanpham ORDER BY giamgia DESC LIMIT 4";
$relsultSanPhamMoi = mysqli_query($conn, $sqlSanPhamMoi);
$danhSachSanPhamMoi = [];
while ($row = mysqli_fetch_array($relsultSanPhamMoi, MYSQLI_ASSOC)) {
  $danhSachSanPhamMoi[] = array(
    'masp' => $row['masp'],
    'tenhang' => $row['tenhang'],
    'math' => $row['math'],
    'hinhsp' => $row['hinhsp'],
    'soluong' => $row['soluong'],
    'donvitinh' => $row['donvitinh'],
    'giamoi' => $row['giamoi'],
    'giacu' => $row['giacu'],
    'malh' => $row['malh'],
  );
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ</title>
  <?php include_once(__DIR__ . '/frontend/layouts/styles.php'); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</head>
<style>
.tinhtoan {
  display: flex;
  justify-content: center;
}

.products::after {
  --borderWidth: 3px;
  content: '';
  position: absolute;
  top: calc(-1 * var(--borderWidth));
  left: calc(-1 * var(--borderWidth));
  height: calc(100% + var(--borderWidth) * 2);
  width: calc(100% + var(--borderWidth) * 2);
  background: linear-gradient(60deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82);
  border-radius: calc(2 * var(--borderWidth));
  z-index: -1;
  animation: animatedgradient 3s ease alternate infinite;
  background-size: 300% 300%;
}

.products:hover {
  --borderWidth: 3px;
  opacity: 0.9;
  position: relative;
  border-radius: var(--borderWidth);
}

.products:hover .card-img-top {
  transition: all 0.5s linear;
  padding: 10px;
  transform: rotate(10deg);
}

@keyframes animatedgradient {
  0% {
    background-position: 0% 50%;
  }

  50% {
    background-position: 100% 50%;
  }

  100% {
    background-position: 0% 50%;
  }
}



.product-price-old {
  text-decoration-line: line-through;
  font-size: 13px;
  color: gray;
}

.product-price {
  padding-left: 5px;
  font-size: 15.5px;
  color: red;
  font-weight: 800;
}

.btncard {
  background: linear-gradient(144deg, #ff8949, #f7434c);
  padding: 9px;
  border-radius: 6px;
  text-align: center;
  color: white;
  font-weight: 700;
  border: none;

}

.btncard:hover {
  opacity: 0.9;
  letter-spacing: 1px;
}

.badge-container {
  margin-top: 0.5rem;
  display: flex;
}

.z-1 {
  width: 100%;
  z-index: 1;
}

.left {
  left: 5px;
}

.top {
  top: -10px;
}

.absolute {
  position: absolute !important;
}

.badge,
.badge+.badge {
  height: 2.5rem;
  width: 2.5rem;
  font-size: 15px;
  margin-left: 0.5rem;
  margin-top: 0.25rem;
}

.badge-outline,
.badge-circle {
  margin-left: -0.4em;
}

.badge {
  display: table;
  z-index: 20;
  pointer-events: none;
  height: 3.3em;
  width: 4em;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.badge-inner.secondary.on-sale {
  box-shadow: 0 2px 4px 0 rgb(0 0 0 / 8%);
  background-color: #f7464c;
}

.badge-circle-inside .badge-inner,
.badge-circle .badge-inner {
  border-radius: 999px;
}

.secondary,
.checkout-button,
.button.checkout,
.button.alt {
  background: #f84c4c;
  border: none;
}

.secondary,
.checkout-button,
.button.checkout,
.button.alt {
  background-color: #d26e4b;
}

.badge-inner {
  display: table-cell;
  vertical-align: middle;
  text-align: center;
  height: 3.3em;
  width: 4em;
  background-color: #446084;
  line-height: .85;
  color: #fff;
  font-weight: bolder;
  padding: 2px;
  white-space: nowrap;
  -webkit-transition: background-color .3s, color .3s, border .3s;
  -o-transition: background-color .3s, color .3s, border .3s;
  transition: background-color .3s, color .3s, border .3s;
}

.onsale {
  font-size: 13px;
  padding: 10px;
  line-height: 20px;
}

.name-product {
  display: -webkit-box;
  color: black;
  font-weight: 600;
  font-size: 15px;
  text-align: center;
  line-height: 1.3;
  -webkit-line-clamp: 3;
  /* số dòng hiển thị */
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  height: 58px;
}

.products {
  position: relative;
  margin-top: 15px;

}

.cot {
  padding-left: 50px;
  margin-left: -12px;
}



/* ------------- */
@keyframes slidy {
  0% {
    left: 0%;
  }

  20% {
    left: 0%;
  }

  25% {
    left: -100%;
  }

  45% {
    left: -100%;
  }

  50% {
    left: -200%;
  }

  70% {
    left: -200%;
  }

  75% {
    left: -300%;
  }

  95% {
    left: -300%;
  }

  100% {
    left: -400%;
  }
}

div#slider {
  overflow: hidden;
}

div#slider figure img {
  object-fit: contain;
  width: 20%;
  height: 400px;
  float: left;
}

div#slider figure {
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 10s slidy infinite;
}

.card-home-page {
  margin-bottom: 20px;
}

h2 {
  font-size: 2.25rem;
  margin-bottom: 0.75rem;
  font-weight: 700;
  color: #424242;
  font-family: Courier;
}

.sologan {
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  padding: 20px 0;
  color: #424242;
  font-size: 600;
}

.name_store {
  display: inline-block;
  padding: 0.25rem 0.6rem;
  border-radius: 4px;
  color: #fff !important;
  background: linear-gradient(108deg, #f7434c, #ff6b1b);
  margin-left: 0.25rem;
  font-weight: 500;
}

.product .badge {
  position: absolute;
  top: 0px;
  right: 0px;
  margin: 5px;
  background-color: #f2f2f2;
  border: solid 1px red;
  border-radius: 8px;
  padding: 5px;
}

.price {
  font-size: 0.8em;
  text-decoration: line-through;
}

.discount-price {
  color: red;
  font-weight: 700;

}

.product {
  --borderWidth: 3px;
  background: #1D1F20;
  position: relative;
  border-radius: var(--borderWidth);

}

.product:hover {
  padding: 10px;
}

.product:after {
  content: '';
  position: absolute;
  top: calc(-1 * var(--borderWidth));
  left: calc(-1 * var(--borderWidth));
  height: calc(100% + var(--borderWidth) * 2);
  width: calc(100% + var(--borderWidth) * 2);
  background: linear-gradient(60deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82);
  border-radius: calc(2 * var(--borderWidth));
  z-index: -1;
  animation: animatedgradient 3s ease alternate infinite;
  background-size: 300% 300%;
}

.nav-item {
  margin: 0px;
  padding: 0px;
}

.nav-item .active {
  color: green !important;
  font-weight: 700;
}

.progress {
  height: 5px;
  border-radius: 5px;
}

.progress-bar {
  border-radius: 5px;
}

#demo {
  height: 70px;
  line-height: 12px;
  -webkit-box-pack: center;
  justify-content: center;
  background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOTYiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA5NiA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8cmVjdCB3aWR0aD0iOTYiIGhlaWdodD0iNDAiIHJ4PSI0IiBmaWxsPSJ1cmwoI3BhaW50MF9saW5lYXIpIiAvPgogIDxtYXNrIGlkPSJtYXNrMCIgbWFzay10eXBlPSJhbHBoYSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgd2lkdGg9Ijk2IiBoZWlnaHQ9IjQwIj4KICAgIDxyZWN0IHdpZHRoPSI5NiIgaGVpZ2h0PSI0MCIgcng9IjQiIGZpbGw9IndoaXRlIiAvPgogIDwvbWFzaz4KICA8ZyBtYXNrPSJ1cmwoI21hc2swKSI+CiAgICA8cGF0aCBvcGFjaXR5PSIwLjMiCiAgICAgIGQ9Ik03NC4yNDQ2IC05LjAyODY5TDY1Ljg3NjcgOC45MTYyMUw3MC43NzA4IDExLjE5ODNMNjMuOTI0NCAyNS44ODA1TDg0LjQ3MjQgMTEuNjI5M0w3Ny45NDcgOC41ODY0Mkw5MC41NTgxIC0xLjQyMTU2TDc0LjI0NDYgLTkuMDI4NjlaIgogICAgICBmaWxsPSIjMUIxRDI5IiAvPgogIDwvZz4KICA8ZGVmcz4KICAgIDxsaW5lYXJHcmFkaWVudCBpZD0icGFpbnQwX2xpbmVhciIgeDE9IjM1LjcyMDkiIHkxPSIxLjY2NTQ0ZS0wNiIgeDI9IjU3Ljg4ODYiIHkyPSI0MC4wODczIgogICAgICBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+CiAgICAgIDxzdG9wIHN0b3AtY29sb3I9IiNBQTIwRkYiIC8+CiAgICAgIDxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzQxM0VGRiIgLz4KICAgIDwvbGluZWFyR3JhZGllbnQ+CiAgPC9kZWZzPgo8L3N2Zz4=) 0% 0% / cover no-repeat;
  background-repeat: no-repeat;
  padding: 0.25rem 0.5rem;
  border-radius: 0.25rem;
  color: #f2f2f2;
  width: 100%;
}

.line-letter {
  height: 3px;
  width: 100%;
  background-position-x: -30px;
  background-size: 116px 3px;
  background-image: repeating-linear-gradient(45deg, #6fa6d6, #6fa6d6 33px, transparent 0, transparent 41px, #f18d9b 0, #f18d9b 74px, transparent 0, transparent 82px);
}

.img-banner {
  max-height: 400px;
}

.flash {
  position: relative;
  border-radius: 4px;
  padding: 8px;
  width: 40%;
  height: 60px;
  border:
    4px solid;
  border-image-slice: 1;
  border-image-source: linear-gradient(to right bottom, #6a5af9, #f62682);


  /* background: linear-gradient(#C6FFDD, #FBD786, #f7797d); */
}

.imgSale img {
  top: -36px;
  position: absolute;
  width: 80px;
  height: 50px;
  right: 14px;


}

.fix-h {}

.card-img-top {
  padding: 20px;
}

.label {
  width: 100px;
  height: 28px;
  color: #f2f2f2;
  font-size: 20px;
  font-weight: 600;
  background: linear-gradient(#f12711, #f5af19);
}

.styleSale {
  font-size: 20px;
  color: #f5af19;
  font-weight: 600;
}

.runText {
  font-size: 20px;
  color: #f5af19;
  font-weight: 600;
  padding: 20px 0;
  background: linear-gradient(#FF512F, #DD2476);
  border-radius: 4px;
}

.runText-1 {
  font-size: 20px;
  color: #fff;
  font-weight: 600;
  padding: 10px 0;
  background: linear-gradient(#FF512F, #DD2476);
  border-radius: 4px;
}
</style>

<body>
  <div>
    <?php include_once(__DIR__ . '/frontend/layouts/partials/header.php'); ?>
  </div>


  <div class="container">

    <div class="row">
      <div class="col">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 img-banner" src="https://cdn.tgdd.vn/2022/09/banner/s22-800-200-800x200.png"
                alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-banner" src="https://cdn.tgdd.vn/2022/09/banner/800-200-800x200-34.png"
                alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-banner" src="https://cdn.tgdd.vn/2022/09/banner/vivo-800-200-800x200.png"
                alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-banner" src="https://cdn.tgdd.vn/2022/09/banner/800-200-800x200-25.png"
                alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div class="w-100"></div>
    <div class="row">
      <div class="col">
        <!--  -->
        <div class="line-letter"></div>
        <marquee class="runText mt-3">📢📢📢 Nhanh tay sở hữu ngay những sản phẩm trong thời gian Flash SALE ! 😘😘😘.
        </marquee>
        <div class="row">
          <div class="col d-flex justify-content-start p-3">
            <span class="ml-4 flash">

              <strong class="styleSale">Flash Sale: </strong> <span id="demo"></span>
              <div class="imgSale">
                <img src="https://cdn.iconscout.com/icon/free/png-256/flash-sale-1784958-1521598.png" alt="">
              </div>
          </div>
        </div>

        <!-- Sản phẩm mới nhất -->
        <div class="row p-3">

          <?php foreach($danhSachSanPhamMoi as $listspnew) :?>
          <div class="col">
            <!--  -->
            <a href="/website_tmdt/page_main/detail_product.php?masp=<?= $listspnew['masp']?>&math=<?= $listspnew['math']?>"
              style="text-decoration: none; color:gray ;">
              <div class="card product">
                <img src="/website_tmdt/assets/uploads/sanpham/<?= $listspnew['hinhsp'] ?>" alt="" class="card-img-top">
                <span class="badge label"> Giảm sốc
                  <?= number_format((($listspnew['giacu'] - $listspnew['giamoi']) / $listspnew['giacu']) * 100, 0, ",", ".") ?>%</span>
                <p class="p-2 name-product"><?=$listspnew['tenhang']?>

                </p>
                <br>
                <div class="d-flex justify-content-around">
                  <span class="price">
                    <?= number_format($listspnew['giacu'], 0, ",", ".") ?>
                    <?= $listspnew['donvitinh'] ?>
                  </span>

                  <span class="discount-price">
                    <?= number_format($listspnew['giamoi'], 0, ",", ".") ?>
                    <?= $listspnew['donvitinh'] ?></p>
                  </span>
                </div>
                <br>
                <div class="px-3">
                  <span class="progress mt-2">
                    <span class="progress-bar bg-danger text-center" aria-valuemin="0" style="width: 55%"
                      role="progressbar" aria-valuemax="100" aria-valuenow="100">Đã Bán <?=$listspnew['soluong']?> Sản
                      Phẩm</span>
                  </span>
                </div>

                </p>
              </div>
            </a>
            <!--  -->
          </div>
          <?php endforeach ?>

        </div>

      </div>
      <!--  -->
    </div>
    <div class="w-100"></div>


    <div class="w-100"></div>
    <div class="row">
      <div class="sologan" id="sologan">
        <h1>SẢN PHẨM GIÁ TỐT - CHỐT LIỀN TAY</h1>
        <span>Đừng vội mua nếu chưa xem giá tại <a href="#" class="name_store">An & Nhí Smart Services</a></span>
      </div>
      <marquee class="runText-1 mt-3">📢📢📢 Hãy đến với chúng tôi, bạn sẽ nhận được nhiều ưu đãi hấp dẫn ! 😘😘😘.
      </marquee>
    </div>
    <!-- End block content -->
    <div class="row card-home-page">
      <?php foreach ($arraysp as $mangsanpham) : ?>
      <a style="text-decoration: none;"
        href="./page_main/detail_product.php?masp=<?= $mangsanpham['masp'] ?>&math=<?= $mangsanpham['math'] ?>">
        <div class="col-md-3">

          <div class="card products" style="width: 18rem;">
            <div class="badge-container absolute left z-1">
              <div class="badge label" style="width: fit-content;">
                <span class="onsale">Giảm giá
                  <?= number_format((($mangsanpham['giacu'] - $mangsanpham['giamoi']) / $mangsanpham['giacu']) * 100, 0, ",", ".") ?>%</span>
              </div>
            </div>
            <img style="margin-bottom: 20px; margin-top: 60px;"
              src="/website_tmdt/assets/uploads/sanpham/<?= $mangsanpham['hinhsp'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title name-product">
                <?= $mangsanpham['tenhang'] ?>
              </h5>
              <div class="tinhtoan">
                <p class="product-price-old"><?= number_format($mangsanpham['giacu'], 0, ",", ".") ?>
                  <?= $mangsanpham['donvitinh'] ?></p>
                <p class="product-price"><?= number_format($mangsanpham['giamoi'], 0, ",", ".") ?>
                  <?= $mangsanpham['donvitinh'] ?></p>
              </div>
              <?php
                  if (!isset($_SESSION['makh'])) { ?>
              <div class="d-flex justify-content-between">
                <div class="">
                  <form
                    action="/website_tmdt/customer/login-register/dangnhap_dangky.php?themgiohang=<?= $themgiohang ?>"
                    method="post">
                    <fieldset>
                      <input type="hidden" name="tenhang" value="<?= $mangsanpham['tenhang'] ?>">
                      <input type="hidden" name="masp" value="<?= $mangsanpham['masp'] ?>">
                      <input type="hidden" name="giasanpham" value="<?= $mangsanpham['giamoi'] ?>">
                      <input type="hidden" name="hinhsanpham" value="<?= $mangsanpham['hinhsp'] ?>">
                      <input type="hidden" name="soluong" value="1">
                      <input type="submit" name="themgiohang" value="Giỏ hàng" class="btn btn-outline-info">
                      </input>
                    </fieldset>
                  </form>
                </div>

                <div class=" btn btncard">
                  <a style="text-decoration: none; color:#fff;"
                    href="./page_main/detail_product.php?masp=<?= $mangsanpham['masp'] ?>&math=<?= $mangsanpham['math'] ?>">
                    Mua Ngay
                </div>
              </div>
              <?php  } else { ?>
              <div class="d-flex justify-content-between">
                <div class="">
                  <form action="/../website_TMDT/customer/giohang.php" method="post">
                    <fieldset>
                      <input type="hidden" name="tenhang" value="<?= $mangsanpham['tenhang'] ?>">
                      <input type="hidden" name="masp" value="<?= $mangsanpham['masp'] ?>">
                      <input type="hidden" name="giasanpham" value="<?= $mangsanpham['giamoi'] ?>">
                      <input type="hidden" name="hinhsanpham" value="<?= $mangsanpham['hinhsp'] ?>">
                      <input type="hidden" name="soluong" value="1">
                      <input type="hidden" name="makh" value="<?= $kh['makh'] ?>">
                      <input type="submit" name="themgiohang" value="Giỏ hàng" class="btn btn-outline-info">

                    </fieldset>
                  </form>
                </div>
                <div class=" btn btncard">
                  <a style="text-decoration: none; color:#fff;"
                    href="./page_main/detail_product.php?masp=<?= $mangsanpham['masp'] ?>&math=<?= $mangsanpham['math'] ?>">
                    Mua Ngay
                </div>
              </div>
              <?php } ?>

            </div>
          </div>
        </div>
      </a>
      </a>
      <?php endforeach; ?>
    </div>

    <?php
      include './page_main/pagination.php';
      ?>

  </div>

  </div>
  <?php include_once(__DIR__ . '/frontend/layouts/partials/footer.php'); ?>

  <script>
  var countDownDate = new Date("Oct 5, 2022 13:37:25").getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("demo").innerHTML = days + " Ngày " + hours + " Giờ " +
      minutes + " Phút " + seconds + " Giây ";

    // If the count down is finished, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "Đã Hết Giảm Giá";
    }
  }, 1000);


  $('.owl-carousel').owlCarousel({
    loop: true,
    items: 5,
    margin: 20,
    nav: true,
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true
  })

  function startTimer(duration, display) {
    var timer = duration,
      hours, minutes, seconds;
    setInterval(function() {
      hours = parseInt(timer / 3600, 10);
      minutes = parseInt(timer % 3600 / 60, 10);
      seconds = parseInt(timer % 60, 10);

      hours = hours < 10 ? "0" + hours : hours;
      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;

      display.textContent = hours + ":" + minutes + ":" + seconds;

      if (--timer < 0) {
        timer = duration;
      }
    }, 1000);
  }

  window.onload = function() {
    var fiveMinutes = 60 * 60,
      display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
  };
  </script>
</body>

</html>