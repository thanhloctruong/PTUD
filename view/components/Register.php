<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Đăng ký</h1>
      <form class="contact-form mt-5" action="index.php?act=register" method="post">
        <div class="row mb-3">
          <div class="col-12 py-2 wow fadeInUp">
            <label for="user">Tên đăng nhập</label>
            <input type="text"  name='user' class="form-control" placeholder="Nhập tên của bạn" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="pass">Password</label>
            <input type="password"  name='pass' class="form-control" placeholder="Enter password." required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="rpass">Nhập lại Password</label>
            <input type="password"  name='rpass' class="form-control" placeholder="Nhập lại password." required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="name">Họ tên</label>
            <input type="text"  name='name' class="form-control" placeholder="Nhập Họ tên của bạn" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="sdt">SDT</label>
            <input type="text"  name='sdt' class="form-control" placeholder="Nhập số điện thoại" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="email">Email</label>
            <input type="email"  name='email' class="form-control" placeholder="Nhập email" required>
          </div>
        </div>
        <input class="btn btn-primary wow zoomIn" type="submit" name="register" value="Đăng Ký">
      </form>
      <?php
          // if(isset($txt_err_user)&&($txt_err_user!="")){
          //     echo "<h3 style='color:red;'>".$txt_err_user."</h3>";
          // }
      ?>
    </div>
  </div>
