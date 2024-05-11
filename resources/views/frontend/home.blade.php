<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao diện</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ec3be08b3f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <!--Header-->
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">
                    <img src="./assets/img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark me-3" href='/'>Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark me-3" href="/product">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark me-3" href="post.html">Bài viết</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="contact.html">Liên hệ</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#"><i class="fa-solid fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
    <!--end header-->

    
    <!--Slider-->

    <!-- Carousel -->
    <div class="container">
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
    
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
    
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.watchstore.vn/images/products/collection/slideshow/2024/04/08/compress/banner-tieu-rolex_1712583819.webp" style="height: 450px;width: 1300px;"alt="Slider1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://wscdn.vn/upload/original-image/uploads/news/watchstore-dai-ly-uy-quyen-dong-ho-chinh-hang-1650256477493.jpg" style="height: 450px;width: 1300px;" alt="Slider2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.watchstore.vn/upload_images/images/news/2024/kinh-nghiem-chon-mua-dong-ho-gshock-nu-1636774125884.jpg" style="height: 450px;width: 1300px;"alt="Slider3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
    
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>
    <!--End slider-->

    <!--Category-->
    <div class="container">
        <div id="category">
            <ul class="navbar-nav me-auto mb-2">
                <li class="nav-item ml-3"><a href="#">Casio</a></li>
                <li class="nav-item ml-3"><a href="#">Tissot</a></li>
                <li class="nav-item ml-3"><a href="#">Certina</a></li>
                <li class="nav-item ml-3"><a href="#">Omega</a></li>
            </ul>
        </div>
    </div>
    <!--End Category-->

    <!--Product New-->
    <div class="container">
        <h2 class="text-center text-danger">Sản phẩm mới</h2>
        <div class="row row-cols-lg-4 g-2 g-lg-3">

            <div class="col">
                <div class="card">
                    <img src="https://www.watchstore.vn/images/products/2024/resized/1-khung-sp-1-1818542633-1853976209-1712485280.webp" class="card-img-top" alt="product">
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Casio - Nam MTP-1374L-1AVDF Size 43.5mm</h5>
                            <h4 class="price text-danger">2.210.000vnd</h4>
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block "><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i class="fa-solid fa-eye"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col">
                <div class="card">
                    <img src="https://www.watchstore.vn/images/products/2024/resized/1-khung-sp-1-1818542633-1853976209-1712485280.webp" class="card-img-top" alt="product">
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Casio - Nam MTP-1374L-1AVDF Size 43.5mm</h5>
                            <h4 class="price text-danger">2.210.000vnd</h4>
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block "><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i class="fa-solid fa-eye"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://www.watchstore.vn/images/products/2024/resized/1-khung-sp-1-1818542633-1853976209-1712485280.webp" class="card-img-top" alt="product">
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Casio - Nam MTP-1374L-1AVDF Size 43.5mm</h5>
                            <h4 class="price text-danger">2.210.000vnd</h4>
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block "><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i class="fa-solid fa-eye"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://www.watchstore.vn/images/products/2024/resized/1-khung-sp-1-1818542633-1853976209-1712485280.webp" class="card-img-top" alt="product">
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Casio - Nam MTP-1374L-1AVDF Size 43.5mm</h5>
                            <h4 class="price text-danger">2.210.000vnd</h4>
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block "><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i class="fa-solid fa-eye"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://www.watchstore.vn/images/products/2024/resized/1-khung-sp-1-1818542633-1853976209-1712485280.webp" class="card-img-top" alt="product">
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Casio - Nam MTP-1374L-1AVDF Size 43.5mm</h5>
                            <h4 class="price text-danger">2.210.000vnd</h4>
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block "><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i class="fa-solid fa-eye"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://www.watchstore.vn/images/products/2024/resized/1-khung-sp-1-1818542633-1853976209-1712485280.webp" class="card-img-top" alt="product">
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Casio - Nam MTP-1374L-1AVDF Size 43.5mm</h5>
                            <h4 class="price text-danger">2.210.000vnd</h4>
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block "><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i class="fa-solid fa-eye"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://www.watchstore.vn/images/products/2024/resized/1-khung-sp-1-1818542633-1853976209-1712485280.webp" class="card-img-top" alt="product">
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Casio - Nam MTP-1374L-1AVDF Size 43.5mm</h5>
                            <h4 class="price text-danger">2.210.000vnd</h4>
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block "><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i class="fa-solid fa-eye"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://www.watchstore.vn/images/products/2024/resized/1-khung-sp-1-1818542633-1853976209-1712485280.webp" class="card-img-top" alt="product">
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Casio - Nam MTP-1374L-1AVDF Size 43.5mm</h5>
                            <h4 class="price text-danger">2.210.000vnd</h4>
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block "><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i class="fa-solid fa-eye"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
            <button class="btn btn-success" type="button">Xem thêm <i class="fa-solid fa-arrow-right"></i></button>
        </div>

    </div>
    <!--End Product New-->


    <!--Product Sale-->
    <div class="container">
        <h2 class="text-center text-danger">Sản phẩm giảm giá</h2>
        <div class="row row-cols-lg-4 g-2 g-lg-3">
            <div class="col">
                <div class="card">
                    <img src="https://www.watchstore.vn/images/products/2024/resized/1-khung-sp-1-1818542633-1853976209-1712485280.webp" class="card-img-top" alt="product">
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Casio - Nam MTP-1374L-1AVDF Size 43.5mm</h5>
                            <h4 class="price text-danger">2.210.000vnd</h4>
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block "><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i class="fa-solid fa-eye"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://www.watchstore.vn/images/products/2024/resized/1-khung-sp-1-1818542633-1853976209-1712485280.webp" class="card-img-top" alt="product">
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Casio - Nam MTP-1374L-1AVDF Size 43.5mm</h5>
                            <h4 class="price text-danger">2.210.000vnd</h4>
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block "><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i class="fa-solid fa-eye"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://www.watchstore.vn/images/products/2024/resized/1-khung-sp-1-1818542633-1853976209-1712485280.webp" class="card-img-top" alt="product">
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Casio - Nam MTP-1374L-1AVDF Size 43.5mm</h5>
                            <h4 class="price text-danger">2.210.000vnd</h4>
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block "><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i class="fa-solid fa-eye"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://www.watchstore.vn/images/products/2024/resized/1-khung-sp-1-1818542633-1853976209-1712485280.webp" class="card-img-top" alt="product">
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Casio - Nam MTP-1374L-1AVDF Size 43.5mm</h5>
                            <h4 class="price text-danger">2.210.000vnd</h4>
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block "><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i class="fa-solid fa-eye"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
            <button class="btn btn-success" type="button">Xem thêm <i class="fa-solid fa-arrow-right"></i></button>
        </div>

    </div>
    <!--End Product Sale-->


    <!--Post New-->
    <div class="container">
        <h2 class="text-center text-danger">Bài viết mới</h2>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://www.watchstore.vn/images/albums/resized/11-1871112100-737619434_1711878831.webp" class="img-fluid rounded-start" alt="post">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Name</h5>
                        <p class="card-text">Hơn 20 thương hiệu đồng hồ chính hãng nổi tiếng đến từ Nhật Bản, Thụy Sỹ, Pháp… hiện đang được trưng bày tại các showroom 
                            của đồng hồ WatchStore trên toàn quốc. Cam kết 100% sản phẩm chính hãng được trợ giá tốt nhất thị trường.</p>
                        <p class="card-text"><small class="text-muted">Cập nhật 7 phút trước</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://www.watchstore.vn/images/albums/resized/8-1684183425-2141744429-1_1711878532.webp" class="img-fluid rounded-start" alt="post">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Name</h5>
                        <p class="card-text">Hơn 20 thương hiệu đồng hồ chính hãng nổi tiếng đến từ Nhật Bản, Thụy Sỹ, Pháp… hiện đang được trưng bày tại các showroom 
                            của đồng hồ WatchStore trên toàn quốc. Cam kết 100% sản phẩm chính hãng được trợ giá tốt nhất thị trường.</small></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--End Post New-->

    <!--Footer-->
    <div class="container">
        <footer>
            <div class="row">
                <div class="col-sm-3">
                    <div className="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h5 className="footer text-center">Information</h5>
                        <img src="./assets/img/logo.png" className="img-fluid" alt="LOGO" />
                        <h6 className='text-danger'>
                            WATCH STORE
                        </h6>
                        <p>Tel: 0868605520</p>
                        <p>Địa chỉ: 103, Đường số 11, Phường Tăng Nhơn Phú B, Quận 9, TPHCM</p>
                        <p>Email: phananhtai@gmail.com</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div className="col-md-5 col-lg-5 col-xl-3 mx-auto mb-2">
                        <h5 className="text-center">Home</h5>
                        <p><a href="" className="text-reset text-dark">Trang chủ</a></p>
                        <p><a href="" className="text-reset text-dark">Sản phẩm</a></p>
                        <p><a href="" className="text-reset text-dark">Danh mục sản phẩm</a></p>
                        <p><a href="" className="text-reset text-dark">Thương hiệu sản phẩm</a></p>
                        <p><a href="" className="text-reset text-dark">Thông tin liên hệ</a></p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div className="col-md-3 col-lg-3 col-xl-3mx-auto mb-3 ">
                        <h5 className="text-uppercase fw-bold mb-2">
                            Chính sách cửa hàng
                        </h5>
                        <p><a href="" className="text-reset text-dark">Giới thiệu</a></p>
                        <p><a href="" className="text-reset text-dark">Chính sách mua hàng</a></p>
                        <p><a href="" className="text-reset text-dark">Chính sách bảo hành</a></p>
                        <p><a href="" className="text-reset text-dark">Chính sách vận chuyển</a></p>
                        <p><a href="" className="text-reset text-dark">Điều khoản đổi trả</a></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div className="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <div id="text-4" className="widget widget_text">
                            <h5 className="h-widget fw-bold mb-4">Thời gian</h5>
                            <p>Thứ 2 - Thứ 6: 8:00 – 16:00 </p>
                            <p>Thứ 7: 8:00 – 18:00</p>
                            <p>Chủ nhật: 7:00 - 21:00</p>
                            <i class="fa-solid fa-envelope me-2"></i>
                            <i class="fa-brands fa-facebook me-2"></i>
                            <i class="fa-brands fa-instagram me-2"></i>
                            <i class="fa-solid fa-phone"></i>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h6 class="text-center">Phan Anh Tài</h6>
        </footer>
    </div>
    <!--End Footer-->
    <!-- Các phần còn lại của trang web -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>