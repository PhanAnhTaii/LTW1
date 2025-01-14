<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lien he</title>
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
                            <a class="nav-link text-dark me-3" href="index.html">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark me-3" href="product.html">Sản phẩm</a>
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


    <!--Contact-->
    <div class="container">
        <h1 class="text-center text-danger">Liên hệ</h1>
        <div class="row">
            <div class="col-md-2 w-50">
                <div class="mx-2 mb-4">
                    <div class="card-body">
                        <div class="span3">
                            <h4 class="text-primary">WatchStore</h4>
                            <p>103, Đường số 11, Phường Tăng Nhơn Phú B, Quận 9, TPHCM</p>
                            <p>Phone: 0868605520</p>
                            <p>Email: <a href="https://www.free-css.com/free-css-templates">phananhtai@gmail.com</a></p>
                            <p>website: <a href="https://www.free-css.com/free-css-templates">www.watchstore.com</a></p>
                            <h4 class="text-primary">Liên hệ và góp ý cho WatchStore</h4>
                            <form action="">
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Tên:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name"
                                        name="name">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email"
                                        name="email">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="phone" class="form-label">Số điện thoại:</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Enter phone"
                                        name="phone">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="title" class="form-label">Tiêu đề:</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter title"
                                        name="title">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="content" class="form-label">Nội dung:</label>
                                    <input type="text" class="form-control" id="content" placeholder="Enter content"
                                        name="content">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 w-50">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.689413027423!2d106.77104057405433!3d10.83506348931728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175271926ac9251%3A0x5423bb98a562dab8!2zODkvMS82NC8yNCDEkC4gU-G7kSA4LCBUxINuZyBOaMahbiBQaMO6IEIsIFF14bqtbiA5LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1715201701416!5m2!1svi!2s"
                        width="100%" height="90%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </iframe>
            </div>
        </div>
    </div>
    <!--End Contact-->


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