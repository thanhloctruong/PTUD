<?php
    function Search($timkiem){ 
        $query = "SELECT * FROM `hosobenhnhan` WHERE MaHoSo LIKE '$timkiem'";
        return getone($query);
    }
?>