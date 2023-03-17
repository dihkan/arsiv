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
       <?php $this->load->view($klasor.'/ayar_content'); 

       ?> 
      
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
             <p>©2019 Şehit Ünal Bıçakcı Mesleki ve Teknik Anadolu Lisesi. Tüm hakları saklıdır.</p>
          </div>  
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

   	<?php $this->load->view('include/footer'); ?>
  </body>
  </html>
