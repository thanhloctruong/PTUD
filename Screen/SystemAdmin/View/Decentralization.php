<body>
<div class="list" style="padding:10px;">
    <center><h3>DANH SÁCH TÀI KHOẢN</h3></center>
    <table class="table table">
        <thead class="table table-dark">
            <tr>
                <td>STT</td>
                <td>Mã Tài Khoản</td>
                <td>Họ Tên</td>
                <td>Email</td>
                <td>SDT</td>
                <td>Role</td>

                
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
                            <td><?php echo $row['UserID']; ?></td>
                            <td><?php echo $row['HoTen']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['SDT']; ?></td>
                            <td><?php echo $row['Role']; ?></td>
                          
                            
        
                            <td>
                                <form action="" method="POST">
                                    <a class="btn btn-primary" href="index.php?update=<?php echo $row['UserID']?>">Phân Quyền</a>
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