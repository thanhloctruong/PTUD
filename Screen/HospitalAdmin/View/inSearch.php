</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">OrderID</th>
      <th scope="col">CustomerID</th>
      <th scope="col">EmployeeID</th>
      <th scope="col">OrderDate</th>
      <th scope="col">UnitPrice</th>
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
                    </tr>
        <?php
            }
        ?>  
        </tbody>

 
</table>
<li class="nav-item">
            <a class="btn btn-primary ml-lg-6 " style="margin-left:45%  " href="index.php?act=tracuu">Back</a>
          </li>

