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
               <input type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" value="Register" id="registerModal">
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


<!-- START -->

<div class="modal fade" tabindex="-1" role="dialog" id="info">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Pemberitahuan</h4>
                    </div>
                    <div class="modal-body">
                      <p>Info&hellip;</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal" id="infoOk">Ok</button>
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->

        
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">

                <h4 class="modal-title" id="exampleModalLabel">Register</h4>
              </div>
              <div class="modal-body">
                <form role="form" method="POST" action="<?php echo site_url('login'); ?>">
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">NIS</label>
                    <input type="text" class="form-control" id="RegNIS">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="control-label">Photo</label>
                    <input type="file" name="RegFoto">
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" id="Register" name="Register" value="Register!">
              </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>

<!-- END -->
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

    $('#content1').hide();
    $('#content2').hide();
    $('#kembaliCt').hide();
    $('#text1').hide();
    $('#text2').hide();

    $(function(){
      $('#lsiswa').click(function(){
          //$('#lguru').hide(500);
          $('#info').modal('show');
          //$('#content1').show(1000);
          //$('#lsiswa').hide(500);
          //$('#kembaliCt').show(500);
          //$('#text1').slideDown(250);
      });

      $('#infoOk').click(function(){
          $('#lguru').hide(500);
         // $('#info').modal('show');
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

   //$('#info').modal('show');
// START

$('#registerModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  // var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  // var modal = $(this)
  // modal.find('.modal-title').text('New message to ' + recipient)
//  modal.find('.modal-body input').val(recipient)
})

//END
  
  </script> 
</body>

</html>
