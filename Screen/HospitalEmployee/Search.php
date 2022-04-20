<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tra cứu, tìm kiếm thông tin bệnh nhân</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">Tra cứu, tìm kiếm thông tin bệnh nhân</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<form class="contact-form mt-5">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Nhập mã hồ sơ bệnh nhân</h1>
        <div class="row mb-3">
            <div class="col-sm-3 input-group mb-3 wow fadeInLeft">
            </div>
            <div class="col-sm-6 input-group mb-3 wow fadeInLeft">
                <input type="text" class="form-control" name="txtTimKiem" placeholder="Nhập mã hồ sơ bệnh nhân...">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="search">Tìm kiếm</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
    if (isset($txt_err_lg) && ($txt_err_lg != "")) {
        echo "<h3 style='color:red;'>" . $txt_err_lg . "</h3>";
    }
?>