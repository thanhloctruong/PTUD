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