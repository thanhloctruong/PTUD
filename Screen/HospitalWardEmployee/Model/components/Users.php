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

    function getPassHash($user){;
        $sql="select MatKhau from taikhoan where TenDangNhap='".$user."'";
        return getone($sql);
    }

    function get_user_by_id($user_id) {
        $sql = "SELECT * FROM taikhoan WHERE id = $user_id";
        return getone($sql);
    }
    
    function update_user_by_id($update_info, $user_id) {
        // được phép chỉnh sửa địa chỉ, sdt, họ tên, ngày sinh
        $address = $update_info['address'];
        $phone = $update_info['phone'];
        $email = $update_info['email'];
        $name = $update_info['name'];
        $dob = $update_info['dob'];
        $sql = "UPDATE taikhoan SET address = '$address', phone = '$phone', name = '$name', date = '$dob', email = '$email' WHERE id = $user_id";
        execsql($sql, 1);
        return true;
    }
    function add ($data,$idbenhnhan)
    {
        $name=$data['name'];
        $idbenhnhan=$data['idbenhnhan'];
        $address=$data['address'];
        $phone=$data['phone'];
        $email=$data['email'];
        $tinhtrang=$data['tinhtrang'];
    
        
        $sql_pation="INSERT INTO benhnhan  SET name='$name',address = '$address',phone='$phone',email='$email',tinhtrang='$tinhtrang'
        where idbenhnhan='$idbenhnhan'";
         execsql($sql_pation, 1);
        return true;
    }

?>