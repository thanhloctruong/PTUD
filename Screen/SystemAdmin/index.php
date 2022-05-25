<!-- <div> nhân viên y tế phường</div> -->
<?php
    session_start();
    include "../../Model/index.php";
    include "../SystemAdmin/View/Header.php";
    // include "../../Controller/index.php";
    if (isset($_GET['act'])) {
        # code...
        $act = $_GET['act'];
        switch($act){
            case 'xemthongke':
                $sql=thongke_full();
                if(isset($_POST['btntk'])){
                    if($_POST["fday"]&&$_POST["tday"]){
                        $fday=$_POST["fday"];
                        $tday=$_POST["tday"];
                        $sql=thongke_time($fday,$tday);
                    }else if($_POST["thongke"]){
                    $thongke=$_POST["thongke"];
                    $sql=thongke_status($thongke);
                    }else if($_POST["fday"]&&$_POST["tday"]&&$_POST["thongke"]){
                        $fday=$_POST["fday"];
                        $tday=$_POST["tday"];
                        $thongke=$_POST["thongke"];
                        $sql=thongke_time_status($fday,$tday,$thongke);
                    }
                }
                include '../SystemAdmin/View/Statistical.php';
                break;
            case 'phanquyen':
                include "../SystemAdmin/View/Grant.php";
                break;
            default:
                include "../SystemAdmin/View/Home.php";
        }
    }else include "../SystemAdmin/View/Home.php";
    // elseif (isset($_GET['reply'])){
    //     $reply = $_GET['reply'];
    //     $idRequest = 2;
    //         if (isset($_POST['send']) && $_POST['send']) {
    //             # code...
    //             $mess = update_request($_POST['mess'], 2);
    //             echo '<script>alert("Gửi caua trả lời thành công");</script>';
    //             echo header("refresh:0; url='./View/Counseling.php'");
    //             // header('location: index.php?act=tuvan');
    //         }
    //         else{

    //             $result = request($idRequest);
    //             include "./View/ReplyCounseling.php";
    //         }
    // }
    //  else{
    //     include "./View/Home.php";
    // }

    include "../SystemAdmin/View/Footer.php";

?>