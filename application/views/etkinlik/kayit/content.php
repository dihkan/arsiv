 <div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Faaliyet Kayıt Formu</h3>
      </div>


    </div>
    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

          <div class="x_content">




           <form class="form-horizontal form-label-left" novalidate action="<?php echo base_url('etkinlik/kayit');  ?>" enctype="multipart/form-data" method="post">


            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Faaliyet Tarihi  <span class="required">*</span>
            </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="datepicker" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" name="tarih">
                 <small class="error_f pull-right">  <?php echo form_error("tarih"); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Faaliyet Yeri <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="yer" required="required" class="form-control col-md-7 col-xs-12">
            <small class="error_f pull-right">  <?php echo form_error("yer"); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Faaliyet Türü</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                 <select name="tur" id="" class="form-control">
                  <option value="Girilmemiş">Seçiniz</option>
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
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="konu">
                 <small class="error_f pull-right">  <?php echo form_error("konu"); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Açıklama</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <textarea name="aciklama" class="form-control" cols="30" rows="10"></textarea>
              </div>
            </div>
            
     
       <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Öğretmenler</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ogretmenler">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Öğrenciler <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ogrenciler">
        </div>
      </div>
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Yararlananlar</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
         <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="yararlanan">
       </div>
     </div>
     <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Katılımcılar</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
         <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="katilimci">
     </div>
    </div>
       <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Resimler</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
         <input id="middle-name" class="form-control col-md-7 col-xs-12" type="file" name="dosyalar[]" multiple="true">
     </div>
    </div>
  
 

<div class="form-group">
  <div class="col-md-6 col-md-offset-3">
    <button type="submit" class="btn btn-primary">Temizle</button>
    <button id="send" type="submit" class="btn btn-success">Gönder</button>
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

