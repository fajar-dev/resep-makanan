<section class="content container-fluid">

        <div class="row">
          <div class="col-xs-12 pt-5">
            <div class="box box-primary">
              <!-- /.box-header -->
              <div class="box-body">
              <span class="text-danger"><?php echo $this->session->flashdata('pesan') ?></span>
                <?php echo form_open_multipart('admin/tambah_resep');?>
                  <div class="col-lg-4 form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" required>
                  </div>
                  <div class="col-lg-4 form-group">
                    <label for="exampleInputEmail1">Bahan Utama</label>
                    <input type="text" class="form-control" name="bahan" id="exampleInputEmail1" required>
                  </div>
                  <div class="col-lg-4 form-group">
                    <label for="exampleInputEmail1">Bumbu</label>
                    <input type="text" class="form-control" name="bumbu" id="exampleInputEmail1" required>
                  </div>
                  <div class="col-lg-4 form-group">
                    <label for="exampleInputEmail1">Tingkat Kesulitan</label>
                    <input type="text" class="form-control" name="kesulitan" id="exampleInputEmail1" required>
                  </div>
                  <div class="col-lg-4 form-group">
                    <label for="exampleInputEmail1">Waktu</label>
                    <input type="text" class="form-control" name="waktu" id="exampleInputEmail1" required>
                  </div>
                  <div class="col-lg-4 form-group">
                    <label for="exampleInputEmail1">Kategori</label>
                    <select class="form-control" name="kategori" required>
                      <?php
                        foreach($hasil as $data){
                      ?>
                      <option value="<?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?>"><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-lg-4 form-group">
                    <label for="exampleInputEmail1">Daerah Asal</label>
                    <input type="text" class="form-control" name="asal" id="exampleInputEmail1" required>
                  </div>
                  <div class="col-lg-4 form-group">
                    <label for="exampleInputEmail1">Gambar</label>
                    <input type="file" class="form-control" name="foto" id="exampleInputEmail1" required>
                  </div>
                  <div class="col-lg-12 form-group">
                    <label>Cara Masak</label>
                    <textarea class="form-control" rows="3" id="summernote" name="cara" required></textarea>
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
              <div class="box box-widget">
                <div class="box-body">
                  <a href="" class="btn btn-warning">Cancel</a>
                  <button type="submit" class="btn btn-primary">submit</button>
                </div>
              </div>
              <?php echo form_close(); ?> 
          </div>
        </div>

    </section>