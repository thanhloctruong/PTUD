<body>
<div class="list" style="padding:10px;">
    <center><h3>DANH SÁCH Nhà Cung Cấp</h3></center>
    <table class="table table">
        <thead class="table table-dark">
            <tr>
                <td>STT</td>
                <td>Mã NCC</td>
                <td>Họ Tên</td>
                <td>Địa Chỉ</td>
                <td>Số điện thoại</td>
                <td>Email</td>
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
                            <td><?php echo $row['SupplierID']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['EmployeeID']; ?></td>

                            <td>
                                <form action="" method="POST">
                                    <a class="btn btn-primary" href="index.php?update=<?php echo $row['SupplierID']?>">Cập nhật</a>
                                </form>
                            </td>
                    </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>
</body>