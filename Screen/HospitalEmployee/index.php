<!-- <div> nhân viên y tế bệnh viện</div> -->
<?php
    session_start();
    include "../../Model/index.php";
    include "../../Screen/HospitalEmployee/View/Header.php";
    // include "../../Controller/index.php";
    if (isset($_GET['act'])) {
        # code...
        $act = $_GET['act'];
        switch($act){
            case 'tiepnhan':
                include './View/Receivingpatients.php';
                break;
            case 'dkdieutri':
                include "./View/Registerfortreatment.php";
                break;
            case 'yeucau':
                $Requestahospitaltransfer=requestbenhvien();
                if (isset($_POST['search']) && ($_POST['search'])) 
                {
                    $search = join_bang($_POST['txttimkiem']);
                    include "./View/Requestahospitaltransfer.php";
                    break;
                    
                    // break;
                }
                case 'btnguiyeucau':
                    if(isset($_POST['btnguiyeucau']) && $_POST['btnguiyeucau'])
                    {
                        $mahoso=$_POST['txtmahoso'];
                        $date=$_POST['txtdate'];
                        $mucdo=$_POST['txtmucdo'];
                        $mtk=$_POST['txtmatk'];
                        $mabenhvien=$_POST['txttang'];
                        $result=add_yeucau($date,$mucdo,$mtk,$mahoso,$mabenhvien);
                        include './View/patientrecordsearch.php';
                        break;
                    }
                case 'timkiem':
                    if (isset($_POST['search']) && ($_POST['search']))
                    {
                        $search = Search($_POST['txttimkiem']);
                        // if($search==null)
                        // {
                        //     echo  "khong ton tai";
                        // }
                        include './View/patientrecordsearch.php';
                        break;
                    } 
                    else{
                        include './View/patientrecordsearch.php';
                        break;
                    }   
            case 'tiepnhan':
                
                include './View/Receivingpatients.php';
                break;

                
            // case 'add':
            //     if(isset($_POST['btnguiyeucau']))
            //     {
            //         $mahoso=$_POST['txtmahoso'];
            //         $date=$_POST['txtdate'];
            //         $mucdo=$_POST['txtmucdo'];
            //         $result=add_yeucau($mahoso,$date,$mucdo);
            //     }
            case 'tracuu':
                if (isset($_POST['search']) && ($_POST['search']))
                 {
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