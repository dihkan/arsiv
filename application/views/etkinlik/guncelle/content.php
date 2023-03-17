 <div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Faaliyet Güncelleme Formu</h3>
      </div>


    </div>
    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

          <div class="x_content">




           <form class="form-horizontal form-label-left" novalidate action="<?php echo base_url('etkinlik/guncelle');  ?>" enctype="multipart/form-data" method="post" id="form1">

            <input type="hidden" name="etkinlik" value="<?php echo $etkinlik->etkinlik_id; ?>">
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Faaliyet Tarihi  <span class="required">*</span>
            </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="datepicker" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" name="tarih" value="<?php echo $etkinlik->tarih; ?>" disabled="disabled">
                 <small class="error_f pull-right">  <?php echo form_error("tarih"); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Faaliyet Yeri <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="yer" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $etkinlik->yer; ?>">
            <small class="error_f pull-right">  <?php echo form_error("yer"); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Faaliyet Türü</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                 <select name="tur" id="" class="form-control">
                  <option value="Girilmemis">Seçiniz</option>
                  <option value="Proje">Proje</option>
                  <option value="Sosyal_Etkinlik">Sosyal Etkinlik</option>
                  <option value="Spor">Spor</option>
                  <option value="Toren">Tören</option>
                  <option value="Seminer">Seminer</option>
                  <option value="Konferans">Konferans</option>
                  <option value="Gezi">Gezi</option>
                  <option value="Toplanti">Toplantı</option>
                  <option value="Gezi">Gezi</option>
                  <option value="Diger">Diğer</option>
                </select>
                 <small class="error_f pull-right">  <?php echo form_error("tur"); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Faaliyet Konusu</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="konu" value="<?php echo $etkinlik->konu; ?>">
                 <small class="error_f pull-right">  <?php echo form_error("konu"); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Açıklama</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <textarea name="aciklama" class="form-control" cols="30" rows="10"><?php echo $etkinlik->aciklama; ?></textarea>
              </div>
            </div>
            
     
       <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Öğretmenler</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ogretmenler" value="<?php echo $etkinlik->ogretmenler; ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Öğrenciler <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ogrenciler" value="<?php echo $etkinlik->ogrenciler; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Yararlananlar</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
         <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="yararlanan" value="<?php echo $etkinlik->yararlanan; ?>">
       </div>
     </div>
     <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Katılımcılar</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
         <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="katilimci" value="<?php echo $etkinlik->katilimci; ?>">
     </div>
    </div>
       <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Resimler</label>
      <div class="col-md-6 col-xs-12">
        <?php 
          foreach ($resim as $key) {
            echo "<img src=".base_url("front/upload")."/".$etkinlik->tarih."/".$key->resim_ad." width='300' height='300'><br><form></form>
             <form action=".base_url('etkinlik/resim_sil')." method='post' name='form".$key->resim_id."''>
              <input type='hidden' name='resim_id' value=".$key->resim_id.">
              <input type='hidden' name='tarih' value=".$etkinlik->tarih.">
              <button value='Sil' onclick='form".$key->resim_id.".submit();' class='btn btn-block btn-danger'> SİL </button></form>
            <br>"; 

          }


        ?>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
         <input id="middle-name" class="form-control col-md-7 col-xs-12" type="file" name="dosyalar[]" multiple="true">
     </div>
    </div>
  
 

<div class="form-group">
  <div class="col-md-6 col-md-offset-3">
    <button type="submit" class="btn btn-primary">Temizle</button>
    <input type="submit" class="btn btn-success" value="Güncelle" onclick="form1.submit();">
  </div>
</div>
</form>
</div>


</div>
</div>
</div>
</div>
</div>
</div>

