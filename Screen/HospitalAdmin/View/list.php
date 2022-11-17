<body>

<div class="page-banner overlay-dark bg-image" style="background-image: url(../../view/Assets/img/cus.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Quản lí Khách hàng</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">DANH SÁCH KHÁCH HÀNG</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->
<div class="list" style="padding:10px;">
   
    <table class="table table">
        <thead class="table table-dark">
            <tr>
                <td>STT</td>
                <td>Mã khách hàng</td>
                <td>Họ Tên</td>
                <td>Địa Chỉ</td>
                <td>Số điện thoại</td>
                <td>Email</td>
                <td>Ngày Sinh</td>
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
                            <td><?php echo $row['CustomerID']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['EmployeeID']; ?></td>

                            <td>
                                <form action="" method="POST">
                                    <a class="btn btn-primary" href="index.php?update=<?php echo $row['CustomerID']?>">Cập nhật</a>
                                </form>
                            </td>
                    </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
    <a class="btn btn-primary ml-lg-6 " style="margin-left:45%    " href="index.php?act=quanlyttbv">Back</a>
</div>
</body>