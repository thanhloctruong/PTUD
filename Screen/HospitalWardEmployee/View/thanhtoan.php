<div class="page-banner overlay-dark bg-image" style="background-image: url(../../view/Assets/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Xuất Hoá Đơn</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">Thông tin Hoá Đơn</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<form class="contact-form mt-5" action="index.php?act=thanhtoan" method="POST">
    <div class="container">
        
    <h1 class="text-center wow fadeInUp">Hoá đơn</h1>
        
    </div>
    </form>
    <center>
    <div class="capnhat" style="padding: 10px;">
        <form action="thanhtoan" method="POST">
            <table>
            <tr>
                    <td>Tên Sản Phẩm:</td>
                    <td><input type="text" class="form-control" name="name" style="width:300px" value="<?php echo $name ?>"></td>
                </tr>
                <tr>
                    <td>Mã Order:</td>
                    <td><input type="text" class="form-control" name="orderID" style="width:300px" value="<?php echo $od ?>" read   only></td>
                </tr>
                <tr>
                    <td>Mã Khách Hàng:</td>
                    <td><input type="text" class="form-control" name="customerID" style="width:300px" value="<?php echo $cus ?>"></td>
                </tr>
                <tr>
                    <td>Mã Nhân Viên:</td>
                    <td><input type="text" class="form-control" name="employeeID" style="width:300px" value="<?php echo $emp ?>"></td>
                </tr>
               
                <tr>
                    <td>Ngày mua:</td>
                    <td><input type="date" class="form-control" name="orderdate" style="width:300px" value="<?php echo $oddate ?>"></td>
                </tr>
                <tr>
                    <td>Số Lượng:</td>
                    <td><input type="text" class="form-control" name="quantity" style="width:300px" value="<?php echo $quantity ?>"></td>
                </tr>

                <tr>
                    <td>Đơn Giá:</td>
                    <td><input type="text" class="form-control" name="quantity" style="width:300px" value="<?php echo $quantity*2000 ?>"></td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td><input type="text" class="form-control" name="address" style="width:300px" value="<?php echo $address ?>"></td>
                </tr>
                
            </table>
            <br><br>
            <form action="">
                <tr>
                    <td>
                    <a class="btn btn-primary ml-lg-6 " style="margin-left:5%    " href="index.php?act=thongke">Back</a>
                    </td>
                    <td>
                    <a class="btn btn-primary ml-lg-6 " style="margin-left:5%    " href="index.php?act=taobarcode">Tạo Barcode Thanh toán </a>
                    </td>
                </tr>
            </form>
            
        </form>
    </div>
</center>

