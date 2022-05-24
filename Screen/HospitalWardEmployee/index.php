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
                
                  $user=$_POST['user'];
                  $pass=$_POST['pass'];
                  $date=$_POST['date'];
                  $name=$_POST['name' ];
                  $address=$_POST['address'];
                  $phone=$_POST['phone'];
                  $email=$_POST['email'];
                  $cccd=$_POST['cccd'];
                  $role=$_POST['role'];
                  $phuongct=$_POST['phuong'];
                  


                     if ($user==null) {
                        echo '<script>alert("Bắt buộc nhập Tên Đăng Nhập");</script>';
                        echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                        }
                        elseif ($pass==null){
                            echo '<script>alert("Bắt buộc nhập mật khẩu ");</script>';
                            echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                        }
                        elseif ($name=="") {
                        echo '<script>alert("Bắt buộc nhập");</script>';
                        echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                        }
                        elseif ($date==null)
                        {
                            echo '<script>alert("Ngày sinh không được bỏ trống");</script>';
                            echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                        }
                        elseif (!preg_match("/^(0[3|5|7|8|9][0-9]{8})$/", $phone) ) {
                            # code...
                            echo '<script>alert("Số điện thoại không chính xác!!");</script>';
                            echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                        }
                        elseif(!preg_match("/^[a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,3}$/", $email)){
                            echo '<script>alert("Email không hợp lệ");</script>';
                            echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                        }
                        elseif (!preg_match("/^([0-9]{12})$/", $cccd) ) {
                            # code...
                            echo '<script>alert("Căn cước công dân gồm 12 số !!");</script>';
                            echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                        }
                        elseif ($address==null){
                            echo '<script>alert("Bắt buộc nhập địa chỉ ");</script>';
                            echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                        }
                        elseif($role==null || $role<0)
                        {
                            echo '<script>alert("Vui lòng phân quyền Role");</script>';
                            echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                        }
                        elseif($phuongct==null || $phuongct<0)
                        {
                            echo '<script>alert("Bắt buộc nhập Phường công tác");</script>';
                            echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                        }
                        else
                        {
                            $result = add($user,$pass,$name,$date, $address,$phone,$cccd,$role, $email,$phuongct);
                            echo '<script>alert("Thêm Thành Công");</script>';
                            echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                        }
                    

                        
                }
                    include './View/add1.php';
                    break;

            case 'update':
                if (isset($_POST['submitbtn']))
                {   
                  $user=$_POST['user'];
                  $pass=$_POST['pass'];
                  $date=$_POST['date'];
                  $name=$_POST['name' ];
                  $address=$_POST['address'];
                  $phone=$_POST['phone'];
                  $email=$_POST['email'];
                  $cccd=$_POST['cccd'];
                  $role=$_POST['role'];
                  $phuongct=$_POST['phuong']; 
                  $mataikhoan=$_POST['idbenhnhan'];
                  $result = update($user,$pass,$name,$date, $address,$phone,$cccd,$role, $email,$phuongct,$mataikhoan);
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
