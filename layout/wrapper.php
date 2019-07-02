<?php
require_once "_config/config.php"; 
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
    
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
     <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3> 
                <?php 
                  $sql = "SELECT * FROM t_pegawai095";
                  $data = mysqli_query($con, $sql);
                 $hasil   = mysqli_num_rows($data);
                 echo "$hasil";
                 ?>
                   </h3>

              <p>Data Pegawai</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="pegawai/data.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php 
                  $sql = "SELECT * FROM t_pendidikan095";
                  $data = mysqli_query($con, $sql);
                 $hasil   = mysqli_num_rows($data);
                 echo "$hasil";
                 ?></h3>

              <p>Riwayat Pendidikan</p>
            </div>
            <div class="icon">
              <i class="fa fa-mortar-board"></i>
            </div>
            <a href="pendidikan/data.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php 
                  $sql = "SELECT * FROM t_jabatan095";
                  $data = mysqli_query($con, $sql);
                 $hasil   = mysqli_num_rows($data);
                 echo "$hasil";
                 ?></h3>

              <p>Data Jabatan</p>
            </div>
            <div class="icon">
              <i class="fa fa-university"></i>
            </div>
            <a href="data jabatan/data.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php 
                  $sql = "SELECT * FROM t_pangkat095";
                  $data = mysqli_query($con, $sql);
                 $hasil   = mysqli_num_rows($data);
                 echo "$hasil";
                 ?></h3>

              <p>Data Kepangkatan</p>
            </div>
            <div class="icon">
              <i class="fa fa-line-chart"></i>
            </div>
            <a href="data pangkat/data.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
 

     <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php 
                  $sql = "SELECT * FROM t_hukum095";
                  $data = mysqli_query($con, $sql);
                 $hasil   = mysqli_num_rows($data);
                 echo "$hasil";
                 ?></h3>

              <p>Data Hukuman</p>
            </div>
            <div class="icon">
              <i class="fa fa-balance-scale"></i>
            </div>
            <a href="data hukuman/data.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

      <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?php 
                  $sql = "SELECT * FROM t_diklat095";
                  $data = mysqli_query($con, $sql);
                 $hasil   = mysqli_num_rows($data);
                 echo "$hasil";
                 ?></h3>

              <p>Data Diklat</p>
            </div>
            <div class="icon">
              <i class="fa fa-bookmark"></i>
            </div>

            
            <a href="data diklat/data.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <!-- /.row -->

      <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php 
                  $sql = "SELECT * FROM t_penghargaan095";
                  $data = mysqli_query($con, $sql);
                 $hasil   = mysqli_num_rows($data);
                 echo "$hasil";
                 ?></h3>

              <p>Data Penghargaan</p>
            </div>
            <div class="icon">
              <i class="fa fa-trophy"></i>
            </div>

            
            <a href="data penghargaan/data.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php 
                  $sql = "SELECT * FROM t_pegawai095";
                  $data = mysqli_query($con, $sql);
                 $hasil   = mysqli_num_rows($data);
                 echo "$hasil";
                 ?></h3>

              <p>Jumlah Data Report Pegawai</p>
            </div>
            <div class="icon">
              <i class="fa fa-print"></i>
            </div>

            
            <a href="data report pegawai/data.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      <!-- /.row -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php 
                  $sql = "SELECT * FROM t_jabatan095";
                  $data = mysqli_query($con, $sql);
                 $hasil   = mysqli_num_rows($data);
                 echo "$hasil";
                 ?></h3>

              <p>Jumlah Data Report Jabatan</p>
            </div>
            <div class="icon">
              <i class="fa fa-print"></i>
            </div>

            
            <a href="data report jabatan/data.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


    </section>
    <!-- /.content -->
  </div>