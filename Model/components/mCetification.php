<?php
function modelSelectCertification($MaTaiKhoan)
{
    $sql = "SELECT * FROM `hosobenhnhan` INNER JOIN `taikhoan` ON `hosobenhnhan`.`MaTaiKhoan`=`taikhoan`.`MaTaiKhoan` INNER JOIN `tokhaiyte` ON `hosobenhnhan`.`MaTaiKhoan` = `tokhaiyte`.`MaTaiKhoan` WHERE `taikhoan`.`MaTaiKhoan` = '$MaTaiKhoan' AND `tokhaiyte`.`Ngaykhaibao` = (SELECT MAX(`tokhaiyte`.`Ngaykhaibao`) FROM `tokhaiyte` );";
    return getone($sql);
}
