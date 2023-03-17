 <div class="right_col" role="main">
  <div class="">
    <div class="page-title">



      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">

          <a href="<?php echo base_url('Etkinlik/liste'); ?>" class="btn btn-default" > Etkinlik Listesi</a>
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

          <ul class="nav navbar-right panel_toolbox">

          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <td colspan="4">
                    <h3><?php echo "<u>". $etkinlik->tarih . "</u> tarihli <u>" . ucwords($etkinlik->konu). "</u> konulu faaliyet ayrıntıları."; ?></h3>
                  </td>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td width="20%">Faaliyet Tarihi</td>
                  <td colspan="3"><?php echo $etkinlik->tarih; ?></td>
                </tr>
                  <tr>
                  <td width="20%">Faaliyetin Konusu</td>
                  <td colspan="3"><?php echo $etkinlik->konu; ?></td>
                </tr>
                  <tr>
                  <td width="20%">Faaliyetin Yeri</td>
                  <td colspan="3"><?php echo $etkinlik->yer; ?></td>
                </tr>
                  <tr>
                  <td width="20%">Faaliyet Türü</td>
                  <td colspan="3"><?php echo $etkinlik->tur; ?></td>
                </tr>
                  <tr>
                  <td width="20%">Faaliyet Açıklama</td>
                  <td colspan="3"><?php echo $etkinlik->aciklama; ?></td>
                </tr>
                  <tr>
                  <td width="20%">Katılımcı Öğretmenler</td>
                  <td colspan="3"><?php echo $etkinlik->ogretmenler; ?></td>
                </tr>
                 <tr>
                  <td width="20%">Katılımcı Öğrenciler</td>
                  <td colspan="3"><?php echo $etkinlik->ogrenciler; ?></td>
                </tr>
                 <tr>
                  <td width="20%">Faydalananlar</td>
                  <td colspan="3"><?php echo $etkinlik->yararlanan; ?></td>
                </tr>
                  
                      <?php 
                      $sayac = 1;
                      foreach ($resim as $key) { 
                      
                       if($sayac % 4 == 1)
                       {
                          echo "<tr><td>";
                       }else{
                          echo "<td>";
                       }
                       ?>
                       <a href="<?php echo base_url('front/upload')."/".$etkinlik->tarih."/".$key->resim_ad; ?>" target="blank">
                      <img src="<?php echo base_url('front/upload')."/".$etkinlik->tarih."/".$key->resim_ad; ?>" width="300" height="250" class="img-fluid"  alt=""></a>

                      <?php
                       if($sayac % 4 == 0)
                       {
                          echo "</td></tr>";
                       }else{
                          echo "</td>";
                       }
                         $sayac++;
                       }  ?>
                </tr>
              </tbody>
            </table>





      </div>
    </div>
  </div>




</div>
</div>
</div>