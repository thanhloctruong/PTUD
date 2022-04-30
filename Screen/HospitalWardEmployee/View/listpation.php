
<form action="index.php?act=quanly" method="POST">
<div class="header">
        <h1>Danh sách bệnh nhân</h1>;
</div>

<?php


    $sql= 'SELECT * FROM benhnhan';
    foreach($conn->query($sql) as $row)
    {
        echo $row['Username'] .'<br/>' ;
    }
?>









</form>

