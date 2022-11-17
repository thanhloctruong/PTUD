<!-- <div> nhân viên y tế bệnh viện</div> -->
<?php
ob_start();
session_start();
if (isset($_SESSION['HospitalEmployee'])) {
    # code...
    include "../../Model/index.php";
    include "../HospitalEmployee/View/Header.php";
    // include "../../Controller/index.php";
    if (isset($_GET['update'])) {
        $update = $_GET['update'];
        $sql = statistical_supl();
        $result = getlist($sql);
        $i = 0;
        foreach ($result as $row) {
            $i++;
            if ($update == $row['SupplierID']) {
                $id = $row['SupplierID'];
                $name = $row['Name'];
                $address = $row['address'];
                $phone = $row['phone'];
                $email = $row['email'];
              
                if (isset($_POST['btnupdate'])) {
                    $id = $_POST['SupplierID'];
                    $name = $_POST['Name'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];                                 
             if ($name == null || $address == null || $phone == null || $email == null  ) {
                        echo '<script>alert(" Vui lòng nhập đầy đủ thông tin");</script>';
                       
                    }else {
                        try {
                            $conn = connect();
                            $sql =updatesupp($name, $address, $phone,$email,$id);
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();
                            echo "<script>alert('Cập Nhật Thành Công')</script>";
                            
                        } catch (PDOException $e) {
                            echo $sql . "</br>" . $e->getMessage();
                        }
                        $conn = null;
                    }
                }
            }
        }


        include './View/UpdateSupp.php';
    } elseif (isset($_GET['act'])) {
        # code...
        $act = $_GET['act'];
        switch ($act) {
            case 'quanly':
                include './View/PatientManagement.php';
                break;
            case 'tiepnhan':
                include "./View/Receivingpatients.php";
                break;
            case 'thongke':
                include "./View/StatisticsCase.php";
                break;
            case 'getlist':
                $sql = statistical_supl();
                include './View/ListPatient.php';
                break;
            case 'tracuu':
                    $sql = thongkedonhang_mua();
                    include "./View/SearchOD.php";
                    break;
            case 'add':
                if (isset($_POST['submitbtn'])) {
                  
                    $name = $_POST['Name'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $emp = $_POST['emp'];

                   if ($name == null) {
                        echo '<script>alert("Lỗi ! Bắt buộc nhập địa chỉ ");</script>';
                        echo header("refresh:0; url='../HospitalEmployee/index.php?act=add'");
                    } elseif ($address == null) {
                        echo '<script>alert("Lỗi ! Bắt buộc nhập địa chỉ ");</script>';
                        echo header("refresh:0; url='../HospitalEmployee/index.php?act=add'");
                    } elseif ($phone == null) {
                        echo '<script>alert("Lỗi ! Bắt buộc nhập số điện thoại ");</script>';
                        echo header("refresh:0; url='../HospitalEmployee/index.php?act=add'");
                    } elseif ($email== null) {
                        echo '<script>alert("Bắt buộc nhập email ");</script>';
                        echo header("refresh:0; url='../HospitalEmployee/index.php?act=add'");
                   
                   
                    } elseif ($emp == null) {
                    echo '<script>alert("Bắt buộc nhập mã nhân viên tạo ");</script>';
                    echo header("refresh:0; url='../HospitalEmployee/index.php?act=add'");
                } 
                    else {
                        $result = add_supl($name, $address, $phone, $email, $emp);
                        echo '<script>alert("Thêm thành công");</script>';
                       
                    }
                }
                include './View/addsupplier.php';
                break;
            case 'phanquyen':
                $sql = thongkenhanvien();
                include "./View/Grantlist.php";
                break;
            case 'taodon':
                if (isset($_POST['submitbtn'])) {
                   
                    $orderdate = $_POST['orderdate'];
                    $quantity = $_POST['quantity'];
                    $shipaddress = $_POST['shipaddress'];
                    $productname = $_POST['productname'];
                    $shipdate = $_POST['shipdate'];
                    $role = $_POST['Role'];
                    
                    if ($orderdate == null || $role==null ||$quantity== null|| $shipaddress == null|| $productname == null|| $shipdate == null ) 
                    {
                        echo '<script>alert("Lỗi ! Bắt buộc nhập số điện thoại ");</script>';
                        echo header("refresh:0; url='../HospitalEmployee/index.php?act=taodon'");
                    
                    } 
                    else {
                        $result = add_donhang($OdersID,$CustomerID, $EmployeeID, $orderdate, $quantity,$shipaddress,$productname,$shipdate,$role);
                        echo '<script>alert("Thêm thành công");</script>';
                        echo header("refresh:0; url='../HospitalEmployee/index.php?act=taodon'")
                        ;
                    }
                }
                    include "./View/addorder.php";
                    break;

                    case 'chitiethoadon':
                    include './View/orderdetails.php';
                    break;
                    case 'addbaogia':
                        if (isset($_POST['submitbtn'])) {
                            $mancc = $_POST['SupplierID'];
                            $name = $_POST['name'];
                            $address = $_POST['address'];
                            $phone = $_POST['phone'];
                            $email = $_POST['email'];
                            $emp = $_POST['emp'];
        
                            if ($mancc == null) {
                                echo '<script>alert("Lỗi !  Bắt buộc nhập tên ");</script>';
                                echo header("refresh:0; url='../HospitalEmployee/index.php?act=add'");
                            } elseif ($name == null) {
                                echo '<script>alert("Lỗi ! Bắt buộc nhập địa chỉ ");</script>';
                                echo header("refresh:0; url='../HospitalEmployee/index.php?act=add'");
                            } elseif ($address == null) {
                                echo '<script>alert("Lỗi ! Bắt buộc nhập địa chỉ ");</script>';
                                echo header("refresh:0; url='../HospitalEmployee/index.php?act=add'");
                            } elseif ($phone == null) {
                                echo '<script>alert("Lỗi ! Bắt buộc nhập số điện thoại ");</script>';
                                echo header("refresh:0; url='../HospitalEmployee/index.php?act=add'");
                            } elseif ($email== null) {
                                echo '<script>alert("Bắt buộc nhập email ");</script>';
                                echo header("refresh:0; url='../HospitalEmployee/index.php?act=add'");
                           
                           
                            } elseif ($emp == null) {
                            echo '<script>alert("Bắt buộc nhập mã nhân viên tạo ");</script>';
                            echo header("refresh:0; url='../HospitalEmployee/index.php?act=add'");
                        } 
                            else {
                                $result = add_supl($mancc,$name, $address, $phone, $email, $emp);
                                echo '<script>alert("Thêm thành công");</script>';
                                echo header("refresh:0; url='../HospitalEmployee/index.php?act=add'");
                            }
                        }
                        include './View/addbaogia.php';
                        break;
            case 'logout':
                if (isset($_SESSION['hospitalAdmin'])) unset($_SESSION['hospitalAdmin']);
                header('location: ../../Controller/index.php?act=logout');
                break;
                
            default:
                include "../HospitalAdmin/View/Home.php";
        }
    } else {
        include "./View/Home.php";
    }

    include "../HospitalAdmin/View/Footer.php";
} else {
    header('location: ../../Controller/index.php?act=login');
}
?>