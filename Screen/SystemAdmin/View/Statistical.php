
<style>
.viewTK{
    padding: 20px;
}
table{
    text-align: center;
}
form{
    font-size: large;
}
thead{
    font-size: larger;
}
h2{
    font-family:'Segoe UI', Tahoma, Verdana, sans-serif;
}
</style>
<div class="viewTK">
   
    <table class="table table">
        <h2 class="text text-danger"><center>Danh Sách Tài Khoản </center></h2>
        <thead class="table table-dark">
            <tr>
                <td>STT</td>
                <td> UserID</td>
                <td>Tên Đăng Nhập</td>
                <td>Họ Tên</td>
                <td> Email</td>
                <td>Role</td>
                <td>SDT</td>
            </tr>
        </thead>
        <tbody class="table table-striped">
        <?php
            $result=getlist($sql);
            $i=0;
            foreach($result as $row){
                $i++;
        ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['UserID']; ?></td>
                        <td><?php echo $row['TenDangNhap']; ?></td>
                        <td><?php echo $row['HoTen']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Role']; ?></td>
                        <td><?php echo $row['SDT']; ?></td>

                    </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>
