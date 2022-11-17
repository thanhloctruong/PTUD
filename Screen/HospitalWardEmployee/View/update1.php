<center>
    <div class="capnhat" style="padding: 10px;">
        <span>
            <h4>CẬP NHẬT THÔNG TIN ĐƠN HÀNG</h4>
        </span>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Mã Order:</td>
                    <td><input type="text" class="form-control" name="orderID" style="width:300px" value="<?php echo $od ?>" readonly></td>
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
                    <td>Địa chỉ:</td>
                    <td><input type="text" class="form-control" name="shipaddress" style="width:300px" value="<?php echo $address ?>"></td>
                </tr>
                <tr>
                    <td>Tên Sản Phẩm:</td>
                    <td><input type="text" class="form-control" name="name" style="width:300px" value="<?php echo $name ?>"></td>
                </tr>
                <tr>
                    <td>Ngày giao:</td>
                    <td><input type="date" class="form-control" name="shipdate" style="width:300px" value="<?php echo $shipdate ?>"></td>
                </tr>

            </table>
            <input type="submit" value="Cập nhật" name="btnupdate" class="btn btn-primary">
        </form>
    </div>
</center>