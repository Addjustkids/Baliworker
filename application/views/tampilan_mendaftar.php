<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mendaftar | Bali Worker</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lightbox.css" rel="stylesheet"> 
    <link href="assets/css/animate.min.css" rel="stylesheet"> 
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">

    <!-- SELECTIZE CSS -->
    <link rel="stylesheet" href="assets/css/selectize/selectize.default.css">
    <!-- END OF SELECTIZE CSS -->

    <!-- CUSTOM CSS -->
    <link href="assets/css/custom_css/custom-tampilan-mendaftar.css" rel="stylesheet">
    <!-- END OF CUSTOM CSS -->

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script src="assets/js/selectize.js"></script>
    <script src="assets/js/jquery.validate.js"></script>

    <!-- END OF JAVASCRIPT -->

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

     <!-- START MODAL -->
    <div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div id="modal_content" class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Login Disini</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="username" class="control-label">Username:</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password:</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <a id="lupa_password" href="#">Lupa Password?</a>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF MODAL -->

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
                        <h1><img src="assets/images/logo.png" alt="logo"><b>BALI</b>WORKER</h1>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a href="<?php echo base_url('mendaftar');?>">Daftar</a></li> 
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
                                <label for="daftar_kabupaten">Kabupaten :</label>
                                <input type="text" id="daftar_kabupaten" name="daftar_kabupaten" onChange="cek_kabupaten()" class="input-kategori demo-default">
                        </div>
                        <div id="error_kabupaten" class="error keahlian"></div>

                        <script>  
                            $('#daftar_kabupaten').selectize({
                                persist: false,
                                maxItems: 1,
                                searchField: ['kabupaten'],
                                valueField: 'kabupaten',
                                options: [
                                    {kabupaten: 'Denpasar'},
                                    {kabupaten: 'Badung'},
                                    {kabupaten: 'Gianyar'},
                                    {kabupaten: 'Tabanan'},
                                    {kabupaten: 'Buleleng'},
                                    {kabupaten: 'Karangasem'},
                                    {kabupaten: 'Klungkung'},
                                    {kabupaten: 'Bangli'},
                                    {kabupaten: 'Negara'}
                                    
                                ],
                                render: {
                                    item: function(item, escape) {
                                        return '<div>' +
                                            (item.kabupaten ? '<span class="">' + escape(item.kabupaten) + '</span>' : '') +
                                        '</div>';
                                    },
                                    option: function(item, escape) {
                                        var caption = item.kabupaten ? item.kabupaten : null;
                                        return '<div>' +
                                        (caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
                                        '</div>';
                                    }
                                }

                            });
                        </script>

                        <div class="control-group">
                            <label for="daftar_kecamatan">Kecamatan : </label>
                            <input id="daftar_kecamatan" type="text" name="daftar_kecamatan" class="input-kategori demo-default" required="required" >
                        </div>
                        <div id="error_kecamatan" class="error keahlian"></div>

                        <div id="script_kecamatan"></div>

                        <div class="control-group">
                            <label for="daftar_kelurahan">Kelurahan : </label>
                            <input id="daftar_kelurahan" type="text" name="daftar_kelurahan" class="input-kategori demo-default" required="required" >
                        </div>
                        <div id="error_kelurahan" class="error keahlian"></div>

                        <script>  
                            $('#daftar_kelurahan').selectize({
                                persist: false,
                                maxItems: 1,
                                searchField: ['kelurahan'],
                                valueField: 'kelurahan',
                                options: [
                                    {kelurahan: 'Karangasem'},
                                    {kelurahan: 'Klungkung'},
                                    {kelurahan: 'Gianyar'},
                                    {kelurahan: 'Badung'},
                                    
                                ],
                                render: {
                                    item: function(item, escape) {
                                        return '<div>' +
                                            (item.kelurahan ? '<span class="">' + escape(item.kelurahan) + '</span>' : '') +
                                        '</div>';
                                    },
                                    option: function(item, escape) {
                                        var caption = item.kelurahan ? item.kelurahan : null;
                                        return '<div>' +
                                        (caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
                                        '</div>';
                                    }
                                }

                            });
                        </script>

                        <div class="form-group">
                            <label for="daftar_jalan">Jalan/Keterangan Lebih Lengkap : </label>
                            <textarea id="daftar_jalan" type="text" name="daftar_jalan" class="form-control" required="required"></textarea>
                        </div>

                        <div class="judul">
                            <i class="fa fa-check-circle-o judul-input"></i>
                            <h2 id="judul_input">Tentang Keahlian Anda</h2>
                            <hr>
                        </div>
                        <div class="form-group">
                            <div class="control-group">
                                <label for="daftar_kategori">Kategori Keahlian Anda :</label>
                                <input type="text" id="daftar_kategori" name="daftar_kategori" onChange="cek_kategori()" class="input-kategori demo-default">
                            </div>
                            <div id="error_kategori" class="error keahlian"></div>

                            <script>  
                                $('#daftar_kategori').selectize({
                                    plugins: ['remove_button'],
                                    persist: false,
                                    maxItems: null,
                                    searchField: ['kategori'],
                                    valueField: 'kategori',
                                    options: [
                                        {kategori: 'Pendidikan'},
                                        {kategori: 'IT/Tekologi'},
                                        {kategori: 'Design'},
                                        {kategori: 'Seni'},
                                        
                                    ],
                                    render: {
                                        item: function(item, escape) {
                                            return '<div>' +
                                                (item.kategori ? '<span class="">' + escape(item.kategori) + '</span>' : '') +
                                            '</div>';
                                        },
                                        option: function(item, escape) {
                                            var caption = item.kategori ? item.kategori : null;
                                            return '<div>' +
                                            (caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
                                            '</div>';
                                        }
                                    }

                                });
                            </script>
                        </div>

                        <div class="form-group">
                            <div class="control-group">
                                <label for="daftar_keahlian">Sebutkan Keahlian Anda :</label>
                                <input type="text" id="daftar_keahlian" name="daftar_keahlian" onChange="cek_keahlian()" class="input-keahlian demo-default">
                            </div>
                            <div id="error_keahlian" class="error keahlian"></div>

                            <script>  
                                $('#daftar_keahlian').selectize({
                                    plugins: ['remove_button'],
                                    persist: false,
                                    maxItems: null,
                                    searchField: ['keahlian'],
                                    valueField: 'keahlian',
                                    options: [
                                        {keahlian: 'Matematika'},
                                        {keahlian: 'Fisika'},
                                        {keahlian: 'Kimia'},
                                        {keahlian: 'Biologi'},
                                        {keahlian: 'Bahasa Inggris'},
                                        {keahlian: 'Pemrograman HTML'},
                                        {keahlian: 'Pemrograman CSS'},
                                        {keahlian: 'Pemrograman Javascript'},
                                        {keahlian: 'Pemrograman AJAX'},
                                        {keahlian: 'Pemrograman PHP'},
                                        {keahlian: 'Pemrograman C#'},
                                        {keahlian: 'Pemrograman C'},
                                        {keahlian: 'Pemrograman C++'},
                                        {keahlian: 'Pemrograman Java'},
                                        {keahlian: 'Pemrograman Mobile'},
                                        {keahlian: 'Pemrograman Web'},
                                        {keahlian: 'Pemrograman Desktop'},
                                        {keahlian: 'Adobe Photoshop'},
                                        {keahlian: 'Adobe Ilustrator'},
                                        {keahlian: 'Adobe After Effect'},
                                        {keahlian: 'Datawarehouse'},
                                        {keahlian: 'Seni Tari'},
                                        {keahlian: 'Seni Gamelan'},
                                        {keahlian: 'Seni Lukis'},
                                        {keahlian: 'Desain Grafis'},
                                        {keahlian: 'Desain Interior'},
                                        {keahlian: 'Desain Arsitektur'},
                                    ],
                                    render: {
                                        item: function(item, escape) {
                                            return '<div>' +
                                                (item.keahlian ? '<span class="">' + escape(item.keahlian) + '</span>' : '') +
                                            '</div>';
                                        },
                                        option: function(item, escape) {
                                            var caption = item.keahlian ? item.keahlian : null;
                                            return '<div>' +
                                            (caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
                                            '</div>';
                                        }
                                    }

                                });
                            </script>
                        </div>

                        <div class="form-group">
                            <button onClick="cek_selectize()" type="submit" name="" class="btn btn-info next">Mendaftar</button>
                        </div>  
                    </fieldset>
                </form>                             
            </div>
        </div>
    </section>
     <!-- END OF FORM PENDAFTARAN -->

     <!-- START FOOTER -->
    <footer id="footer">
        <div id="h" class="copyright-text text-center">
            <p>&copy; Bali Worker Team 2015. All Rights Reserved.</p>
            <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
        </div>
    </footer>
    <!--END OF FOOTER -->

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <!-- JAVASCRIPT -->

     <!-- CUSTOM SCRIPT -->
    <script type="text/javascript" src="assets/js/custom-tampilan-mendaftar.js"></script> 
    <!-- END OF SCRIPT CSS -->    
</body>
</html>
