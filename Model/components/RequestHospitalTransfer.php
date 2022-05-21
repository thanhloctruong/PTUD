<?php
    function check_mahs($mahoso)
    {
        $sql="SELECT * FROM hosobenhnhan where MaHoSo=$mahoso";
        return getone($sql);
    }
    function check_mabv($mabenhvien)
    {
        $sql="SELECT * FROM benhvien where MaBenhVien=$mabenhvien";
        return getone($sql);
    }
    function check_matk($matk)
    {
        $sql="SELECT * FROM taikhoan where MaTaiKhoan=$matk";
        return getone($sql);
    }
    // function add_yeucau( $date, $tinhtrang, $matk, $mahoso, $mabenhvien)
    // {
    //     $sql="INSERT INTO phieuyeucauchuyenvien( NgayYeuCau, MoTa, MaTaiKhoan, MaHoSo, MaBenhVien)
    //      VALUES ('$date', '$tinhtrang', '$matk','$mahoso', '$mabenhvien')";
    //     addsql($sql);
    // }
    function join_bang($mahoso)
    {
        $sql = "SELECT *
        FROM hosobenhnhan JOIN taikhoan 
        WHERE hosobenhnhan.MaTaiKhoan = taikhoan.MaTaiKhoan AND hosobenhnhan.MaHoSo = $mahoso";
        return getone($sql);
    }
    
?>