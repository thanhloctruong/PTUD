<?php

function thongke_full1(){
    $sql="SELECT * FROM benhvien bv join hosobenhnhan hs on bv.MaBenhVien=hs.MaBenhVien join taikhoan tk on hs.MaTaiKhoan=tk.MaTaiKhoan 
    where tk.Role=0 order by tk.MaTaiKhoan asc";
    return $sql;
}
function list_full(){
    $sql="SELECT * FROM taikhoan";
    return $sql;
}

function updatePatient($user,$pass,$name,$date,$phone,$email,$cccd,$diachi,$role,$phuongct,$id)
{
    $sql="UPDATE taikhoan  set TenDangNhap='$user' where MaTaiKhoan='$id';
    UPDATE taikhoan set MatKhau='$pass' where MaTaiKhoan='$id';
    UPDATE taikhoan set HoTen='$name' where MaTaiKhoan='$id';
    UPDATE taikhoan set NgaySinh='$date' where MaTaiKhoan='$id';
    UPDATE taikhoan  set SDT='$phone' where MaTaiKhoan='$id';
    UPDATE taikhoan  set Email='$email' where MaTaiKhoan='$id';
    UPDATE  taikhoan set CCCD='$cccd'where MaTaiKhoan='$id';
    UPDATE taikhoan set DiaChi='$diachi' where MaTaiKhoan='$id';
    UPDATE taikhoan  set Role='$role' where MaTaiKhoan='$id';
    UPDATE taikhoan  set PhuongBV_CongTac='$phuongct' where MaTaiKhoan='$id';";
    return $sql;
}

?>