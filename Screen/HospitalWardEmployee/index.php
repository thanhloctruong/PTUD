<!-- <div> nhân viên y tế phường</div> -->
<?php
    session_start();
    include "./Model/index.php";
    include "../HospitalWardEmployee/View/Header.php";
    // include "../../Controller/index.php";
    if (isset($_GET['act']))
     {
        # code...
        $act = $_GET['act'];
        switch($act)
        {
            case 'tuvan':
                $get = get_user_by_id($_SESSION['id']);
                $ward = $get["Phuong_BVCongTac"];
                $aa = get_all_request($ward);
                include './View/Counseling.php';
                break;
            case 'reply':
                $idRequest = $_GET['id'];
                $result = request($idRequest);
                if(isset($_POST['send']) && $_POST['send']){
                    $mess = $_POST['mess'];
                    $kq =  update_request($mess,$idRequest);
                    if($kq){
                        header('location: index.php?act=tuvan');
                        break;
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
             case 'list':
                include "./View/listpation.php";
                break;
            case 'add':
                if (isset($_POST['submitbtn']))
                {
                    
                  $name=$_POST['name'];
                  $address=$_POST['address'];
                  $phone=$_POST['phone'];
                  $email=$_POST['email'];
                  $tinhtrang=$_POST['tinhtrang'];

                 $error=[];
                 if($_SERVER['REQUEST_METHOD']=='POST')          
                {
                    $error=[];
                    //
                    if (empty(trim($_POST['name'])))
                    {
                        $error ['name']['required']='ho ten khong duoc bo trong';
                    }
                    //
                    if (empty(trim($_POST['address'])))
                    {
                        $error ['address']['required']='dia chi khong duoc bo trong';
                    }
                    //
                    if (empty(trim($_POST['email'])))
                    {
                        $error ['email']['required']='email khong duoc bo trong';
                    }
                    else
                    {
                        if(!filter_var(trim($_POST['email']),FILTER_VALIDATE_EMAIL))
                        
                        {
                            $error ['email']['invalid']='email khong hop le';
                        }
                    }
                    //
                    if (empty(trim($_POST['phone'])))
                    {
                        $error ['phone']['required']='email khong duoc bo trong';
                    }
                    else
                    {
                        if(!filter_var(trim($_POST['phone']),FILTER_VALIDATE_INT))
                        
                        {
                            $error ['phone']['invalid']='sdt khong hop le';
                        }
                    }
                   if (empty($error))
                   {
                       echo (" <script>alert('Thêm Thành Công')</script>");
                   }
                   else
                   {
                    echo (" <script>alert('Thêm Không Thành Công')</script>");
                   print_r($error);
               


                   }

                    
                }        
                  else{
                    $result = add($name, $address,$phone,$tinhtrang, $email);
                  }
                }
                    include './View/add.php';
                    break;

            case 'update':
                if (isset($_POST['submitbtn']))
                {
                    $name=$_POST['name'];
                    $address=$_POST['address'];
                    $phone=$_POST['phone'];
                    $email=$_POST['email'];
                    $tinhtrang=$_POST['tinhtrang'];
                    $idbenhnhan=$_POST['idbenhnhan'];
                }
                include "./View/update.php";
                break;
                
                
            default:
                include "./View/Home.php";
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

    include "../HospitalWardEmployee/View/Footer.php";

?>
