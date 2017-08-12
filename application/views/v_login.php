<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>

<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
  
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-log-in"></span>| Log in</div>
        <div class="panel-body">
          
              
              
                <?php
                  if ($this->session->flashdata('gagal')) {
                    echo "<div class='form-group'>";
                    echo $this->session->flashdata('gagal');
                    echo "<hr>";
                    echo "</div>";
                  }
                ?>
              

              <div class="form-group" id="text1">
              <div class="alert alert-success" role="alert">
                <b><h5>Login Untuk Siswa</h5></b>
               
                </div>
              </div>
              
              <div class="form-group" id="text2">
              <div class="alert alert-info" role="alert">

                <b><h5>Login Untuk Guru/Walikelas</h5></b>
                
                </div>
              </div>

              <div id="content1">
              <form role="form" method="POST" action="<?php echo site_url('login'); ?>">
            <fieldset>
                <div class="form-group">
                <input class="form-control" placeholder="NIS" name="nis" type="text">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="PASSWORD" name="tglLahir" type="password" value="">
              </div>
               <input class="btn btn-primary" name="logSiswa" type="submit" value="Login">
               </fieldset>
          </form>
              </div>

              <div id="content2">
              <form role="form" method="POST" action="<?php echo site_url('login'); ?>">
            <fieldset>
                <div class="form-group">
                <input class="form-control" placeholder="NUPTK" name="NUPTK" type="text">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="PASSWORD" name="tglLahirGuru" type="password" value="">
              </div>
               <input class="btn btn-primary" name="logGuru" type="submit" value="Login">

               </fieldset>
          </form>
              </div>


             <div class="form-group" id="loginSiswa">
                <center><a href="#" class="btn btn-primary" id="lsiswa">Login Siswa</a></center>
             </div>
              
              <div class="form-group" id="loginGuru">
              <center><a href="#" class="btn btn-success" id="lguru">Login Walikelas/Guru</a></center>
             </div>

             <div class="form-group" id="kembaliCt">
               <a href="#" class="btn btn-warning" id="kembali">Kembali</a>
             </div>

            
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->  
  
    <center>&copy; 2017/XII-RPL-GEN12th</center>

  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script>
    !function ($) {
      $(document).on("click","ul.nav li.parent > a > span.icon", function(){      
        $(this).find('em:first').toggleClass("glyphicon-minus");    
      }); 
      $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script>

  <script>
   
   $(document).ready(function(){

    $('#content1').hide(250);
    $('#content2').hide(250);
    $('#kembaliCt').hide(250);
    $('#text1').hide(250);
    $('#text2').hide(250);

    $(function(){
      $('#lsiswa').click(function(){
          $('#lguru').hide(500);
          $('#content1').show(1000);
          $('#lsiswa').hide(500);
          $('#kembaliCt').show(500);
          $('#text1').slideDown(250);
      });

      $('#lguru').click(function(){
          $('#lsiswa').hide(500);
          $('#content2').show(1000);
          $('#lguru').hide(500);
          $('#kembaliCt').show(500);
          $('#text2').slideDown(250);
      });

      $('#kembali').click(function(){
          $('#lguru').show(500);
          $('#content1').hide(500);
          $('#content2').hide(500);
          $('#lsiswa').show(500);
          $('#kembaliCt').hide(500);
          $('#text1').hide(250);
          $('#text2').hide(250);
      });

    });
   
   });

  </script> 
</body>

</html>
