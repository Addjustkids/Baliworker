<!-- START HEADER -->
<header id="header">      
    <div id="social_icon" class="container">
        <div class="row">
            <div class="col-sm-12 overflow">
               <div class="social-icons pull-right">
                    <ul class="nav nav-pills">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-wordpress"></i></a></li>
                    </ul>
                </div> 
            </div>
         </div>
    </div>
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>">
                    <h1><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="logo"><b>BALI</b>WORKER</h1>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a href="<?php echo site_url('main_controller');?>">Home</a></li> 
                    <li class="active"><a href="#modal_login" data-toggle="modal">Login</a></li>                                     
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- END OF HEADER -->

<!-- CAPTION PAGE -->
<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Mendaftar</h1>
                        <p>Dengan mendaftar di Bali Worker anda bisa mencari jasa, pekerjaan <br>dan juga bisa melakukan transaksi jual beli produk khas Bali</p>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF CAPTION PAGE -->

<!-- START FORM PENDAFTARAN -->
<section id="team">
    <div class="container">
        <div class="col-md-7">   
            <form id="data_akun" name="cmx-form contact-form" method="post" action="">
                <fieldset>
                    <div class="judul">
                        <i class="fa fa-check-circle-o judul-input"></i>
                        <h2 id="judul_input">Input Data Akun</h2>
                        <hr>
                    </div>
                    <div class="form-group">
                        <label for="daftar_nama">Nama Lengkap : </label>
                        <input id="daftar_nama" type="text" name="daftar_nama" class="form-control"  minlength="2" required="required" >
                    </div>
                    <div class="form-group">
                        <label for="daftar_username">Username : </label>
                        <input id="daftar_username" type="text" name="daftar_username" class="form-control"  minlength="2" required="required" >
                    </div>
                    <div class="form-group">
                        <label for="daftar_email">Alamat Email : </label>
                        <input id="daftar_email" type="email" name="daftar_email" class="form-control" required="required" >
                    </div>
                    <div class="form-group">
                        <label for="daftar_password">Kata Sandi : </label>
                        <input id="daftar_password" type="password" name="daftar_password" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Ulangi Kata Sandi : </label>
                        <input id="confirm_password" type="password" name="confirm_password" class="form-control" required="required">
                    </div>

                    <div class="judul">
                        <i class="fa fa-check-circle-o judul-input"></i>
                        <h2 id="judul_input">Input Alamat</h2>
                        <hr>
                    </div>
                    
                    <div class="control-group">
                            <label for="daftar_negara">Negara :</label>
                            <select class="select" name="daftar_kabupaten">
                                <option value="">Negara</option>
                                <option value="1">German</option>
                                <option value="2">Inggris</option>
                                <option value="3">Perancis</option>
                            </select>
                    </div>

                    <div class="control-group">
                            <label for="daftar_provinsi">Provinsi :</label>
                            <select class="select" name="daftar_provinsi">
                                <option value="">Provinsi</option>
                            </select>
                    </div>

                    <div class="control-group">
                            <label for="daftar_kabupaten">Kabupaten :</label>
                            <select class="select" name="daftar_kabupaten">
                                <option value="">Kabupaten</option>
                            </select>
                    </div>
                    
                    <div class="control-group">
                        <label for="daftar_kecamatan">Kecamatan : </label>
                        <select class="select" name="daftar_kecamatan">
                            <option value="">Kecamatan</option>
                        </select>
                    </div>

                    <div class="control-group">
                        <label for="daftar_kelurahan">Kelurahan : </label>
                        <select class="select" name="daftar_kelurahan">
                            <option value="">Kelurahan</option>
                        </select>
                    </div>

                    <div class="judul">
                        <i class="fa fa-check-circle-o judul-input"></i>
                        <h2 id="judul_input">Tentang Keahlian Anda</h2>
                        <hr>
                    </div>

                    <div class="form-group">
                        <div class="control-group">
                            <label for="daftar_kategori">Kategori Keahlian Anda :</label>
                            <select class="keahlian" name="daftar_kategori">
                                <option value="">Kategori</option>
                                <option value="1">Kategori</option>
                                <option value="2">Kategori</option>
                                <option value="3">Kategori</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="control-group">
                            <label for="daftar_keahlian">Spesifikasi Keahlian Anda :</label>
                            <select class="keahlian" name="daftar_spesifikasi_keahlian">
                                <option value="">Spesifikasi Keahlian</option>
                                <option value="1">Spesifikasi Keahlian</option>
                                <option value="2">Spesifikasi Keahlian</option>
                                <option value="3">Spesifikasi Keahlian</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="" class="btn btn-info next">Mendaftar</button>
                    </div>

                </fieldset>
            </form>                             
        </div>
    </div>
</section>
 <!-- END OF FORM PENDAFTARAN -->