<?php
function insertKhaiBaoYTe($loaiKhaiBao,$noiKhaiBao, $soDienThoai, $hoTen, $tienSuBenh, $trieuChung, $dichTe, $taiKhoan)
{
        include_once "../Model/components/MedicalDeclaration.php";
        modelInsertKhaiBaoYTe($loaiKhaiBao,$noiKhaiBao, $soDienThoai, $hoTen, $tienSuBenh, $trieuChung, $dichTe, $taiKhoan);
}
