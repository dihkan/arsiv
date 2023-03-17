    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            </div>
            <div class="clearfix"></div>
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url('front'); ?>/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Hoşgeldiniz,<?php 
                $veri = $this->session->userdata('kullanici');
              echo $veri->kullanici; ?></span>
                <h2></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>GENEL</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-edit"></i> Etkinlik Yönetimi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('etkinlik'); ?>/kayit">Proje Kayıt</a></li>
                      <li><a href="<?php echo base_url('etkinlik'); ?>/liste">Kayıtlar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Arşiv Yönetimi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('arsiv'); ?>/arsiv">Arsiv Kayıt</a></li>
                      <li><a href="<?php echo base_url('arsiv'); ?>/liste">Kayıtlar</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->

            <!-- /menu footer buttons -->
          </div>
        </div>