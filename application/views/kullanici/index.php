<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('include/header');  ?>

<body class="login">
  <div>
    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <img src="<?php echo base_url("front/images"); ?>/logo.png" width="140" height="140" alt="">
          <form action="<?php echo base_url('kullanici/giris'); ?>" method="post">
            <h1>Giriş Formu</h1>
            <div>
              <input type="text" class="form-control" placeholder="Kullanıcı Adı" name="kullanici" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Şifre" name="sifre" required="" />
            </div>
            <div>
              <input type="submit" class="btn btn-success btn-block">
              <input type="reset" class="btn btn-danger btn-block">
            </div>
            <div class="clearfix"></div>
            <br>
            <h1> Arşiv -Etkinlik Takip </h3>
              <p>©2019 Şehit Ünal Bıçakcı Mesleki ve Teknik Anadolu Lisesi. Tüm hakları saklıdır.</p>
      </div>
    </div>
    </form>
    </section>
  </div>
  </div>
  </div>
</body>

</html>