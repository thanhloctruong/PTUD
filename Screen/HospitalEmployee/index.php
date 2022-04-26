<!-- <div> nhân viên y tế bệnh viện</div> -->
<?php
    session_start();
    include "../../Model/index.php";
    include "../HospitalEmployee/View/Header.php";
    // include "../../Controller/index.php";
    if (isset($_GET['act'])) {
        # code...
        $act = $_GET['act'];
        switch($act){
            case 'tracuu':
                
                if (isset($_POST['search']) && ($_POST['search'])) {
                    $search = Search($_POST['txtTimKiem']);
                    include './View/Search.php';
                    break;
                    // $search = $_POST['txtTimKiem'];
                    // $row = Search($search) -> fetchColumn();
                    // if ($search == 0 ) {
                    //     # code...
                    //     $txt_err_lg = "Không tìm thấy mã hồ sơ !!!!!!";
                    // } else{
                    // }
                } else{
                    include './View/Search.php';
                    break;
                }
            default:
                include "./View/Home.php";
                break;
        }
    } else{
        include "./View/Home.php";
    }

    include "../HospitalEmployee/View/Footer.php";
?>