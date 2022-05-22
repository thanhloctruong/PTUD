<!-- <div> nhân viên y tế bệnh viện</div> -->
<?php
    session_start();
    if (isset($_SESSION['hospitalAdmin'])) {
        # code...
        include "../../Model/index.php";
        include "../HospitalAdmin/Header.php";
        // include "../../Controller/index.php";
        if (isset($_GET['act'])) {
            # code...
            $act = $_GET['act'];
            switch($act){
                case 'quanlyttbv':
                    include 'ManageHospitaltInformation.php';
                    break;
                case 'tiepnhan':
                    include "Receivingpatients.php";
                    break;
                case 'thongke':
                    include "StatisticsCase.php";
                    break;
                case 'logout':
                    if(isset($_SESSION['hospitalAdmin'])) unset($_SESSION['hospitalAdmin']);
                    header('location: ../../Controller/index.php?act=logout');
                    break;
                default:
                    include "./View/Home.php";
                    break;
            }
        } else{
            include "./View/Home.php";
        }
    
        include "../HospitalAdmin/View/Footer.php";
    }
    else{
        header('location: ../../Controller/index.php?act=login');
    }
?>