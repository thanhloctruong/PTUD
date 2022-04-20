<!-- <div>Tư vấn</div> -->
<?php
  $result  = get_all_request();
  foreach ($result as $row){
    echo "
    <tr>
      <th scope='row'>".$row[1]."</th>
      <td>".$row[2]."</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>";
  }

?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mã câu hỏi</th>
      <th scope="col">Tên bệnh nhân</th>
      <th scope="col">Câu hỏi</th>
      <th scope="col">Trạng thái</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php # ?></td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>