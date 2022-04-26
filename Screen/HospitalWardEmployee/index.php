<!-- <div> nhân viên y tế phường</div> -->
<?php
    session_start();
    include "../../Model/index.php";
    include "../HospitalWardEmployee/View/Header.php";
    // include "../../Controller/index.php";
    if (isset($_GET['act']))
     {
        # code...
        $act = $_GET['act'];
        switch($act)
        {
            case 'tuvan':
                $result = get_all_request();
                include './View/Counseling.php';
                break;
            case 'reply':
                $idRequest = $_GET['id'];
                $result = request($idRequest);
                if(isset($_POST['submit']) && $_POST['submit']){
                    $mess = $_POST['mess'];
                    $kq =  update_request($mess,$idRequest);
                    if($kq){
                    include './View/Counseling.php';
                    }
                }
                include "./View/ReplyCounseling.php";
                break;
            case 'send':
                if (isset($_POST['send']) && ($_POST['send'])) {
                    $mess = $_POST['mess'];
                    // $result = update_request($mess,2)
                    include './View/Counseling.php';
                }
                break;
            case 'quanly':
                include "./View/ManagePatientInformation.php";
                break;
            default:
                include "../HospitalWardEmployee/View/Home.php";
                break;
                
        }
        
    } 
    else{
        include "./View/Home.php";
    }
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

    include "../HospitalWardEmployee/View/Footer.php";

?>
