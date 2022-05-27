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
        $sql = thongke_full();
        $result = getlist($sql);
        $i = 0;
        foreach ($result as $row) {
            $i++;
            if ($update == $row['MaHoSo']) {
                $MHS = $row['MaHoSo'];
                $HoTen = $row['HoTen'];
                $NgaySinh = $row['NgaySinh'];
                $SDT = $row['SDT'];
                $Mail = $row['Email'];
                $CCCD = $row['CCCD'];
                $DiaChi = $row['DiaChi'];
                $TinhTrang = $row['TinhTrangSucKhoe'];
                $KetLuan = $row['GhiChu'];
                if (isset($_POST['btnupdate'])) {
                    $mhs = $_POST['mhs'];
                    $ten = $_POST['ten'];
                    $ngaysinh = $_POST['ngaysinh'];
                    $sdt = $_POST['sdt'];
                    $mail = $_POST['mail'];
                    $cccd = $_POST['cccd'];
                    $diachi = $_POST['diachi'];
                    $tinhtrang = $_POST['tinhtrang'];
                    $ketluan = $_POST['ketluan'];
                    try {
                        $conn = connect();
                        $sql = updatePatient($ten, $ngaysinh, $sdt, $mail, $cccd, $diachi, $tinhtrang, $ketluan, $mhs);
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        echo "<script>alert('Cập nhật thành công')</script>";
                    } catch (PDOException $e) {
                        echo $sql . "</br>" . $e->getMessage();
                    }
                    $conn = NULL;
                }
            }
        }
        include './View/UpdatePatient.php';
        exit;
    } elseif (isset($_GET['act'])) {
        # code...
        $act = $_GET['act'];
        switch ($act) {
            case 'tiepnhan':
                include './View/Receivingpatients.php';
                break;
            case 'dkdieutri':
                include "./View/Registerfortreatment.php";
                break;
            case 'yeucau':
                $Requestahospitaltransfer = requestbenhvien();
                if (isset($_POST['search']) && ($_POST['search'])) {
                    $search = join_bang($_POST['txttimkiem']);
                    include "./View/Requestahospitaltransfer.php";
                    break;

                    // break;
                }
            case 'btnguiyeucau':
                if (isset($_POST['btnguiyeucau']) && $_POST['btnguiyeucau']) {
                    $mahoso = $_POST['txtmahoso'];
                    $date = $_POST['txtdate'];
                    $mucdo = $_POST['txtmucdo'];
                    $mtk = $_POST['txtmatk'];
                    $mabenhvien = $_POST['txttang'];
                    $result = add_yeucau($date, $mucdo, $mtk, $mahoso, $mabenhvien);
                    include './View/patientrecordsearch.php';
                    break;
                }
            case 'timkiem':
                if (isset($_POST['search']) && ($_POST['search'])) {
                    $search = Search($_POST['txttimkiem']);
                    include './View/patientrecordsearch.php';
                    break;
                } else {
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
            case 'chuyenvien':
                include "./View/Requestahospitaltransfer.php";
                break;
            case 'dkdieutri':
                include "./View/Registerfortreatment.php";
                break;
            case 'yeucau':
                include "./View/Requestahospitaltransfer.php";
                break;
            case 'capnhatttb':
                include "./View/UpdateHealth.php";
                break;
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
                } else {
                    include './View/Search.php';
                    break;
                }
            case 'logout':
                if (isset($_SESSION['HospitalEmployee'])) unset($_SESSION['HospitalEmployee']);
                header('location: ../../Controller/index.php?act=logout');
                break;
            default:
                include "./View/Home.php";
            case 'quanly':
                $sql = thongke_full();
                include './View/PatientManagement.php';
                break;
        }
    } else {
        include "./View/Home.php";
    }

    include "../HospitalEmployee/View/Footer.php";
} else {
    # code...
    header('location: ../../Controller/index.php?act=login');
}
?>