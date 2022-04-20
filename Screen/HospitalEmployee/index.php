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
            case 'tracuu':
                
                if (isset($_POST['search']) && ($_POST['search'])) {
                    $search = Search($_post['txtTimKiem']);
                    include 'Search.php';
                    // $search = $_POST['txtTimKiem'];
                    // $row = Search($search) -> fetchColumn();
                    // if ($search == 0 ) {
                    //     # code...
                    //     $txt_err_lg = "Không tìm thấy mã hồ sơ !!!!!!";
                    // } else{
                    // }
                }
                include 'Search.php';
                break;
            default:
                include "Home.php";
        }
    } else{
        include "Home.php";
    }

    include "../HospitalEmployee/Footer.php";
?>