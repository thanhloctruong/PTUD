
<?php
if(isset($list))
foreach($list as $danhsach){

    echo $danhsach['MaBenhVien'] . '<br/>';
    echo $danhsach['TenBenhVien']. '<br/>';
    echo $danhsach['DiaChi']. '<br/>';
    echo $danhsach['TangSo']. '<br/>';
    echo $danhsach['SoCaMac']. '<br/>';
    echo $danhsach['SoCaKhoi']. '<br/>';

}

?>