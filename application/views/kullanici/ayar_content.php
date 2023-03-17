  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Giriş </h3>
              </div>

            
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                        <table class="table table-bordered table striped">
                          <tr>
                            <td>Kullanıcı Adı</td>
                            <td>Şifre</td>
                            <td>Aktif</td>
                          </tr>
                          <tr>
                            <td><?php echo $kullanici->kullanici; ?></td>
                            <td><form action="<?php echo base_url('kullanici/ayarlar'); ?>" method="post">
                              <input type="hidden" name="id" value="<?php echo $kullanici->id; ?>" >
                              <input type="text" name="sifre" >
                              <input type="submit" value="Şifre Değiştir" class="btn btn-success btn-xs">
                            </form></td>
                            <td><?php if($kullanici->aktif==1) { echo "Aktif Kullanıcı"; } else{ echo "Pasif Kullanici"; } ?></td>
                          </tr>
                        </table>
                  
                      
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>