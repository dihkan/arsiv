<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('include/header'); 

 ?>

<body class="nav-md">

          
          <!-- menu profile quick info -->
       <?php $this->load->view('include/slide_bar'); ?> 

        <!-- top navigation -->
     
       <?php $this->load->view('include/top_navigate'); ?> 
        <!-- /top navigation -->

        <!-- page content -->
       <?php $this->load->view($klasor.'/'.$altklasor.'/content'); ?> 
      
        <!-- /page content -->

        <!-- footer content -->
       <footer>
          <div class="pull-right">
             <a href="http://krd-ik.com">Şehit Ünal Bıçakcı Mesleki Teknik Anadolu Lisesi Arşiv Yönetim Sistemi</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

   	<?php $this->load->view('include/footer'); ?>
  </body>
  </html>
