
  <?php 
  //Pemanggilan PARTS Top ... untuk bagian atas
  $this->load->view('parts/top');

   ?>
  

   <div id="wrapper">
    
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        App. Kontak Siswa
                    </a>
                </li>
                <li>
                    <a href="#">About Program</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">User Information</h3>
                </div>
                <div class="panel-body">
      
                  <div class="media-body">

                    <div class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 64px; height: 64px;">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading">NIS : <?php echo $this->session->userdata("nis"); ?></h4><a href="#menu-toggle" class="btn btn-primary pull-right" id="menu-toggle">Toggle Menu</a>
                        <h4>NAMA : <?php echo $login['namaSiswa']; ?> </h4> 
                        <?php echo anchor('home/logout','<span class="glyphicon glyphicon-log-out"></span> LogOut') ?>

                </div>
                </div>
                </div>
            


                </div>
              </div>

              <?php 

              if ($this->session->flashdata('gagal')) {
                echo $this->session->flashdata('gagal');
                echo "<hr>";
              }


            if ($this->session->flashdata('uploadError')) {
                            echo $this->session->flashdata('uploadError');
                            echo "<hr>";
                          }
               ?>

            
            <?php
              if ($tampil == 'input') {
                $this->load->view('data/d_input');
              }elseif ($tampil == 'edit'){
                $this->load->view('data/d_edit');
              }
            ?>

            

<?php 

$this->load->view('parts/bottom');

 ?>