<section class="content container-fluid">

        <div class="row">
          <div class="col-lg-12">
          <?php echo $this->session->flashdata('msg') ?>
          </div>
          <div class="col-xs-12 col-lg-6 pt-5">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Tambah Kategori</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form action="<?php echo base_url('admin/tambah_kategori') ?>" method="post" class="form-horizontal">
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="inputEmail3" required>
                    </div>
                  </div>
                </div>
                <!-- /.box-footer -->
              </div>
              <div class="box box-widget">
                <div class="box-body">
                  <button type="submit" class="btn btn-primary">submit</button>
                </div>
              </div>
            </form>
            <!-- /.box -->
          </div>
          <div class="col-xs-12 col-lg-6 pt-5">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Kategori</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <table class="table">
                  <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Kategori</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                      <?php
                        $no=1;
                        foreach($hasil as $data){
                      ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                    <td class="text-center"> 
                      <a href="<?php echo base_url('admin/hapus_kategori/'.$data->id) ?>" class="btn btn-danger btn-sm btn-del"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                      <?php } ?>
                </tbody></table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>

    </section>