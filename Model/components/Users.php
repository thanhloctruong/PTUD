<?php
    function checkuser($user,$pass){
        $sql="select * from taikhoan where TenDangNhap='".$user."' and MatKhau='".$pass."'";
        return getone($sql);
    }

    function adduser($user, $pass, $role, $phone, $name, $email){
        $sql="INSERT INTO taikhoan (TenDangNhap, MatKhau, Role, SDT, HoTen, Email) VALUES ('$user', '$pass', '$role', '$phone','$name', '$email')";
        return addsql($sql);
    }

    function updatepass($user,$pass){
        $sql="UPDATE taikhoan set MatKhau='".$pass."' where TenDangNhap='".$user."'";
        return execsql($sql,0);
    }
    
    function finduser($user){
        $sql="select * from taikhoan where TenDangNhap='".$user."'";
        return getone($sql);
    }

    function getPassHash($user){
        $sql="select MatKhau from taikhoan where TenDangNhap='".$user."'";
        return getone($sql);
    }

    function get_user_by_id($user_id) {
        $sql = "SELECT * FROM taikhoan WHERE UserID = $user_id";
        return getone($sql);
    }
    
    // function update_user_by_id($update_info, $user_id) {
    //     // được phép chỉnh sửa địa chỉ, sdt, họ tên, ngày sinh
    //     $address = $update_info['address'];
    //     $phone = $update_info['phone'];
    //     $email = $update_info['email'];
    //     $name = $update_info['name'];
    //     $dob = $update_info['dob'];
    //     $sql = "UPDATE taikhoan SET address = '$address', phone = '$phone', name = '$name', date = '$dob', email = '$email' WHERE id = $user_id";
    //     execsql($sql, 1);
    //     return true;
    // }
    function update_user_by_id($update_info, $user_id) {
        // được phép chỉnh sửa địa chỉ, sdt, họ tên, ngày sinh
        $address = $update_info['address'];
        $phone = $update_info['phone'];
        $email = $update_info['email'];
        $name = $update_info['name'];
        $dob = $update_info['dob'];
        $cccd = $update_info['cccd'];
        $sql = "UPDATE taikhoan SET DiaChi = '$address', SDT = '$phone', HoTen = '$name', NgaySinh = '$dob', Email = '$email', CCCD = '$cccd' WHERE MaTaiKhoan = $user_id";
        execsql($sql, 1);
        return true;
    }
    function add( $name,$address,$phone, $email,$date,$emp){
        $sql="INSERT INTO customer(Name,address,phone,email,age,EmployeeID)
         VALUES('$name','$address','$phone','$email','$date','$emp');";
         addsql($sql);
    }
    // function update($address, $socamac, $name,$socakhoi,$tang,$id)
    // {
    //     $sql="UPDATE benhvien 
    //     Set TenBenhVien ='$name',DiaChi='$address',TangSo='$tang',SoCaMac='$socamac',SoCaKhoi='$socakhoi', MaBenhVien=$id";
    //     updatesql($sql);
    // }
    function  add_donhangban($name, $cus,  $quantity, $oddate, $shipdate,$address, $role, $emp)
    {
        $sql="INSERT INTO orders (productname,/* OdersID, */CustomerID,quantity,orderdate,shipdate,shipaddress,Role,EmployeeID)
         VALUES('$name','$cus','$quantity','$oddate','$shipdate','$address','$role','$emp');";
         addsql($sql);
    }
    function add_supl( $name,$address,$phone, $email,$emp){
        $sql="INSERT INTO supplier(Name,address,phone,email,EmployeeID)
         VALUES('$name','$address','$phone','$email','$emp');";
         addsql($sql);
    }

    function add_donhang($OdersID,$CustomerID,$EmployeeID,$orderdate, $quantity,$shipaddress,$productname,$shipdate,$role)
    {
        $sql="INSERT INTO orders(OdersID,CustomerID,EmployeeID,orderdate,quantity,shipaddress,productname,shipdate,Role)
         VALUES('$OdersID','$CustomerID','$EmployeeID','$orderdate','$quantity','$shipaddress','$productname','$shipdate','$role');";
         addsql($sql);
    }
    function add_product($name, $unitprice,$quantity,$des,$cage,$emp)
    {
        $sql="INSERT INTO product(Name,unitprice,quantity,mota,CategoryID,EmployeeID)
         VALUES('$name','$unitprice','$quantity','$des','$cage','$emp');";
         addsqlPR($sql);
    }

    