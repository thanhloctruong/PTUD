<?php
    function Search($timkiem){ 
        $query = "SELECT MaHoSo, HoTen, NgaySinh, SDT, DiaChi, Email, TinhTrangSucKhoe, NgayNhapvien FROM hosobenhnhan JOIN taikhoan
        ON hosobenhnhan.MaTaiKhoan = taikhoan.MaTaiKhoan
        WHERE MaHoSo LIKE '$timkiem'";
        return getone($query);
    }
?>