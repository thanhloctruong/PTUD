<!-- <div> nhân viên y tế bệnh viện</div> -->
<?php
    session_start();
    include "../../Model/index.php";
    include "../HospitalEmployee/Header.php";
    // include "../../Controller/index.php";
    if (isset($_GET['act'])) {
        # code...
        $act = $_GET['act'];
        switch($act){
            case 'tiepnhan':
                include 'Receivingpatients.php';
                break;
            case 'chuyenvien':
                include "Requestahospitaltransfer.php";
                break;
            case 'dkdieutri':
                include "Registerfortreatment.php";
                break;
            case 'yeucau':
                include "Requestahospitaltransfer.php";
                break;
            default:
                include "Home.php";
        }
    } else{
        include "Home.php";
    }

    include "../HospitalEmployee/Footer.php";
?>