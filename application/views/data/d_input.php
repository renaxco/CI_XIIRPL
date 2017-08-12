<div class="alert alert-success" role="alert">
               <strong>Hi,</strong>.Segera Isi Data Data Di Bawah Ini.
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
              <input type="text" class="form-control" id="noHP" placeholder="No HP" name="noHP">
            </div>
            </div>

            <div class="form-group">
            <label for="whatsApp" class="col-sm-2 control-label">WhatsApp</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="whatsApp" placeholder="WhatsApp" name="whatsApp">
            </div>
            </div>

            <div class="form-group">
            <label for="BBM" class="col-sm-2 control-label">BBM</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="BBM" placeholder="BBM" name="BBM">
            </div>
            </div>

            <div class="form-group">
            <label for="ID_Line" class="col-sm-2 control-label">ID Line</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="ID_Line" placeholder="ID LINE" name="ID_Line">
            </div>
            </div>

            <div class="form-group">
            <label for="ID_Facebook" class="col-sm-2 control-label">ID Facebook</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="ID_Facebook" placeholder="ID Facebook" name="ID_Facebook">
            </div>
            </div>
                       
            <div class="form-group">
            <label for="Email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="Email" placeholder="Email" name="Email">
            </div>
            </div>
            
              <div class="alert alert-warning" role="alert">
              <center>Alamat Lengkap</center>
                          </div>
                          <hr>
            
            <div class="form-group">
            <label for="Jalan" class="col-sm-2 control-label">Jalan</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="jalan" placeholder="Jalan" name="jlan">
            </div>
            </div>

            <div class="form-group">
            <label for="RT/RW" class="col-sm-2 control-label">RT/RW</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="rtw" placeholder="RT/RW" name="rtw">
            </div>
            </div>

            <div class="form-group">
            <label for="Desa/Kelurahan" class="col-sm-2 control-label">Desa/Kelurahan</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="desaKel" placeholder="Desa/Kelurahan" name="desaKel">
            </div>
            </div>

            <div class="form-group">
            <label for="Kecamatan" class="col-sm-2 control-label">Kecamatan</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="Kecamatan" placeholder="Kecamatan" name="Kecamatan">
            </div>
            </div>

            <div class="form-group">
            <label for="userfile" class="col-sm-2 control-label">Photo Depan Rumah.</label>
            <div class="col-sm-4">
              <input type="file" class="form-control" id="userfile" name="userfile" required>
            </div>
            </div>

            <div class="form-group">
              <label for="Lokasi" class="col-sm-2 control-label">Lokasi Anda (Anda Tentukan di MAP)</label>
              <a href="#map" class="btn btn-warning" id="btnShow">Buka MAP</a>
              <div class="col-sm-4">
              <input type="text" id="latitude" name="latitude" class="form-control" required><span>* Latitude</span>
              <input type="text" id="longitude" name="longitude" class="form-control" required><span>* Longitude</span>
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
              <input type="text" class="form-control" id="n_ayah" name="n_ayah">
            </div>
            </div>

            <div class="form-group">
            <label for="No Kontak Ayah" class="col-sm-2 control-label">No Kontak Ayah</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="nk_ayah" name="nk_ayah" value="+62">
            </div>
            </div>

            <div class="form-group">
            <label for="Pekerjaan Ayah" class="col-sm-2 control-label">Pekerjaan Ayah</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="p_ayah" name="p_ayah">
            </div>
            </div>

             </div>

            
             <div class="alert alert-danger" role="alert">

              <div class="form-group">
            <label for="Nama Ibu" class="col-sm-2 control-label">Nama Ibu</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="n_ibu" name="n_ibu">
            </div>
            </div>

            <div class="form-group">
            <label for="No Kontak Ibu" class="col-sm-2 control-label">No Kontak Ibu</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="nk_ibu" name="nk_ibu" value="+62">
            </div>
            </div>

            <div class="form-group">
            <label for="Pekerjaan Ibu" class="col-sm-2 control-label">Pekerjaan Ibu</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="p_ibu" name="p_ibu">
            </div>
            </div>

             </div>

             <div class="form-group">
            <label for="Jumlah Anak" class="col-sm-2 control-label">Jumlah Anak</label>
            <div class="col-sm-4">
              <input type="number" min="0" max="50" class="form-control" id="j_anak" name="j_anak">
            </div>
            </div>

            <div class="form-group">
            <label for="Anak Ke-" class="col-sm-2 control-label">Anak Ke-</label>
            <div class="col-sm-4">
              <input type="number" min="0" max="50" class="form-control" id="k_anak" name="k_anak">
            </div>
            </div>

            <div class="form-group">
            <label for="Saudara Yang Bisa Di HUB." class="col-sm-2 control-label">Saudara Yang Bisa Di HUB.</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="saudara" name="saudara">
            </div>
            </div>
            
            <hr>
              <div class="form-group">
              <div class="col-sm-4">
              <input type="submit" name="proses" class="btn btn-success" value="SIMPAN">
             
              </div>
              </div>

                       </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
  
    </div>
    <!-- /#wrapper -->
      
      <div id="dialog" style="display: none">
        <div id="dvMap" style="height: 450px; width: 600px;">
        </div>
    </div>