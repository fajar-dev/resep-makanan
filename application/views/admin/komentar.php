<section class="content container-fluid">

        <div class="row">
          <div class="col-xs-12 pt-5">
          <?php echo $this->session->flashdata('msg') ?>
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Komentar Masuk</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body with-border">
                <table class="table">
                  <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telefon</th>
                    <th>Isi</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                  </tr>
                      <?php
                        $no=1;
                        foreach($hasil as $data){
                      ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                    <td><?php echo htmlentities($data->email, ENT_QUOTES, 'UTF-8');?></td>
                    <td><?php echo htmlentities($data->hp, ENT_QUOTES, 'UTF-8');?></td>
                    <td><?php echo htmlentities($data->isi, ENT_QUOTES, 'UTF-8');?></td>
                    <td><?php echo htmlentities($data->tgl, ENT_QUOTES, 'UTF-8');?></td>
                    <td> 
                      <a href="<?php echo base_url('admin/hapus_komen/'.$data->id) ?>" class="btn btn-danger btn-sm btn-del"><i class="fa fa-trash"></i> Hapus</a>
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