<!-- <div> nhân viên y tế bệnh viện</div> -->
<?php
    session_start();
    include "../../Model/index.php";
    include "../HospitalEmployee/View/Header.php";
    // include "../../Controller/index.php";
    if(isset($_GET['update'])){
        $update= $_GET['update'];
        $sql= thongke_full();
        $result=getlist($sql);
        $i=0;
        foreach($result as $row){
            $i++;
            if($update==$row['MaHoSo']){
                $MHS=$row['MaHoSo'];
                $HoTen=$row['HoTen'];
                $NgaySinh=$row['NgaySinh'];
                $SDT=$row['SDT'];
                $Mail=$row['Email'];
                $CCCD= $row['CCCD'];
                $DiaChi=$row['DiaChi'];
                $TinhTrang=$row['TinhTrangSucKhoe'];
                $KetLuan=$row['GhiChu'];
                if(isset($_POST['btnupdate'])){
                    $mhs=$_POST['mhs'];
                    $ten=$_POST['ten'];
                    $ngaysinh=$_POST['ngaysinh'];
                    $sdt=$_POST['sdt'];
                    $mail=$_POST['mail'];
                    $cccd=$_POST['cccd'];
                    $diachi=$_POST['diachi'];
                    $tinhtrang=$_POST['tinhtrang'];
                    $ketluan=$_POST['ketluan'];
                    try{
                    $conn=connect();
                    $sql=updatePatient($ten,$ngaysinh,$sdt,$mail,$cccd,$diachi,$tinhtrang,$ketluan,$mhs);
                    $stmt= $conn->prepare($sql);
                    $stmt->execute();
                    
                    header("refresh:0");
                    }
                    catch(PDOException $e){
                        echo $sql . "</br>" . $e->getMessage();
                    }
                    $conn=null;
                }
            }
        }
        include './View/UpdatePatient.php';
    }else if (isset($_GET['act'])) {
        
        # code...
        $act = $_GET['act'];
        switch($act){
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
                } else{
                    include './View/Search.php';
                    break;
                }
            case 'quanly':
                $sql=thongke_full();
                include './View/PatientManagement.php';
                break;

        }
    } else{
        include "./View/Home.php";
    }

    include "../HospitalEmployee/View/Footer.php";
?>