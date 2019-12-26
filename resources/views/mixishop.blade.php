<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-branch" href="#">
            <img src="/image/logo-mixi-tét.png" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Đăng ký</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Đăng nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Giỏ hàng</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Carousel -->
<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/image/62406497_368613760515423_2353342164936687616_n.jpg">
{{--            <div class="carousel-caption">--}}
{{--                <h1 class="display-2">Welcom</h1>--}}
{{--                <h3>Autolayout with Boostrap</h3>--}}
{{--                <button type="button" class="btn btn-outline-light btn-lg">--}}
{{--                    VIEW TUTORIALS--}}
{{--                </button>--}}
{{--                <button type="button" class="btn btn-primary btn-lg">Get started</button>--}}
{{--            </div>--}}
        </div>

        <div class="carousel-item">
            <img src="/image/ảnh-bìa-mixishop-1-1400x531.png">
        </div>

    </div>
</div>
<!-- jumbotron -->
{{--<div class="container-fluid">--}}
{{--    <div class="jumbotron">--}}
{{--        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">--}}
{{--            <p>This is an example of using Bootstrap to make a responsive Website. This is a tutorial</p>--}}
{{--        </div>--}}
{{--        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">--}}
{{--            <a href="#">--}}
{{--                <button type="button" class="btn btn-outline-secondary">Buy a host</button>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<hr class="my-4">
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h3 class="display">Sản phẩm bán chạy nhất</h3>
        </div>
        <!-- Horizontal Rule -->
{{--        <hr class="my-4">--}}
{{--        <div class="col-12">--}}
{{--            <p>Welcome my Bootstrap 4 tutorials. Bootstrap is an open-source and free front-end library with HTML and CSS based design</p>--}}
{{--        </div>--}}
    </div>
</div>
<div class="container padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4 ">
{{--            <i class="fab fa-react"></i>--}}
            <img src="/image/áo-phông-mixi-1-533x800.jpg" alt="" width="250px" height="300px">
            <h5>Áo Mixi</h5>
            <a href="#">
                <button type="button" class="btn btn-outline-secondary">Đặt mua</button>
            </a>

        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <img src="/image/ÁO-REFUND-GAMING.png" width="300px" height="300px">
            <h5>Áo Refund</h5>
            <a href="#">
                <button type="button" class="btn btn-outline-secondary">Đặt mua</button>
            </a>
        </div>
        <div class="col-sm-12 col-md-4">
{{--            <i class="fab fa-css3"></i>--}}
            <img src="/image/Áo-PUBG-pochinki-is-my-city-768x768.jpg" alt="" width="250px" height="300px">
            <h5>Áo PUBG</h5>
            <a href="#">
                <button type="button" class="btn btn-outline-secondary">Đặt mua</button>
            </a>
        </div>
    </div>
    <hr>
</div>
<div class="container-fluid padding">
    <div class="row padding container">
        <div class="col-md-12 col-lg-6">
            <h2>Sản phẩm hot</h2>
            <p>Áo hoodie Mixi classic màu đen, nỉ chân cua dày, 100% cotton</p>
            <p>Áo khoác Mixi đen siêu đẹp, hàng cao cấp chính hãng</p>
            <br>
        </div>
        <div class="col-lg-6">
            <img src="/image/áo-khoác-mixi-5-533x800.jpg" class="img-fluid" width="250" height="250">
            <img src="/image/áo-khoác-mixi-8-533x800.jpg" class="img-fluid" width="100" height="100">
            <img src="/image/áo-phông-mixi-2-247x296.jpg" class="img-fluid" width="100" height="100">

        </div>
    </div>
</div>
<hr class="my-2">
<button class="fun" data-toggle="collapse" data-target="#emoji">
    Click for fun
</button>
<div id="emoji" class="collapse">
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-sm-6 col-md-3">
                <img class="gif" src="./images/gif/blinkEyes.gif" width="100" height="100">
            </div>
            <div class="col-sm-6 col-md-3">
                <img class="gif" src="./images/gif/blinkGirl.gif" width="100" height="100">
            </div>
            <div class="col-sm-6 col-md-3">
                <img class="gif" src="./images/gif/faceHaha.gif" width="100" height="100">
            </div>
            <div class="col-sm-6 col-md-3">
                <img class="gif" src="./images/gif/haha.gif" width="100" height="100">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Meet our team members</h1>
        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="./images/nguyenduchoang.png">
                <div class="card-body">
                    <h4 class="card-title">Nguyen Duc Hoang</h4>
                    <p class="card-text">Nguyen Duc Hoang is a fullstack developer with 12 years of experiences</p>
                    <a href="#" class="btn btn-outline-secondary">See profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="./images/johndoe.png">
                <div class="card-body">
                    <h4 class="card-title">
                        John Doe
                    </h4>
                    <p class="card-text">John Doe is a web developer, he worked for some startup and technology companies</p>
                    <a href="#" class="btn btn-outline-secondary">See profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="./images/Natasha.png">
                <div class="card-body">
                    <h4 class="card-title">
                        Natasha
                    </h4>
                    <p class="card-text">Natasha is a web designer, she has 5 years of experiences in UI/UX</p>
                    <a href="#" class="btn btn-outline-secondary">See profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-12 col-lg-6">
            <h2>Our vision</h2>
            <p>All our work is for customer satisfaction with high quality products</p>
            <p>We make outsourcing all softwares relating to CMS, Database, Education</p>
            <br>
        </div>
        <div class="col-lg-6">
            <img src="./images/mission.jpg" class="img-fluid">
        </div>
    </div>
    <hr class="my-4">
</div>
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Contact us</h2>
        </div>
        <div class="col-12 social padding">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <img src="./images/logo.png">
                <hr class="light">
                <p>111-222-3333</p>
                <p>mymail@gmail.com</p>
                <p>Bach Mai street, Hanoi, Vietnam</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Working hours</h5>
                <hr class="light">
                <p>Monday-Friday: 8am - 5pm</p>
                <p>Weekend: 8am - 12am</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Services</h5>
                <hr class="light">
                <p>Outsourcing</p>
                <p>Website development</p>
                <p>Mobile applications</p>
            </div>
            <div class="col-12">
                <hr class="light-100">
                <h5>&copy; WebPro</h5>
            </div>
        </div>
    </div>
</footer>
</body>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
