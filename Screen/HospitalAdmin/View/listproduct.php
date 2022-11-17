<body>
<div class="page-banner overlay-dark bg-image" style="background-image: url(../../view/Assets/img/pro.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Quản lí Sản Phẩm </li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">DANH SÁCH SẢN PHẨM </h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->
<div class="list" style="padding:10px;">
   
    <table class="table table">
        <thead class="table table-dark">
            <tr>
                <td>STT</td>
                <td>Mã Sản Phẩm</td>
                <td>Tên Sản Phẩm</td>

                <td>Đơn giá</td>
                <td>Số lượng</td>
                <td>Mô tả</td>
                <td>Mã loại sản phẩm</td>
                <td>Mã Nhân Viên QL</td>
            </tr>
        </thead>
        <tbody class="table table-striped"> 
        <?php
            $result = getlist($sql);
            $i=0;
            foreach($result as $row){
                $i++;
        ?>
                    <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['ProductID']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['unitprice']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php echo $row['mota']; ?></td>
                            <td><?php echo $row['CategoryID']; ?></td>
                            <td><?php echo $row['EmployeeID']; ?></td>

                            <td>
                                <form action="" method="POST">
                                    <a class="btn btn-primary" href="index.php?updateproduct=<?php echo $row['ProductID']?>">Cập nhật</a>
            </form>
                            </td>

                            <td>
                                <form action="" method="POST">
                                    <a class="btn btn-primary" href="index.php?act=taobarcode">Tạo Barcode</a>
            </form>
                            </td>
                    </tr>

                   

        <?php
            }
        ?>
        </tbody>
    </table>
    
   
                     <a class="btn btn-primary ml-lg-6 " style="margin-left:45%    " href="index.php?act=quanlyttsp">Back</a>
                    
</div>
</body>