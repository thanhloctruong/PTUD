<!-- <div>Tư vấn</div> -->
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
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

<form class="contact-form mt-5" action="'index.php?act=traloi'" method="POST">
<div class="row mb-3">
        <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Câu hỏi:</label>
            <?php
            // if(isset($result) && $result !=0){
            //     echo $result[];

            // }
            ?>
        </div>
        <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Nhập câu trả lời</label>
            <textarea id="message" class="form-control" rows="8" placeholder="Enter Message.."></textarea>
        </div>
    </div>
    <!-- <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button> -->
    <input type="submit" value="Send Mesage" name="search" class="btn btn-primary wow zoomIn">
</form>