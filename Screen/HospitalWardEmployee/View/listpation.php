<div class="list" style="padding:10px;">
    <center>
        <h3 style="padding:20px 0px;">DANH SÁCH BỆNH NHÂN</h3>
    </center>
    <table class="table table">
        <thead class="table table-dark">
            <tr>
                <td>STT</td>
                <td>Tên Sản Phẩm</td>
                <td>Mã Order</td>
                <td>Mã Khách Hàng</td>
                <td>Mã Nhân Viên</td>
                <td>Số Lượng</td>
                <td>Ngày mua</td>
                <td>Ngày Giao</td>
                <td>Địa Chỉ</td>   
                

            </tr>
        </thead>
        <tbody class="table table-striped">
            <?php
            $result = getlist($sql);
            $i = 0;
            foreach ($result as $row) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['productname']; ?></td>
                    <td><?php echo $row['OdersID']; ?></td>
                    <td><?php echo $row['CustomerID']; ?></td>
                    <td><?php echo $row['EmployeeID']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['orderdate']; ?></td>
                    <td><?php echo $row['shipdate']; ?></td>
                    <td><?php echo $row['shipaddress']; ?></td>
                    
                

                    <td>
                        <form action="" method="POST">
                            <a class="btn btn-primary" href="index.php?update=<?php echo $row['OdersID'] ?>">Cập nhật</a>
                        </form>
                    </td>
                    
                   

                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>