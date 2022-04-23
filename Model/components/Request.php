<?php
    function get_all_request(){
        $sql = "SELECT MaYeuCau, CauHoi, CauTraLoi, HoTen
        FROM yeucau JOIN taikhoan 
        WHERE yeucau.MaTaiKhoan = taikhoan.MaTaiKhoan";
        return getlist($sql);
    }
    function request($idRequest){
        $sql = "SELECT * FROM yeucau WHERE MaYeuCau='".$idRequest."'";
        return getone($sql);
    }
    function update_request($reply, $idRequest){
        $sql = "UPDATE yeucau SET CauTraLoi = '".$reply."' WHERE MaYeuCau ='".$idRequest."'";
        execsql($sql, 1);
        return true;
    }

?>