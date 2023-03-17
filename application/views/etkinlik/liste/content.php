 <div class="right_col" role="main">
  <div class="">
    <div class="page-title">


      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">

          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Faaliyetler Listesi <small></small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <form action="<?php echo base_url('etkinlik/kayit'); ?>" method="post">
              <input type="submit" class="btn btn-default" value="Ekle" name="">
            </form>

          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <p class="text-muted font-13 m-b-30">

          </p>
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Etkinlik Tarihi</th>
                <th>Etkinlik Yeri</th>
                <th>Etkinlik Türü</th>
                <th>Etkinlik Konusu</th>
                <th>Açıklama</th>
                <th>Öğretmenler</th>
                <th>İşlemler</th>

              </tr>
            </thead>


            <tbody>
              <?php

              foreach ($etkinlik as $key) { ?>
              <tr>
               
                <td><?php echo $key->tarih;  ?></td>
                <td><?php echo $key->yer;  ?></td>
                <td><?php echo $key->tur;  ?></td>
                <td><?php echo $key->konu;  ?></td>
                <td><?php echo $key->aciklama;  ?></td>
                <td><?php echo $key->ogretmenler;  ?></td>
                <td>
                  <form action="<?php echo base_url('etkinlik/sil'); ?>" method="post">
                    <input type="hidden" name="etkinlik_id" value="<?php echo $key->etkinlik_id; ?>">
                    <input type="submit" class="btn btn-danger btn-sm btn-block" value="Sil">
                  </form>
                <form action="<?php echo base_url('etkinlik/guncelle'); ?>" method="post">
                    <input type="hidden" name="etkinlik_id" value="<?php echo $key->etkinlik_id; ?>">
                    <input type="submit" class="btn btn-success btn-sm btn-block" value="Güncelle">
                  </form> 
                   <form action="<?php echo base_url('etkinlik/ayrintilar'); ?>" method="post">
                    <input type="hidden" name="etkinlik_id" value="<?php echo $key->etkinlik_id; ?>">
                    <input type="submit" class="btn btn-primary btn-sm btn-block" value="Ayrıntılar">
                  </form>
                </td>

              </tr>
              <?php } ?>



            </tbody>
          </table>
        </div>
      </div>
    </div>




  </div>
</div>
</div>