<div class="page-banner overlay-dark bg-image" style="background-image: url(../../view/Assets/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thông tin đơn hàng bán</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">Thông tin đơn hàng bán</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<form class="contact-form mt-5" action="index.php?act=search" method="POST">
    <div class="container">
        
    <h1 class="text-center wow fadeInUp">Danh sách đơn hàng bán</h1>
        
    </div>
    </form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">OrderID</th>
      <th scope="col">CustomerID</th>
      <th scope="col">EmployeeID</th>
      <th scope="col">OrderDate</th>
      <th scope="col">Quantity</th>
      <th scope="col">ShipAdress</th>
      <th scope="col">ProductName</th>
      <th scope="col">ShipDate </th>
      <th scope="col">Role</th>
    </tr>
  </thead>

  <tbody class="table table-striped"> 
        <?php
            $result = getlist($sql);
            $i=0;
            foreach($result as $row){
                $i++;
        ?>
                    <tr>
                     
                           
                            <td><?php echo $row['OdersID']; ?></td>
                            <td><?php echo $row['CustomerID']; ?></td>
                            <td><?php echo $row['EmployeeID']; ?></td>
                            <td><?php echo $row['orderdate']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php echo $row['shipaddress']; ?></td>
                            <td><?php echo $row['productname']; ?></td>
                            <td><?php echo $row['shipdate']; ?></td>
                            <td><?php echo $row['Role']; ?></td>  
                            <td>
                        <form action="" method="POST">
                            <a class="btn btn-primary" href="index.php?thanhtoan=<?php echo $row['OdersID']?>">Xuất Hoá Đơn</a>
                        </form>
                    </td>                     
                    </tr>
                    
        <?php
            }
        ?>  
        </tbody>

 
</table>
<!-- <li class="nav-item">
            <a class="btn btn-primary ml-lg-6 " style="margin-left:45%  " href="index.php?act=tracuu">Back</a>
          </li> -->


