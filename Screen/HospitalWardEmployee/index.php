<!-- <div> nhân viên y tế phường</div> -->
<?php
    session_start();
    include "../../Model/index.php";
    include "../HospitalWardEmployee/Header.php";
    // include "../../Controller/index.php";
    if (isset($_GET['act'])) {
        # code...
        $act = $_GET['act'];
        switch($act){
            case 'tuvan':
                // if (isset($_POST['tuvan']) && ($_POST['tuvan'])) {
                //     # code...
                // }
                // $result  = get_all_request();
                include 'Counseling.php';
                break;
            case 'quanly':
                include "ManagePatientInformation.php";
                break;
            default:
                include "Home.php";
        }
    } else{
        include "Home.php";
    }

    include "../HospitalWardEmployee/Footer.php";
?>