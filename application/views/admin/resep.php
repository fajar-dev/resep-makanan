<section class="content container-fluid">

        <div class="row">
          <div class="col-xs-12 pt-5">
          <?php echo $this->session->flashdata('msg') ?>
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Resep Tersedia</h3>
  
                <div class="box-tools">
                  <a href="<?php echo site_url('admin/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>  Tambah</a>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body with-border">
                <table class="table">
                  <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Nama</th>
                    <th>Bahan Utama</th>
                    <th>Bumbu</th>
                    <th>Tingkat Kesulitan</th>
                    <th>Waktu</th>
                    <th>Kategori</th>
                    <th>Daerah Asal</th>
                    <th>Aksi</th>
                  </tr>
                      <?php
                        $no=1;
                        foreach($hasil as $data){
                      ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                    <td><?php echo htmlentities($data->bahan, ENT_QUOTES, 'UTF-8');?></td>
                    <td><?php echo htmlentities($data->bumbu, ENT_QUOTES, 'UTF-8');?></td>
                    <td><?php echo htmlentities($data->kesulitan, ENT_QUOTES, 'UTF-8');?></td>
                    <td><?php echo htmlentities($data->waktu, ENT_QUOTES, 'UTF-8');?>r</td>
                    <td><?php echo htmlentities($data->kategori, ENT_QUOTES, 'UTF-8');?></td>
                    <td><?php echo htmlentities($data->asal, ENT_QUOTES, 'UTF-8');?></td>
                    <td> 
                      <a href="<?php echo base_url('page/detail/'.$data->id) ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
                      <a href="<?php echo base_url('admin/hapus_resep/'.$data->id) ?>" class="btn btn-danger btn-sm btn-del"><i class="fa fa-trash"></i> Hapus</a>
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