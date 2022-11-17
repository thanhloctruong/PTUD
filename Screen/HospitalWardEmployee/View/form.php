
<html>
<body>
<center>
<h1>
Tạo Barcode
</h1>
<form action="View/form.php">
Nhập Mã Sản Phẩm <input type="" name="bar_code"value =><br>
<br> <br>
<input type="submit" value="Tạo Barcode">
</form>
<?php
if(isset($_GET['bar_code']))
            {
	            $bar_code=$_GET['bar_code'];
	            include 'barcode128.php';
	            echo bar128($bar_code);
                }
                ?>
               
                
                <a class="btn btn-primary ml-lg-6 " style="margin-left:250px;margin-top:-50px" href="index.php?act=quanlyttsp">Back</a>
            
            </div>
            
</center>
</body>
</html>