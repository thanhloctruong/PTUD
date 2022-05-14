<?php
    function Search($timkiem){ 
        $query = "SELECT * from hosobenhnhan JOIN taikhoan WHERE hosobenhnhan.MaTaiKhoan = taikhoan.MaTaiKhoan AND hosobenhnhan.MaHoSo LIKE $timkiem";
        return getone($query);
    }
?>