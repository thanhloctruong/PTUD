<!-- <div> nhân viên y tế bệnh viện</div> -->
<?php

use LDAP\Result;

    session_start();
    include "./Model/index.php";
    include "../HospitalAdmin/Header.php";
    // include "../../Controller/index.php";

    if(isset($_GET['update'])){
        $update= $_GET['update'];
        $sql= thongke_full();
        $result=getlist($sql);
        $i=0;
        foreach($result as $row){
            $i++;
            if($update==$row['MaBenhVien']){
                $id=$row['MaBenhVien'];
                $name=$row['TenBenhVien'];
                $address=$row['DiaChi'];
                $tang=$row['TangSo'];
                $socamac=$row['SoCaMac'];
                $socakhoi=$row['SoCaKhoi'];
                if(isset($_POST['btnupdate'])){
                    $Id=$row['MBV'];
                    $Name=$row['TenBenhVien'];
                    $Diachi=$row['DiaChi'];
                    $Tang=$row['TangSo'];
                    $Socamac=$row['SoCaMac'];
                    $Socakhoi=$row['SoCaKhoi'];

                    try{
                        $conn=connect();
                        $sql=updatehospital($name,$address,$tang,$socamac,$socakhoi,$id);
                        $stmt= $conn->prepare($sql);
                        $stmt->execute();
                        echo "<script>alert('Cập Nhật Thành Công')</script>";
                        echo header("refresh:0");
                        }
                        catch(PDOException $e){
                            echo $sql . "</br>" . $e->getMessage();
                        }
                        $conn=null;
                }
                
                
                    
            }
        }
    

       include './View/updatehospital.php';
    }
   
 

    elseif (isset($_GET['act'])) {
        # code...
        $act = $_GET['act'];
        switch($act){
            case 'quanlyttbv':
                include 'ManageHospitaltInformation.php';
                break;
            case 'tiepnhan':
                include "Receivingpatients.php";
                break;
            case 'thongke':
                include "StatisticsCase.php";
                break;
            case 'getlist':
                $sql=thongke_full();
                include './View/list.php';
                break;
            case 'add':
                if (isset($_POST['submitbtn']))
                    {
                        
                      $name=$_POST['name'];
                      $address=$_POST['address'];
                      $tang=$_POST['tang'];
                      $socamac=$_POST['socamac'];
                      $socakhoi=$_POST['socakhoi'];
                   

                        if ($name==null) {
                            echo '<script>alert("Lỗi !  Bắt buộc nhập");</script>';
                            echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                        }
                        elseif ($address==null){
                            echo '<script>alert("Lỗi ! Bắt buộc nhập địa chỉ ");</script>';
                            echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                        }
                        elseif($tang==null)
                            {
                                echo '<script>alert("Lỗi ! Bắt buộc nhập số tâng ");</script>';
                                echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                            }
                        elseif ( $tang <1 || $tang >5)
                            {
                            echo '<script>alert("Lỗi ! Tầng từ 1-5 ");</script>';
                            echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                            }
                        
                        elseif($socamac ==null)
                            {
                                echo '<script>alert(" Lỗi ! Bắt buộc nhập số ca mắc ");</script>';
                                echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                            }
                        elseif ($socamac < 0 )
                            {
                            echo '<script>alert("Lỗi ! Số ca mắc phải lớn hơn hoặc bằng 0 ");</script>';
                            echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                            }
                        
                        elseif ($socakhoi ==null)
                            {
                                echo '<script>alert("Lỗi ! Bắt buộc nhập số ca khỏi ");</script>';
                                echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                            }
                            elseif ( $socakhoi < 0 )
                            {
                            echo '<script>alert("Số ca khỏi phải lớn hơn hoặc bằng 0 ");</script>';
                            echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                            }
                      
                        else
                        {
                            $result = add($name, $address,$tang,$socamac,$socakhoi);
                            echo '<script>alert("Thêm thành công");</script>';
                            echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");

                        }
                }
                 include './View/addhospital.php';
                        break;
               
          /* case 'update':
                 if (isset($_POST['submitbtn']))
                    {
                        $name=$_POST['name'];
                        $address=$_POST['address'];
                        $tang=$_POST['tang'];
                        $socamac=$_POST['socamac'];
                        $socakhoi=$_POST['socakhoi'];
                        $id=$_POST['id'];
                        
                    
                        if ($name==null) {
                            echo '<script>alert("Lỗi !  Bắt buộc nhập");</script>';
                            echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                        }
                        elseif ($address==null){
                            echo '<script>alert("Lỗi ! Bắt buộc nhập địa chỉ ");</script>';
                            echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                        }
                        elseif($tang==null)
                            {
                                echo '<script>alert("Lỗi ! Bắt buộc nhập số tâng ");</script>';
                                echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                            }
                        elseif ( $tang <1 || $tang >5)
                            {
                            echo '<script>alert("Lỗi ! Tầng từ 1-5 ");</script>';
                            echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                            }
                        
                        elseif($socamac ==null)
                            {
                                echo '<script>alert(" Lỗi ! Bắt buộc nhập số ca mắc ");</script>';
                                echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                            }
                        elseif ($socamac < 0 )
                            {
                            echo '<script>alert("Lỗi ! Số ca mắc phải lớn hơn hoặc bằng 0 ");</script>';
                            echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                            }
                        
                        elseif ($socakhoi ==null)
                            {
                                echo '<script>alert("Lỗi ! Bắt buộc nhập số ca khỏi ");</script>';
                                echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                            }
                            elseif ( $socakhoi < 0 )
                            {
                            echo '<script>alert("Số ca khỏi phải lớn hơn hoặc bằng 0 ");</script>';
                            echo header("refresh:0; url='../HospitalAdmin/index.php?act=add'");
                            }
                            else
                        {
                            $result = add($name, $address,$tang,$socamac,$socakhoi,$id);
                            echo '<script>alert("Cập nhật thành công");</script>';
                            echo header("refresh:0; url='../HospitalAdmin/index.php?act=update'");

                        }
                    }
                            
            

               
                    
                    include "./View/updatehospital.php";
                    break;  */
            default:
                include "./View/Home.php";
                break;
        }
    } else{
        include "./View/Home.php";
    }

    include "../HospitalAdmin/View/Footer.php";
?>