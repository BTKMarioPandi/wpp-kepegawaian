<?php require_once "_config/config.php";?>
<body class="hold-transition skin-yellow sidebar-mini">
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/deni.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Ipedeni Christian Harita</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <li><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span><span class="badge bg-blue pull-right">Home</span></a></li>

         <li><a href="<?php echo base_url('pegawai/data.php')?>"><i class="fa fa-user"></i> <span>Data Pegawai</span></a></li>

         <li><a href="<?php echo base_url('pendidikan/data.php')?>"><i class="fa fa-mortar-board"></i> <span>Riwayat Pendidikan</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>