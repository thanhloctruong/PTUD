<!-- <div> nhân viên y tế bệnh viện</div> -->
<?php
ob_start();
session_start();
if (isset($_SESSION['hospitalAdmin'])) {
    # code...
    include "../../Model/index.php";
    include "../HospitalAdmin/View/Header.php";
    // include "../../Controller/index.php";
    if (isset($_GET['update'])) {
        $update = $_GET['update'];
        $sql = statistical_all();
        $result = getlist($sql);
        $i = 0;
        foreach ($result as $row) {

            $i++;
            if ($update == $row['CustomerID']) {
                $id = $row['CustomerID'];
                $name = $row['Name'];
                $address = $row['address'];
                $phone = $row['phone'];
                $email = $row['email'];
                $date = $row['age'];              
                if (isset($_POST['btnupdate'])) 
                {                   
                    $id = $_POST['CustomerID'];
                     $name = $_POST['Name'];
                     $address = $_POST['address'];
                     $phone = $_POST['phone'];
                     $email = $_POST['email'];
                     $date = $_POST['age'];     
                    if ($name == null || $address == null || $phone == null || $email == null || $date == null ) 
                    {
                        echo '<script>alert(" Vui lòng nhập đầy đủ thông tin");</script>';
                       
                       
                    }else {
                        try {
                            $conn = connect();
                            $sql = updatehospital($name, $address, $phone, $email, $date,$id);
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();
                            echo "<script>alert('Cập Nhật Thành Công')</script>";
                            echo header("refresh:0; url='../HospitalAdmin/index.php?act=getlist'");
                        } catch (PDOException $e) {
                            echo $sql . "</br>" . $e->getMessage();
                        }
                        $conn = null;
                    }
                }
            }
        }


        include './View/updatecustomer.php';
    }
    if (isset($_GET['updateproduct'])) {
        $update = $_GET['updateproduct'];
        $sql = statistical_all_product();
        $result = getlist($sql);
        $i = 0;
        foreach ($result as $row) {
            $i++;
            if ($update == $row['ProductID']) {
                $id = $row['ProductID'];
                $name = $row['Name'];
                $unitprice = $row['unitprice'];
                $quantity = $row['quantity'];
                $des = $row['mota'];
                          
                if (isset($_POST['btnupdate'])) 
                {                   
                    $id = $_POST['ProductID'];
                     $name = $_POST['Name'];
                     $unitprice = $_POST['price'];
                     $quantity = $_POST['quantity'];
                     $des = $_POST['des'];
                    if ($name == null || $unitprice == null || $quantity == null || $des == null ) 
                    {
                        echo '<script>alert(" Vui lòng nhập đầy đủ thông tin");</script>';
                       
                    }else {
                        try {
                            $conn = connect();
                            $sql = updateproduct($name, $unitprice,$quantity,$des,$id);
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();
                            echo "<script>alert('Cập Nhật Thành Công')</script>";
                            echo header("refresh:0; url='../HospitalAdmin/index.php?act=getlistproduct'");
                        } catch (PDOException $e) {
                            echo $sql . "</br>" . $e->getMessage();
                        }
                        $conn = null;
                    }
                }
            }
        }


        include './View/updateproduct.php'; 
        
    }elseif (isset($_GET['act'])) {
        # code...
        $act = $_GET['act'];
        switch ($act) {
            case 'quanlyttbv':
                include './View/ManageHospitaltInformation.php';
                break;
            case 'quanlyttsp':
                    include './View/ManageProductInformation.php';
                break;
            case 'tiepnhan':
                include "./View/Receivingpatients.php";
                break;
            case 'thongke':
                include "./View/StatisticsCase.php";
                break;
            case 'getlist':
                $sql = statistical_all();
                include './View/list.php';
                break;
            case 'getlistproduct':
                    $sql = statistical_all_product();
                    include './View/listproduct.php';
                    break;
            case 'taobarcode':
                include './View/form.php';
                break;
            case 'addqrcode':
                include'../qrcode/index.php';
                break;  
                            
            case 'add':
                if (isset($_POST['submitbtn'])) {

                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $date = $_POST['date'];
                    $emp = $_POST['emp'];


                    if ($name == null || $address == null ||$phone == null ||$email== null ||$date== null ||$emp== null  ) {
                        echo '<script>alert("Lỗi !  Bắt buộc nhập tên ");</script>';
                        echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                    }
                    elseif(!preg_match("/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{1,}$/",$name)){
                        echo "<script>alert('Nhập sai tên')</script>";
                        echo header('refresh:0');
                        break;
                    }
                    elseif (!preg_match("/^(0[3|5|7|8|9][0-9]{8})$/", $phone)) {
                        # code...
                        echo '<script>alert("Số điện thoại không chính xác ");</script>';
                        echo header("refresh:0");
                    }
                    elseif (!preg_match("/^[a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,3}$/", $email)) {
                        echo '<script>alert("Email không hợp lệ");</script>';
                        echo header("refresh:0");
                    } 
                    $date=getdate();
                    $day = $date['mday'];
                    $month = $date['mon'];
                    $year = $date['year'];
                    $time="$year-$month-$day";
                    if(strtotime($new_date)>strtotime($time)){
                    echo "<script>alert('Nhập sai ngày')</script>";
                    echo header('refresh:0');
                    break;
                }  
                    else {
                        $result = add($name, $address, $phone, $email, $date,$emp);
                        echo '<script>alert("Thêm thành công");</script>';
                        echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                    }
                }
                include './View/addcustomer.php';
                break;


                case 'addproduct':
                    if (isset($_POST['submitbtn'])) {
    
                        $name = $_POST['name'];
                        $unitprice = $_POST['price'];
                        $quantity = $_POST['quantity'];
                        $des = $_POST['des'];
                        $cage = $_POST['cageID'];
                        $emp = $_POST['emp'];
    
    
                        if ($name == null || $unitprice == null||$quantity == null || $des == null || $cage==null || $emp==null) {
                            echo '<script>alert("Lỗi !  Bắt buộc nhập tên ");</script>';
                            echo header("refresh:0; url='../HospitalAdmin/index.php?act=addproduct'");
                        } 
                     
                        else {
                            $result = add_product($name, $unitprice, $quantity, $des,$cage,$emp);
                            echo '<script>alert("Thêm thành công");</script>';
                            echo header("refresh:0; url='../HospitalAdmin/index.php?act=addproduct'");
                        }
                    }
                    include './View/addproduct.php';
                    break;

            case 'tracuu':
                    $sql = thongkedonhang();
                    include "./View/Search.php";
                    break;
            case 'search':    
                        $sql = thongkedonhang_mua();
                include "./View/inSearch.php";
                break;

            case 'phanquyen':
                $sql = thongkenhanvien();
                include "./View/Grantlist.php";
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