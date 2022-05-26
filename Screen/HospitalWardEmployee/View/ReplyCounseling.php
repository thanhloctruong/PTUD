<!-- <div>Tư vấn</div> -->
<<<<<<< HEAD
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
=======
<div class="page-banner overlay-dark bg-image" style="background-image: url(../../view/Assets/img/bg_image_1.jpg);">
>>>>>>> 3e74ed573d593cbb006684d1599280737fe4be50
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tư vấn cho bệnh nhân</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">Tư vấn cho bệnh nhân</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<<<<<<< HEAD
<form class="contact-form mt-5" action="index.php?act=send" method="POST">
<div class="row mb-3">
        <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Câu hỏi:</label>
=======
<form class="contact-form mt-5" action="" method="POST">
<div class="row mb-3">
        <div class="col-12 py-2 wow fadeInUp">
            <b for="message">Câu hỏi:</b>
>>>>>>> 3e74ed573d593cbb006684d1599280737fe4be50
            <?php
            // echo $idRequest;
            if(isset($result) && $result !=0){
                echo $result["CauHoi"];

            }
            ?>
        </div>
        <div class="col-12 py-2 wow fadeInUp">
<<<<<<< HEAD
            <label for="message">Nhập câu trả lời</label>
=======
            <b for="message">Nhập câu trả lời</b>
>>>>>>> 3e74ed573d593cbb006684d1599280737fe4be50
            <input id="mess" class="form-control" rows="8" name="mess" placeholder="Enter Message.."></input>
        </div>
    </div>
    <!-- <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button> -->
    <input type="submit" value="Send Mesage" name="send" class="btn btn-primary wow zoomIn">
</form>