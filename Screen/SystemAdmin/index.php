<!-- <div> nhân viên y tế bệnh viện</div> -->
<?php
session_start();
if (isset($_SESSION['systemAdmin'])) {
    # code...
    include "../../Model/index.php";
    include "../SystemAdmin/View/Header.php";
    // include "../../Controller/index.php";
    if (isset($_GET['update'])) {
        $update = $_GET['update'];
        $sql = thongkenhanvien();
        $result = getlist($sql);
        $i = 0;
        foreach ($result as $row) {
            $i++;
            if ($update == $row['MaTaiKhoan']) {
                $id = $row['MaTaiKhoan'];
                $name = $row['HoTen'];
                $role = $row['Role'];

                if (isset($_POST['btngrant'])) {
                    $role = $_POST['role'];

                    try {
                        $conn = connect();
                        $sql = grant($id, $role);
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        echo "<script>alert('Phân Quyền Thành Công')</script>";
                        echo header("refresh:0");
                    } catch (PDOException $e) {
                        echo $sql . "</br>" . $e->getMessage();
                    }
                    $conn = null;
                }
            }
        }


        include 'Grant.php';
    } elseif (isset($_GET['act'])) {
        # code...
        $act = $_GET['act'];
        switch ($act) {
            case 'phanquyen':
                $sql = thongkenhanvien();
                include 'Decentralization.php';
                break;
            case 'xemthongke':
                include "SeenStatistics.php";
                break;
            case 'logout':
                if (isset($_SESSION['systemAdmin'])) unset($_SESSION['systemAdmin']);
                header('location: ../../Controller/index.php?act=logout');
                break;
            default:
                include "../../view/components/Home.php";
                break;
        }
    } else {
        include "../../view/components/Home.php";
    }

    include "../SystemAdmin/View/Footer.php";
} else {
    # code...
    header('location: ../../Controller/index.php?act=login');
}
?>