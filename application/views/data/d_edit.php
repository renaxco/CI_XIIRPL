<div class="alert alert-info" role="alert">
               <strong>Hi,</strong>. Data Anda Sudah Di Simpan Di DATABASE, Jadi Anda Tidak Perlu MengInput Data Baru. Edit Data Anda Jika Ada Yang Salah.
              </div>

              <div id="form">
            
              <div class="alert alert-info" role="alert">
              <center>Kontak Siswa</center>
                          </div>
                        <hr>
            
         
                        <?php echo form_open_multipart('home','class="form-horizontal" role="form"'); ?>
            
            <div class="form-group">
            <label for="noHP" class="col-sm-2 control-label">No HP</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="noHP" value="<?php echo set_value('noHP', isset($showKontak['noHP']) ? $showKontak['noHP'] : ''); ?>" placeholder="No HP" name="noHP">
            </div>
            </div>

            <div class="form-group">
            <label for="whatsApp" class="col-sm-2 control-label">WhatsApp</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="whatsApp" value="<?php echo set_value('whatsApp', isset($showKontak['whatsApp']) ? $showKontak['whatsApp'] : ''); ?>" placeholder="WhatsApp" name="whatsApp">
            </div>
            </div>

            <div class="form-group">
            <label for="BBM" class="col-sm-2 control-label">BBM</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="BBM" value="<?php echo set_value('BBM', isset($showKontak['BBM']) ? $showKontak['BBM'] : ''); ?>" placeholder="BBM" name="BBM">
            </div>
            </div>

            <div class="form-group">
            <label for="ID_Line" class="col-sm-2 control-label">ID Line</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="ID_Line" value="<?php echo set_value('ID_Line', isset($showKontak['ID_Line']) ? $showKontak['ID_Line'] : ''); ?>" placeholder="ID LINE" name="ID_Line">
            </div>
            </div>

            <div class="form-group">
            <label for="ID_Facebook" class="col-sm-2 control-label">ID Facebook</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="ID_Facebook" value="<?php echo set_value('ID_Facebook', isset($showKontak['ID_Facebook']) ? $showKontak['ID_Facebook'] : ''); ?>" placeholder="ID Facebook" name="ID_Facebook">
            </div>
            </div>
                       
            <div class="form-group">
            <label for="Email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="Email" value="<?php echo set_value('Email', isset($showKontak['Email']) ? $showKontak['Email'] : ''); ?>" placeholder="Email" name="Email">
            </div>
            </div>
            
              <div class="alert alert-warning" role="alert">
              <center>Alamat Lengkap</center>
                          </div>
                          <hr>
            
            <div class="form-group">
            <label for="Jalan" class="col-sm-2 control-label">Jalan</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="jalan" value="<?php echo set_value('Jalan', isset($showAlamat['Jalan']) ? $showAlamat['Jalan'] : ''); ?>" placeholder="Jalan" name="jlan">
            </div>
            </div>

            <div class="form-group">
            <label for="RT/RW" class="col-sm-2 control-label">RT/RW</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="rtw" value="<?php echo set_value('RT_RW', isset($showAlamat['RT_RW']) ? $showAlamat['RT_RW'] : ''); ?>" placeholder="RT/RW" name="rtw">
            </div>
            </div>

            <div class="form-group">
            <label for="Desa/Kelurahan" class="col-sm-2 control-label">Desa/Kelurahan</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="desaKel" value="<?php echo set_value('Desa_keluharan', isset($showAlamat['Desa_keluharan']) ? $showAlamat['Desa_keluharan'] : ''); ?>" placeholder="Desa/Kelurahan" name="desaKel">
            </div>
            </div>

            <div class="form-group">
            <label for="Kecamatan" class="col-sm-2 control-label">Kecamatan</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="Kecamatan" value="<?php echo set_value('kecamatan', isset($showAlamat['kecamatan']) ? $showAlamat['kecamatan'] : ''); ?>" placeholder="Kecamatan" name="Kecamatan">
            </div>
            </div>

            <div class="form-group">
            <label for="userfile" class="col-sm-2 control-label">Photo Depan Rumah.</label>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myphotoModal">Tampilkan Photo</button>
            <div class="col-sm-4">
              <input type="file" class="form-control" id="userfile" name="userfile" required>
            </div>
            </div>

            <div class="form-group">
              <label for="Lokasi" class="col-sm-2 control-label">Lokasi Anda (Anda Tentukan di MAP)</label>
              <a href="#map" class="btn btn-warning" id="btnShow">Buka MAP</a>
              <div class="col-sm-4">
              <input type="text" id="latitude" name="latitude" value="<?php echo set_value('Latitude', isset($showAlamat['Latitude']) ? $showAlamat['Latitude'] : ''); ?>" class="form-control" required><span>* Latitude</span>
              <input type="text" id="longitude" name="longitude" value="<?php echo set_value('Longitude', isset($showAlamat['Longitude']) ? $showAlamat['Longitude'] : ''); ?>" class="form-control" required><span>* Longitude</span>
               </div>
            </div>

            <div class="alert alert-danger" role="alert">
              <center>Data Keluarga</center>
                          </div>
                          <hr>

            <div class="alert alert-info" role="alert">

              <div class="form-group">
            <label for="Nama Ayah" class="col-sm-2 control-label">Nama Ayah</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="n_ayah" value="<?php echo set_value('nama_ayah', isset($showKeluarga['nama_ayah']) ? $showKeluarga['nama_ayah'] : ''); ?>" name="n_ayah">
            </div>
            </div>

            <div class="form-group">
            <label for="No Kontak Ayah" class="col-sm-2 control-label">No Kontak Ayah</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="nk_ayah" value="<?php echo set_value('noKontakAyah', isset($showKeluarga['noKontakAyah']) ? $showKeluarga['noKontakAyah'] : ''); ?>" name="nk_ayah" value="+62">
            </div>
            </div>

            <div class="form-group">
            <label for="Pekerjaan Ayah" class="col-sm-2 control-label">Pekerjaan Ayah</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="p_ayah" value="<?php echo set_value('pekerjaanAyah', isset($showKeluarga['pekerjaanAyah']) ? $showKeluarga['pekerjaanAyah'] : ''); ?>" name="p_ayah">
            </div>
            </div>

             </div>

            
             <div class="alert alert-danger" role="alert">

              <div class="form-group">
            <label for="Nama Ibu" class="col-sm-2 control-label">Nama Ibu</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="n_ibu" value="<?php echo set_value('nama_ibu', isset($showKeluarga['nama_ibu']) ? $showKeluarga['nama_ibu'] : ''); ?>" name="n_ibu">
            </div>
            </div>

            <div class="form-group">
            <label for="No Kontak Ibu" class="col-sm-2 control-label">No Kontak Ibu</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="nk_ibu" value="<?php echo set_value('noKontakIbu', isset($showKeluarga['noKontakIbu']) ? $showKeluarga['noKontakIbu'] : ''); ?>" name="nk_ibu" value="+62">
            </div>
            </div>

            <div class="form-group">
            <label for="Pekerjaan Ibu" class="col-sm-2 control-label">Pekerjaan Ibu</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="p_ibu" value="<?php echo set_value('pekerjaanIbu', isset($showKeluarga['pekerjaanIbu']) ? $showKeluarga['pekerjaanIbu'] : ''); ?>" name="p_ibu">
            </div>
            </div>

             </div>

             <div class="form-group">
            <label for="Jumlah Anak" class="col-sm-2 control-label">Jumlah Anak</label>
            <div class="col-sm-4">
              <input type="number" min="0" max="50" class="form-control" value="<?php echo set_value('jumlahAnak', isset($showKeluarga['jumlahAnak']) ? $showKeluarga['jumlahAnak'] : ''); ?>" id="j_anak" name="j_anak">
            </div>
            </div>

            <div class="form-group">
            <label for="Anak Ke-" class="col-sm-2 control-label">Anak Ke-</label>
            <div class="col-sm-4">
              <input type="number" min="0" max="50" class="form-control" value="<?php echo set_value('AnakKe', isset($showKeluarga['AnakKe']) ? $showKeluarga['AnakKe'] : ''); ?>" id="k_anak" name="k_anak">
            </div>
            </div>

            <div class="form-group">
            <label for="Saudara Yang Bisa Di HUB." class="col-sm-2 control-label">Saudara Yang Bisa Di HUB.</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="saudara" value="<?php echo set_value('saudara', isset($showKeluarga['saudara']) ? $showKeluarga['saudara'] : ''); ?>" name="saudara">
            </div>
            </div>
            
            <hr>
              <div class="form-group">
              <div class="col-sm-4">
              <input type="submit" name="update" class="btn btn-success" value="UBAH">
              </div>
              </div>

                       </form>
        

      <div id="myphotoModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Photo Depan Rumah : <b><?php echo $this->session->userdata('nama'); ?></b></h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
     
          <div class="form-group">
            
            <img class="img-responsive" src="<?php echo base_url(); ?>/uploads/<?php echo $showAlamat['Foto_DepanRumah'] ?>" alt="PHOTO UPLOAD">

            <hr>
            <p class="form-control">
              <b>NOTE :</b> Anda Bisa Mengganti Photo Depan Rumah Anda.
            </p>

        </div>
        <!-- footer modal -->
        <div class="modal-footer">

          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

          </div>
         </div>
      </div>
    </div>
    </div>
                  

                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
  
    </div>
    <!-- /#wrapper -->
  <div id="dialog" style="display: none">
    <input id="pac-input" class="form-control" type="text" placeholder="Cari Lokasi Rumah Anda ....">
      <hr>
        <div id="dvMap" style="height: 450px; width: 600px;">
        </div>
    </div>
