<?php 
require_once "../_config/config.php";
require_once "header.php";
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/mario.jpg" class="" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Imam Hazwa </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <li><a href="<?php echo base_url()?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span><span class="badge bg-blue pull-right">Home</span></a></li>

         <li><a href="<?php echo base_url('pegawai/data.php')?>"><i class="fa fa-user"></i> <span>Data Pegawai</span></a></li>

         <li><a href="<?php echo base_url('pendidikan/data.php')?>"><i class="fa fa-mortar-board"></i> <span>Riwayat Pendidikan</span></a></li>

         <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Kepegawaian</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../data jabatan/data.php"><i class="fa fa-circle-o text-green"></i> Jabatan</a></li>
                <li><a href="../data pangkat/data.php"><i class="fa fa-circle-o text-yellow"></i> Pangkat</a></li>
                <li><a href="../data hukuman/data.php"><i class="fa fa-circle-o text-blue"></i> Hukuman</a></li>
                <li><a href="../data diklat/data.php"><i class="fa fa-circle-o text-purple"></i> Diklat</a></li>
                <li><a href="../data penghargaan/data.php"><i class="fa fa-circle-o text-red"></i> Penghargaan</a></li>

              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-btc"></i>
                <span>Report</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../data report pegawai/data.php"><i class="fa fa-circle-o text-red"></i>Report Data Pegawai</a></li>
                <li><a href="../data report hukuman/data.php"><i class="fa fa-circle-o text-yellow"></i> Report Data Jabatan</a></li>

              </ul>
            </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>