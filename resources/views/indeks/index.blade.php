<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader_title', 'Make your booking!')
@include('layouts.includes.htmlheader')
@show

<body class="skin-black">
  
    <div class="wrapper">

      @include('layouts.partials.mainheader')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @section('contentheader_title', 'TEKNIK INFORMATIKA ITS')
        @include('layouts.partials.contentheader')
        
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-body no-padding" style="margin: 15px">
                  <h1>RESERVAROOM</h1>
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
                      <span class="info-box-icon bg-aqua"><i class="fa fa-check-square-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text"><h4><b>PROSESNYA MUDAH</b></h4></span>
                          <span class="info-box-text"><b>PRAKTIS DAN AMAN</b></span>
                          
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-calendar"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text"><h4><b>PILIH HARI SESUKAMU</b></h4></span>
                          <span class="info-box-text"><b>TERSEDIA TIAP HARI</b></span>
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
                        <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text"><h4><b>KAPASITAS BESAR</b></h4></span>
                          <span class="info-box-text"><b>40 - 200 ORANG</b></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-globe"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text"><h4><b>AKSES DIMANA SAJA</b></h4></span>
                          <span class="info-box-text"><b>TIDAK PERLU KE TU</b></span>
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


      @include('layouts.includes.footer')

    </div><!-- ./wrapper -->

    @section('scripts')
    @include('layouts.includes.scripts')

    @show

  </body>
  </html>



  <!-- Main content -->

