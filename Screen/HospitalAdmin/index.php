<!-- <div> nhân viên y tế bệnh viện</div> -->
<?php
    session_start();
    include "../../Model/index.php";
    include "../HospitalAdmin/Header.php";
    // include "../../Controller/index.php";
    if (isset($_GET['act'])) {
        # code...
        $act = $_GET['act'];
        switch($act){
            case 'thongkengay':
                $date= getdate();
                $day=$date['mday'];
                $month= $date['mon'];
                $year= $date['year'];
                if(!isset($_POST['btnthongke'])){
                    $time="$year-$month-$day";
                    $duong=count_duong("Dương tính",$time);
                    $am=count_am("Âm tính",$time);
                    $sum_status= $duong+$am;
                    $duong_hcm=count_duong_kv("Dương tính",$time,"TP.HCM");
                    $am_hcm=count_am_kv("Âm tính",$time,"TP.HCM");
                    $sum_status_hcm= $duong_hcm+$am_hcm;
                }
                if(isset($_POST['btnthongke'])){
                    $time=$_POST['timeday'];
                    $duong=count_duong("Dương tính",$time);
                    $am=count_am("Âm tính",$time);
                    $sum_status= $duong+$am;
                    $duong_hcm=count_duong_kv("Dương tính",$time,"TP.HCM");
                    $am_hcm=count_am_kv("Âm tính",$time,"TP.HCM");
                    $sum_status_hcm= $duong_hcm+$am_hcm;
                }
                include '../HospitalAdmin/View/Statistical_day.php';
                break;
            case 'phanquyen':
                include "../SystemAdmin/View/Grant.php";
                break;
            default:
                include "../HospitalAdmin/View/Home.php";
        }
    }else include "../HospitalAdmin/View/Home.php";
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