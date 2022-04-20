<?php
    function get_all_request(){
        $sql = "SELECT MaYeuCau, CauHoi, CauTraLoi, TenDangNhap
        FROM yeucau JOIN taikhoan 
        WHERE yeucau.MaTaiKhoan = taikhoan.MaTaiKhoan";
        return getlist($sql);
    }

?>