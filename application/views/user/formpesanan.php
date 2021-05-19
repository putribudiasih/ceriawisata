

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Form Pesanan Paket Wisata</h1>

                                     
                
        
                    <form action="<?php echo base_url('Input_pegawai/tambah_aksi'); ?>"method="post">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="Nama" class="form-control" value="<?php echo set_value('Nama')?>">
                             <div class="error"><?php echo form_error('Nama', '<small class="text-danger pl-3">','</small>');?></div> 
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="NIP" class="form-control" value="<?php echo set_value('NIP')?>"> 
                             <div class="error"><?php echo form_error('NIP', '<small class="text-danger pl-3">','</small>');?></div> 
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" name="Jabatan" class="form-control" value="<?php echo set_value('Jabatan')?>">
                             <div class="error"><?php echo form_error('Jabatan', '<small class="text-danger pl-3">','</small>');?></div> 
                        </div>
                        <div class="form-group">
                            <label>Berangkat dari</label>
                            <input type="text" name="Jabatan" class="form-control" value="<?php echo set_value('Jabatan')?>">
                             <div class="error"><?php echo form_error('Jabatan', '<small class="text-danger pl-3">','</small>');?></div> 
                        </div>
                        <div class="form-group">
                            <label>Jumlah rombongan</label>
                            <input type="text" name="Jabatan" class="form-control" value="<?php echo set_value('Jabatan')?>">
                             <div class="error"><?php echo form_error('Jabatan', '<small class="text-danger pl-3">','</small>');?></div> 
                        </div>
                        <div class="form-group">
                          <label for="tempat">Tanggal berangkat</label>
                          <div class="input-group">
                              <input id="tanggal" type="date" class="form-control" placeholder="tanggal" name="tanggal" autocomplete="off">
                          </div>
                          <div style="margin-top: 5px" class="error"><?php echo form_error('tanggal', '<small class="text-danger">','</small>');?></div>
                        </div>
                        <div class="form-group">
                          <label for="tempat">Tanggal selesai</label>
                          <div class="input-group">
                              <input id="tanggal" type="date" class="form-control" placeholder="tanggal" name="tanggal" autocomplete="off">
                          </div>
                          <div style="margin-top: 5px" class="error"><?php echo form_error('tanggal', '<small class="text-danger">','</small>');?></div>
                        </div>
                        <div class="form-group">
                            <label>Catatan... (bisa menambah atau mengurangi destinasi tempat wisata)</label>
                            <input type="text" name="Jabatan" class="form-control" value="<?php echo set_value('Jabatan')?>">
                             <div class="error"><?php echo form_error('Jabatan', '<small class="text-danger pl-3">','</small>');?></div> 
                        </div>
                        
                        <div class="mb-md-5">
                       <center><button type="reset" class= "btn btn-danger">Reset</button>
                        <button type="submit" class= "btn btn-primary">Simpan</button></center> 
                        </div>
                      
                    </form>
                

                </div>
            

            </div>
            <!-- End of Main Content -->