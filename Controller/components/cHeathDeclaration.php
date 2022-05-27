<?php
function insertKhaiBaoYTe($loaiKhaiBao,$noiKhaiBao, $soDienThoai, $hoTen, $tienSuBenh, $trieuChung, $dichTe, $taiKhoan)
{
        include_once "../Model/components/MedicalDeclaration.php";
        modelInsertKhaiBaoYTe($loaiKhaiBao,$noiKhaiBao, $soDienThoai, $hoTen, $tienSuBenh, $trieuChung, $dichTe, $taiKhoan);
}
function ControlSelecthsbn($mahsbn)
{
        include_once "../Model/components/RequestHospitalTransfer.php";
       return modelSelecthsbn($mahsbn) ;
}
?>
