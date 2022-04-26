<?php
    function Search($timkiem){ 
        $query = "SELECT * FROM `hosobenhnhan` join taikhoan WHERE MaHoSo LIKE '$timkiem'";
        return getone($query);
    }
?>