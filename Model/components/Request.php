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

?>