<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>Reservaroom | Index</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>


</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>ReservaRoom</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
             <li  class="active"><a href="#showcase" class="smoothScroll">{{ trans('adminlte_lang::message.showcase') }}</a></li>
               <li><a href="#desc" class="smoothScroll">{{ trans('adminlte_lang::message.description') }}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                    <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                @else
                    <li><a href="/home">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<section id="showcase" name="showcase" style="padding-top: 0px"></section>
<div id="showcase" style="padding-top: 0px">
    <div class="container">
        <div class="row">
            <h1 class="centered"><b>Available Rooms</b></h1>
            <br>
            <div class="col-lg-8 col-lg-offset-2">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('/img/classroom.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/lab-mis.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/studio.png') }}" alt="">
                        </div>
                         <div class="item">
                            <img src="{{ asset('/img/lab-ajk.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/aula.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div><!-- /container -->
</div>


<section id="desc" name="desc"></section>
<!-- FEATURES WRAP -->
<div id="intro">
    <div class="container">
      <div class="row centered">
          <h1><b>RESERVAROOM</b></h1>
      </div>
      <div class="content-wrapper">
       
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-body no-padding" style="margin: 15px">
          
                  <h4>Reservaroom adalah situs peminjaman ruangan untuk jurusan Teknik Informatika ITS. Siapapun bisa melakukan peminjaman dengan sangat mudah.</h4>
                  <h4>Lakukan peminjaman dengan cara: </h4>
                  <ul>
                    <li>Lihat tabel reservasi</li>
                    <li>Tentukan hari yang diinginkan untuk melakukan reservasi</li>
                    <li>Pilih ruangan</li>
                    <li>Upload proposal</li>
                    <li>Dapatkan izinnya</li>
                  </ul>
                  <h4>Gampang kan?</h4>
                  <br>
                  <h4>Apa yang akan Anda dapatkan disini:</h4>
                  <!-- Info boxes -->
                  <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <div class="info-box-content">
                          <center><img src="{{ asset('/img/instruction.png') }}" alt=""></center>
                          <center><span class="info-box-text"><h4><b>PROSESNYA MUDAH</b></h4></span></center>
                          <center><span class="info-box-text"><b>PRAKTIS DAN AMAN</b></span></center>
                          
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <div class="info-box-content">
                          <center><img src="{{ asset('/img/calendar.png') }}" alt=""></center>
                          <center><span class="info-box-text"><h4><b>PILIH HARI SESUKAMU</b></h4></span></center>
                          <center><span class="info-box-text"><b>TERSEDIA TIAP HARI</b></span></center>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <div class="info-box-content">
                         <center><img src="{{ asset('/img/team.png') }}" alt=""></center>
                          <center><span class="info-box-text"><h4><b>KAPASITAS BESAR</b></h4></span></center>
                          <center><span class="info-box-text"><b>40 - 200 ORANG</b></span></center>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                       <div class="info-box-content">
                         <center><img src="{{ asset('/img/globe.png') }}" alt=""></center>
                          <center><span class="info-box-text"><h4><b>AKSES DIMANA SAJA</b></h4></span></center>
                          <center><span class="info-box-text"><b>TIDAK PERLU KE TU</b></span></center>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                  <h4>Peraturan:</h4>
                  <ul>
                    <li>Menjaga kondisi inventaris ruangan</li>
                    <li>Menjaga kebersihan ruangan yang dipinjam</li>
                    <li>Meminta izin jika ingin menggunakan projector dan speaker jika tersedia</li>
                    <li>Tidak boleh ada inventaris yang rusak atau hilang setelah peminjaman selesai</li>
                    <li>Kondisi ruangan ketika dikembalikan harus sama seperti semula</li>
                    <li>Mengganti jika terjadi kerusakan</li>
                  </ul>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /. box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->

      </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->
    </div><!--/ .container -->
</div><!--/ #features -->




<div id="c">
    <div class="container">
        <p>
            <strong>Copyright &copy; 2016 <a href="#">APSI</a>.</strong> {{ trans('adminlte_lang::message.createdby') }} <a href="#">Tosca & Hendri</a>.
            <br/>
        </p>

    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>


</body>
</html>