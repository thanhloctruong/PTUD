<!-- <div> nhân viên y tế bệnh viện</div> -->
<?php
    session_start();
    if (isset($_SESSION['systemAdmin'])) {
        # code...
        include "../../Model/index.php";
        include "../SystemAdmin/View/Header.php";
        // include "../../Controller/index.php";
        if (isset($_GET['act'])) {
            # code...
            $act = $_GET['act'];
            switch($act){
                case 'phanquyen':
                    include 'Decentralization.php';
                    break;
                case 'xemthongke':
                    include "SeenStatistics.php";
                    break;
                case 'logout':
                    if(isset($_SESSION['systemAdmin'])) unset($_SESSION['systemAdmin']);
                    header('location: ../../Controller/index.php?act=logout');
                    break;
                default:
                    include "../../view/components/Home.php";
                    break;
            }
        } 
        else{
            include "../../view/components/Home.php";
        }
    
        include "../SystemAdmin/View/Footer.php";
    }
    else {
        # code...
        header('location: ../../Controller/index.php?act=login');
    }
?>