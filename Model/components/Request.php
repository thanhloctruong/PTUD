<?php
    function get_all_request($ward){
        $sql = "SELECT *
        FROM yeucau JOIN taikhoan 
        WHERE yeucau.MaTaiKhoan = taikhoan.MaTaiKhoan AND yeucau.Phuong = $ward";
        return getlist($sql);
    }
    function request($idRequest){
        $sql = "SELECT * FROM yeucau WHERE MaYeuCau='$idRequest'";
        return getone($sql);
    }
    function update_request($reply, $idRequest){
        $sql = "UPDATE `yeucau` SET `CauTraLoi` = '$reply' WHERE `yeucau`.`MaYeuCau` = '$idRequest'";
        // $sql = "INSERT INTO `yeucau` (`CauTraLoi`, `MaTaiKhoan`) VALUES ('$reply', '$idRequest')";
        execsql($sql, 1);
        return true;
    }
    function thongke_full(){
        $sql="SELECT * FROM benhvien bv join hosobenhnhan hs on bv.MaBenhVien=hs.MaBenhVien join taikhoan tk on hs.MaTaiKhoan=tk.MaTaiKhoan 
        where tk.Role=0 order by tk.MaTaiKhoan asc";
        return $sql;
    }
    function statistical_all(){     
        $sql="SELECT * FROM benhvien ";
        return $sql;
    }
    function get_one_hospital($MaBenhVien){
        $sql = "SELECT * FROM benhvien where MaBenhVien=$MaBenhVien";
        return $sql;
    }
    function updatehospital($name,$address,$tang,$socamac,$socakhoi,$id){
        $sql="UPDATE benhvien  set TenBenhVien='$name' where MaBenhVien='$id';
        UPDATE benhvien set DiaChi='$address' where MaBenhVien='$id';
        UPDATE benhvien  set TangSo='$tang' where MaBenhVien='$id';
        UPDATE benhvien  set SoCaMac='$socamac' where MaBenhVien='$id';
        UPDATE benhvien  set SoCaKhoi='$socakhoi' where MaBenhVien='$id';";
        return $sql;
    }
    function thongkenhanvien()
    {
     $sql="SELECT * FROM taikhoan Where Role != 0 "; 
     return $sql;
    }

    function grant($id,$role)
    {
        $sql="UPDATE taikhoan  set Role='$role' where MaTaiKhoan='$id'";
        return $sql;
       
    }

?>