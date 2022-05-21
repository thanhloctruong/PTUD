<?php
    function get_thongke($thongke)
    {
            $sql = "SELECT *
            FROM   phieuyeucauchuyenvien join taikhoan 
            where  phieuyeucauchuyenvien.MaTaiKhoan = taikhoan.MaTaiKhoan AND  MaHoSo=$thongke";
            // $request=getone($sql);
            // return $request;
            return getone($sql);
    }
    function get_all()
    {
        $sql = "SELECT *
        FROM   phieuyeucauchuyenvien ph join taikhoan tk on ph.MaTaiKhoan=tk.MaTaiKhoan ";
        return getlist($sql);
    }
?>