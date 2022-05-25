<?php
    function get_all_request(){
        $sql = "SELECT * FROM yeucau JOIN taikhoan WHERE yeucau.MaTaiKhoan = taikhoan.MaTaiKhoan";
        return getlist($sql);
    }
    function request($idRequest){
        $sql = "SELECT * FROM yeucau WHERE MaYeuCau = '$idRequest'";
        return getone($sql);
    }
    function update_request($reply, $idRequest){
        $sql = "UPDATE yeucau SET CauTraLoi = '$reply' WHERE yeucau.MaYeuCau = $idRequest;";
        return getlist($sql);
    }
    function thongke_full(){
        
        $sql="SELECT * FROM benhvien ";
        return $sql;
    }
    function get_one_hospital($MaBenhVien){
        $sql = "SELECT * FROM benhvien where MaBenhVien=$MaBenhVien";
        return $sql;
    }
    function updatehospital($name,$address,$tang,$socamac,$socakhoi,$id)
{
    $sql="UPDATE benhvien  set TenBenhVien='$name' where MaBenhVien='$id';
    UPDATE benhvien set DiaChi='$address' where MaBenhVien='$id';
    UPDATE benhvien  set TangSo='$tang' where MaBenhVien='$id';
    UPDATE benhvien  set SoCaMac='$socamac' where MaBenhVien='$id';
    UPDATE benhvien  set SoCaKhoi='$socakhoi' where MaBenhVien='$id';";


    return $sql;
}

?>