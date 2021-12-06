<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Resep</title>

    <!-- Favicon -->

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/page/style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-content">
            <h3>Cooking in progress..</h3>
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area bg-img bg-overlay" style="background-image: url(<?php echo base_url() ?>assets/page/img/bg-img/header.jpg);">
            <div class="container h-100">
                
            </div>
        </div>

        <!-- Logo Area -->
        <div class="logo-area">
            <a href="#"><img src="<?php echo base_url() ?>assets/page/img/core-img/logo.png" alt=""></a>
        </div>

    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Search Area Start ##### -->
    <div class="bueno-search-area section-padding-100-0 pb-70 bg-img" style="background-image: url(<?php echo base_url() ?>assets/page/img/core-img/pattern.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="<?php echo base_url()?>page/tampilkan" method="post">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-30">
                                    <select class="form-control" id="ingredients" name="kategori">
                                      <option  selected disabled>-- Kategory --</option>
                                      <?php
                                        foreach($kat as $x){
                                      ?>
                                      <option value="<?php echo htmlentities($x->nama, ENT_QUOTES, 'UTF-8');?>"><?php echo htmlentities($x->nama, ENT_QUOTES, 'UTF-8');?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="form-group mb-30">
                                    <button class="btn bueno-btn w-100">Tampilkan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Search Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama Masakan</th>
                                <th>Bahan Utama</th>
                                <th>Bumbu</th>
                                <th>Tigkat Kesulitan</th>
                                <th>Waktu</th>
                                <th>Kategori</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                  foreach($hasil as $data){
                                ?>
                            <tr>
                                <td class="pt-4"><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                <td class="pt-4"><?php echo htmlentities($data->bahan, ENT_QUOTES, 'UTF-8');?></td>
                                <td class="pt-4"><?php echo htmlentities($data->bumbu, ENT_QUOTES, 'UTF-8');?></td>
                                <td class="pt-4"><?php echo htmlentities($data->kesulitan, ENT_QUOTES, 'UTF-8');?></td>
                                <td class="pt-4"><?php echo htmlentities($data->waktu, ENT_QUOTES, 'UTF-8');?></td>
                                <td class="pt-4"><?php echo htmlentities($data->kategori, ENT_QUOTES, 'UTF-8');?></td>
                                <td><a href="<?php echo base_url('page/detail/'.$data->id) ?>" class="btn bueno-btn w-100">Detail</a></td>
                            </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <p class="copywrite-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Faiza Food
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url() ?>assets/page/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url() ?>assets/page/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url() ?>assets/page/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url() ?>assets/page/js/active.js"></script>
</body>

</html>