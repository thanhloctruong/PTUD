<?php
function modelInsertKhaiBaoYTe($loaiKhaiBao, $noiKhaiBao, $soDienThoai, $hoTen, $tienSuBenh, $trieuChung, $dichTe, $taiKhoan)
{
    $sql = "INSERT INTO `tokhaiyte`(LoaiKhaiBao,`NoiKhaiBao`, `SoDienThoai`, `HoVaTen`, `TienSuBenh`, `TrieuChungBenh`, `YeuToDichTe`, `MaTaiKhoan`) VALUES ('$loaiKhaiBao','$noiKhaiBao','$soDienThoai','$hoTen','$tienSuBenh','$trieuChung','$dichTe','$taiKhoan')";
    return addsql($sql);
}
