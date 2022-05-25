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
    function thongke_full(){
        $sql="SELECT * FROM benhvien bv join hosobenhnhan hs on bv.MaBenhVien=hs.MaBenhVien join taikhoan tk on hs.MaTaiKhoan=tk.MaTaiKhoan 
        where tk.Role=0 order by tk.MaTaiKhoan asc";
        return $sql;
    }
    function thongke_time($a,$b){
        $sql="SELECT * FROM benhvien bv join hosobenhnhan hs on bv.MaBenhVien=hs.MaBenhVien join taikhoan tk on hs.MaTaiKhoan=tk.MaTaiKhoan 
        where tk.Role=0 and (hs.NgayNhapvien between '$a' and '$b') order by tk.MaTaiKhoan asc";
        return $sql;
    }
    function thongke_status($c){
        $sql="SELECT * FROM benhvien bv join hosobenhnhan hs on bv.MaBenhVien=hs.MaBenhVien join taikhoan tk on hs.MaTaiKhoan=tk.MaTaiKhoan 
        where tk.Role=0 and hs.GhiChu='$c' order by tk.MaTaiKhoan asc";
        return $sql;
    }
    function thongke_time_status($a,$b,$c){
        $sql="SELECT * FROM benhvien bv join hosobenhnhan hs on bv.MaBenhVien=hs.MaBenhVien join taikhoan tk on hs.MaTaiKhoan=tk.MaTaiKhoan 
        where tk.Role=0 and (hs.NgayNhapvien between '$a' and '$b') and hs.GhiChu='$c' order by tk.MaTaiKhoan asc";
        return $sql;
    }
    function a($MHS){
        $sql="SELECT * FROM hosobenhnhan hs join taikhoan tk on hs.MaTaiKhoan=tk.MaTaiKhoan 
        WHERE hs.MaHoSo='$MHS'";
        return getone($sql);
    }
    function count_duong($a,$day){
        $sql="SELECT count(MaHoSo) as counts from hosobenhnhan where GhiChu='$a' and NgayNhapvien='$day'" ;
        $get= getone($sql);
        $counts= $get["counts"];
        return $counts;
    }
    function count_am($a,$day){
        $sql="SELECT count(MaHoSo) as counts from hosobenhnhan where GhiChu='$a' and NgayKhoiBenh='$day'" ;
        $get= getone($sql);
        $counts= $get["counts"];
        return $counts;
    }
    function count_duong_kv($a,$day,$kv){
        $sql="SELECT count(MaHoSo) as counts from hosobenhnhan hs join taikhoan tk on hs.MaTaiKhoan=tk.MaTaiKhoan where GhiChu='$a' and NgayNhapvien='$day' and DiaChi like'%$kv%'" ;
        $get= getone($sql);
        $counts= $get["counts"];
        return $counts;
    }
    function count_am_kv($a,$day,$kv){
        $sql="SELECT count(MaHoSo) as counts from hosobenhnhan hs join taikhoan tk on hs.MaTaiKhoan=tk.MaTaiKhoan where GhiChu='$a' and NgayKhoiBenh='$day' and DiaChi like'%$kv%'" ;
        $get= getone($sql);
        $counts= $get["counts"];
        return $counts;
    }
    function getonepatient($a){
        $sql="SELECT * from benhvien bv join hosobenhnhan hs on bv.MaBenhVien=hs.MaBenhVien join taikhoan tk on hs.MaTaiKhoan=tk.MaTaiKhoan where hs.MaHoSo='$a'";
        return getone($sql);
    }
    function updatePatient($hoten,$ngaysinh,$sdt,$mail,$cccd,$diachi,$tinhtrang,$ketluan,$mhs){
        $sql="UPDATE taikhoan tk join hosobenhnhan hs on tk.MaTaiKhoan=hs.MaTaiKhoan set HoTen='$hoten' where MaHoSo='$mhs';
        UPDATE taikhoan tk join hosobenhnhan hs on tk.MaTaiKhoan=hs.MaTaiKhoan set NgaySinh='$ngaysinh' where MaHoSo='$mhs';
        UPDATE taikhoan tk join hosobenhnhan hs on tk.MaTaiKhoan=hs.MaTaiKhoan set SDT='$sdt' where MaHoSo='$mhs';
        UPDATE taikhoan tk join hosobenhnhan hs on tk.MaTaiKhoan=hs.MaTaiKhoan set Email='$mail' where MaHoSo='$mhs';
        UPDATE taikhoan tk join hosobenhnhan hs on tk.MaTaiKhoan=hs.MaTaiKhoan set CCCD='$cccd' where MaHoSo='$mhs';
        UPDATE taikhoan tk join hosobenhnhan hs on tk.MaTaiKhoan=hs.MaTaiKhoan set DiaChi='$diachi' where MaHoSo='$mhs';
        UPDATE taikhoan tk join hosobenhnhan hs on tk.MaTaiKhoan=hs.MaTaiKhoan set TinhTrangSucKhoe='$tinhtrang' where MaHoSo='$mhs';
        UPDATE taikhoan tk join hosobenhnhan hs on tk.MaTaiKhoan=hs.MaTaiKhoan set GhiChu='$ketluan' where MaHoSo='$mhs';
        ";
        return $sql;
    }
?>
