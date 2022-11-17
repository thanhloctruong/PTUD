<!-- <div> nhân viên y tế phường</div> -->
<?php
ob_start();
session_start();
if (isset($_SESSION['HospitalWardEmployee'])) {
    # code...
    include "../../Model/index.php";
    include "../HospitalWardEmployee/View/Header.php";
    // include "../../Controller/index.php";
    if (isset($_GET['update'])) {
        $update = $_GET['update'];
        $sql = list_full();
        $result = getlist($sql);
        $i = 0;
        foreach ($result as $row) {
            $i++;
            if ($update == $row['OdersID']) {
                $od = $row['OdersID'];
                $cus = $row['CustomerID'];
                $emp = $row['EmployeeID'];
                $oddate = $row['orderdate'];
                $shipdate = $row['shipdate'];
                $name = $row['productname'];
                $address = $row['shipaddress'];
                $quantity= $row['quantity'];

                if (isset($_POST['btnupdate'])) {
                    $od = $_POST['orderID'];
                    $cus = $_POST['customerID'];
                    $emp = $_POST['employeeID'];
                    $name = $_POST['name'];
                    $oddate = $_POST['orderdate'];
                    $quantity = $_POST['quantity'];
                    $shipdate = $_POST['shipdate'];
                    $address = $_POST['address'];
                  
                    // $role = $_POST['role'];
                    // $phuongct = $_POST['phuong'];

                    if ($user == null || $pass == null || $name == null || $date == null || $phone == null || $email == null || $diachi == null) {
                        echo '<script>alert("Vui lòng nhập đầy đủ thông tin");</script>';
                        echo header("refresh:0");
                    } /* elseif ($pass == null) {
                        echo '<script>alert("Bắt buộc nhập mật khẩu ");</script>';
                        echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'"); */
                    /*  } elseif ($name == "") {
                        echo '<script>alert("Bắt buộc nhập");</script>';
                        echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                    } */
                    /*  elseif ($date == null) {
                        echo '<script>alert("Ngày sinh không được bỏ trống");</script>';
                        echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                    } */ elseif (!preg_match("/^(0[3|5|7|8|9][0-9]{8})$/", $phone)) {
                        # code...
                        echo '<script>alert("Số điện thoại không chính xác ");</script>';
                        echo header("refresh:0");
                    } elseif (!preg_match("/^[a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,3}$/", $email)) {
                        echo '<script>alert("Email không hợp lệ");</script>';
                        echo header("refresh:0");
                    } elseif (!preg_match("/^([0-9]{12})$/", $cccd)) {
                        # code...
                        echo '<script>alert("Căn cước công dân gồm 12 số !!");</script>';
                        echo header("refresh:0'");
                    } /* elseif ($address == null) {
                        echo '<script>alert("Bắt buộc nhập địa chỉ ");</script>';
                        echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                    } */ else {

                        try {
                            $conn = connect();
                            $sql = update_Patient($user, $pass, $name, $date, $phone, $email, $cccd, $diachi, $id);
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();
                            echo "<script>alert('Cập Nhật Thành Công')</script>";
                            echo header("refresh:0");
                        } catch (PDOException $e) {
                            echo $sql . "</br>" . $e->getMessage();
                        }
                        $conn = null;
                    }
                }
            }
        }
        include './View/update1.php';

        
    }
    elseif (isset($_GET['thanhtoan'])) {
        $thanhtoan = $_GET['thanhtoan'];
        $sql = list_hoadon();
        $result = getlist($sql);
        $i = 0;
        foreach ($result as $row) {
            $i++;
            if ($thanhtoan == $row['Role']) {
                $role = $row['Role'];
                $od = $row['OdersID'];
                $cus = $row['CustomerID'];
                $emp = $row['EmployeeID'];
                $name = $row['productname'];
                $quantity = $row['quantity'];
                $oddate = $row['orderdate'];
                $shipdate = $row['shipdate'];
                $address =$row ['shipaddress'];
                
        }
    }
        include './View/thanhtoan.php';

        
    } elseif (isset($_GET['act'])) {
        # code...
        $act = $_GET['act'];
        switch ($act) {
            case 'tuvan':
                $get = get_user_by_id($_SESSION['id']);
                $ward = $get["Phuong_BVCongTac"];
                $aa = get_all_request($ward);
                include './View/Counseling.php';
                break;
            case 'reply':
                $idRequest = $_GET['id'];
                $result = request($idRequest);
                if (isset($_POST['send']) && $_POST['send']) {
                    if ($_POST['mess'] != null) {
                        # code...
                        $mess = $_POST['mess'];
                        $kq =  update_request($mess, $idRequest);
                        if ($kq) {
                            echo '<script>alert("Trả lời câu hỏi thành công");</script>';
                            header('refresh:0; url="index.php?act=tuvan"');
                            break;
                        }
                    } else {
                        # code...
                        echo '<script>alert("Chưa điền câu trả lời");</script>';
                        header('refresh:0; url="index.php?act=tuvan"');
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
            case 'getlist':
                $sql = list_full();
                include "./View/listpation.php";
                break;
                case 'thongke':
                    $sql = thongkedonhang_ban();
                    include "./View/SearchOD.php";
                    break;
                    case 'taobarcode':
                        include './View/form.php';
                        break;

            case 'add':
                if (isset($_POST['submitbtn'])) {

                    $name = $_POST['name'];
                    $cus = $_POST['customerID'];
                    $quantity = $_POST['quantity'];
                    $oddate = $_POST['orderdate'];
                    $shipdate = $_POST['shipdate'];
                    $address = $_POST['address'];
                    $role = $_POST['role'];
                    $emp=$_POST['employeeID'];




                    if ($name == null  /* $od == null  */|| $cus == null ||$quantity == null  ||$oddate == null  ||$shipdate == null  ||$address == null  || $emp==null ) {
                        echo '<script>alert("Vui lòng nhập đầy đủ thông tin");</script>';
                        echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                    } /* elseif ($pass == null) {
                            echo '<script>alert("Bắt buộc nhập mật khẩu ");</script>';
                            echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'"); */
                    /*  } elseif ($name == "") {
                            echo '<script>alert("Bắt buộc nhập");</script>';
                            echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                        } */
                    /*  elseif ($date == null) {
                            echo '<script>alert("Ngày sinh không được bỏ trống");</script>';
                            echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                        }  elseif (!preg_match("/^(0[3|5|7|8|9][0-9]{8})$/", $phone)) {
                        echo '<script>alert("Số điện thoại không chính xác ");</script>';
                        echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                    }  *//* elseif (!preg_match("/^[a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,3}$/", $email)) {
                        echo '<script>alert("Email không hợp lệ");</script>';
                        echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                    } *//*  elseif (!preg_match("/^([0-9]{12})$/", $cccd)) {
                        # code...
                        echo '<script>alert("Căn cước công dân gồm 12 số !!");</script>';
                        echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                    }  *//* elseif ($address == null) {
                            echo '<script>alert("Bắt buộc nhập địa chỉ ");</script>';
                            echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                        } */ elseif ($role < 0  ||$role == null || $role !=2) {
                        echo '<script>alert("Vui lòng nhập Role = 2");</script>';
                        echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                    } else {
                        $result = add_donhangban($name, $cus, $quantity, $oddate, $shipdate,$address, $role, $emp);
                        echo '<script>alert("Thêm Thành Công");</script>';
                        echo header("refresh:0; url='../HospitalWardEmployee/index.php?act=add'");
                    }
                }
                include './View/add1.php';
                break;
            case 'kiemtrattb':
                include "./View/CheckHealth.php";
                break;
            case 'logout':
                if (isset($_SESSION['HospitalWardEmployee'])) unset($_SESSION['HospitalWardEmployee']);
                // if(isset($_SESSION['user'])) unset($_SESSION['user']);
                // setcookie('user', '', time() - 1, '/');
                // setcookie('id', '', time() - 1, '/');
                header('location: ../../Controller/index.php?act=logout');
                // include '../../../index.php';
                break;
            default:
                include "./View/Home.php";
                break;
        }
    } else {
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
} else {
    # code...
    header('location: ../../Controller/index.php?act=login');
}
?>