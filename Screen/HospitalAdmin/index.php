<!-- <div> nhân viên y tế bệnh viện</div> -->
<?php

use LDAP\Result;

    session_start();
    include "./Model/index.php";
    include "../HospitalAdmin/Header.php";
    // include "../../Controller/index.php";
    if (isset($_GET['act'])) {
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
            case 'add':
                if (isset($_POST['submitbtn']))
                    {
                        
                      $name=$_POST['name'];
                      $address=$_POST['address'];
                      $tang=$_POST['tang'];
                      $socamac=$_POST['socamac'];
                      $socakhoi=$_POST['socakhoi'];
    
                     $error=[];
                     if($_SERVER['REQUEST_METHOD']=='POST')          
                    {
                        $error=[];
                        //
                        if (empty(trim($_POST['name'])))
                        {   
                            $error ['name']['required']='Tên bệnh viện không được bỏ trống';
                        }
                        //
                        if (empty(trim($_POST['address'])))
                        {
                            $error ['address']['required']='Địa chỉ không được bỏ trống';
                        }
                        //
                        if (empty(trim($_POST['socamac'])))
                        {
                            $error ['socamac']['required']='Bắt buộc nhập số ca mắc';
                        }
                        else
                        {
                            if(!filter_var(trim($_POST['socamac']),FILTER_VALIDATE_INT))
                            
                            {
                                $error ['socamac']['invalid']='Không hợp lệ';
                            }
                        }
                        //
                        if (empty(trim($_POST['tang'])))
                        {
                            $error ['socamac']['required']='Bắt buộc nhập tầng';
                        }
                        else
                        {
                            if(!filter_var(trim($_POST['tang']),FILTER_VALIDATE_INT))
                            
                            {
                                $error ['tang']['invalid']='Không hợp lệ';
                            }
                        }
                        //
                        if (empty(trim($_POST['socakhoi'])))
                        {
                            $error ['socakhoi']['required']='Bắt buộc nhập số ca khỏi';
                        }
                        else
                        {
                            if(!filter_var(trim($_POST['socakhoi']),FILTER_VALIDATE_INT))
                            
                            {
                                $error ['socakhoi']['invalid']='Không hợp lệ';
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
                        $result = add($name,$address,$tang,$socamac, $socakhoi);
                      }
                }
                 include './View/addhospital.php';
                        break;

          case 'update':
                 if (isset($_POST['submitbtn']))
                    {
                        $name=$_POST['name'];
                        $address=$_POST['address'];
                        $tang=$_POST['tang'];
                        $socamac=$_POST['socamac'];
                       $socakhoi=$_POST['socakhoi'];
                       $id=$_POST['id'];
                    }
                else{
                        $result = add($name,$address,$tang,$socamac, $socakhoi);
                      }

                    
                    include "./View/updatehospital.php";
                    break;
            default:
                include "./View/Home.php";
                break;
        }
    } else{
        include "./View/Home.php";
    }

    include "../HospitalAdmin/View/Footer.php";
?>