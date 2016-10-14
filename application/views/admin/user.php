<?php 

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PT Lampung Jaya Abadi | User</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url()?>/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()?>/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url()?>/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url()?>/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url()?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url()?>/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url()?>/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url()?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/css/popup.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url()?>js/jquery.min.js" type="text/javascript"></script>



    <script src="<?php echo base_url()?>js/highcharts.js" type="text/javascript"></script>

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>PT</b>Lampung Jaya Abadi</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url()?>/img/admin.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $username; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url()?>/img/admin.png" class="img-circle" alt="User Image">
                    <p>
                     <?php echo $username; ?>
                    </p>
                  </li>
                  <!-- Menu Body -->
        
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="<?php echo site_url('admin/index/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url()?>/img/admin.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $username; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li class="active treeview">
              <a href="<?php echo base_url()?>index.php/admin/index">
                <i class="fa fa-dashboard"></i> <span>Home</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url()?>index.php/admin/pemasukan">
                <i class="fa fa-pie-chart"></i>
                <span>Laporan Pemasukan</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url()?>index.php/admin/pengeluaran">
                <i class="fa fa-pie-chart"></i>
                <span>Laporan Pengeluaran</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url()?>index.php/admin/user">
                <i class="fa fa-edit"></i>
                <span>Manajemen User</span>
              </a>
            </li>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Data User</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User</li>
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
                <?php
                      $tgl = date("Y-m-1");
                      $tglx = date("Y-m-31");
                      $query="SELECT SUM(jumlah) AS totalmasukbulan FROM pemasukan where tanggal > '$tgl' and tanggal < '$tglx'";
                      $jalan = mysql_query($query);
                      $datamasuk = mysql_fetch_array($jalan);
                      $pemasukanbulan = $datamasuk['totalmasukbulan'];?>
                  <h5>Rp. <?php echo $pemasukanbulan; ?></h5>
                  <p>Pemasukan Bulan ini</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                <?php
                      $tgl = date("Y-m-1");
                      $tglx = date("Y-m-31");
                      $query="SELECT SUM(jumlah) AS totalkeluarbulan FROM pengeluaran where tanggal >= '$tgl' and tanggal <='$tglx'";
                      $jalan = mysql_query($query);
                      $datakeluar = mysql_fetch_array($jalan);
                      $pengeluaranbulan = $datakeluar['totalkeluarbulan'];?>
                  <h5>Rp. <?php echo $pengeluaranbulan; ?></h5>
                  <p>Pengeluaran Bulan ini</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                <?php
                      $query="SELECT count(username) as jumlahuser FROM user";
                      $jalan = mysql_query($query);
                      $userx = mysql_fetch_array($jalan);
                      $jumlahuser = $userx['jumlahuser'];?>
                  <h5><?php echo $jumlahuser; ?></h5>
                  <p>User</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
               </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                <?php
                      $query="SELECT SUM(jumlah) AS totalmasuk FROM pemasukan";
                      $jalan = mysql_query($query);
                      $datamasuk = mysql_fetch_array($jalan);
                      $pemasukanx = $datamasuk['totalmasuk'];?>
                      <?php
                      $query="SELECT SUM(jumlah) AS totalkeluar FROM pengeluaran";
                      $jalan = mysql_query($query);
                      $datamasuk = mysql_fetch_array($jalan);
                      $pengeluaranx = $datamasuk['totalkeluar'];
                      $totalmasukkeluar = $pemasukanx + $pengeluaranx;
                      ?>
                      
                  <h5>Rp. <?php echo $totalmasukkeluar; ?></h5>
                  <p>Total Dana Masuk & Keluar</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-8 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                
                <div class="tab-content no-padding">
                  <!-- Morris chart - Sales -->
                                   <div class="box-body">
                 <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Options</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                   
   
            <?php
                foreach($user as $t_User){
                    
        ?>
              
       

                                
                                    <tbody>
                                        <tr class="gradeA">
                                            <td><?php echo $t_User->id; ?></td>
                                            <td><?php echo $t_User->username; ?></td>
                                            <td>******</td>
                                            <td><a href="?user=<?php echo $t_User->username; ?>#popup"><button class="btn btn-primary btn-flat">Lihat</button></a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <a href="<?php echo base_url()?>index.php/admin/tambah_user"><button class="btn btn-primary btn-flat">Tambah User</button></a>
                </div>
              </div><!-- /.nav-tabs-custom -->
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-4 connectedSortable">

              <!-- Map box -->
              <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                  <!-- tools box -->
                </div>
                <div class="box-body">
                      <div id="calendar" style="width: 100%"></div> <!-- Calender -->
                </div><!-- /.box-body-->
                
              </div>
              <!-- /.box -->
            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      <?php
                foreach($lihatuser as $t_lihatUser){
                    
        ?>       <!-- POPUP DIMULAI DISINI -->
    <div id="popup">
    <div class="popup-container">
    <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-yellow">
                  <div class="widget-user-image">
                    <img class="img-circle" src="<?php echo base_url()?>/img/admin.png" alt="User Avatar">
                  </div><!-- /.widget-user-image -->
                  <h3 class="widget-user-username"><?php echo $t_lihatUser->namaasli; ?></h3>
                  <h5 class="widget-user-desc">Administrator</h5>
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li><a href="#">Alamat : <span class="pull-right badge bg-blue"><?php echo $t_lihatUser->alamat; ?></span></a></li>
                    <li><a href="#">Kota : <span class="pull-right badge bg-aqua"><?php echo $t_lihatUser->kota; ?></span></a></li>
                    <li><a href="#">Provinsi : <span class="pull-right badge bg-green"><?php echo $t_lihatUser->provinsi; ?></span></a></li>
                    <li><a href="#">Nomor Hp : <span class="pull-right badge bg-red"><?php echo $t_lihatUser->hp; ?></span></a></li>
                    <li><a href="<?php echo base_url()?>index.php/admin/edit_user?user=<?php echo $t_lihatUser->username; ?>"><button class="btn btn-warning btn-flat">Edit</button></a></li>
                    <li><a href="<?php echo base_url()?>index.php/admin/user/delete?id=<?php echo $t_lihatUser->id; ?>"><button class="btn btn-danger btn-flat">Hapus</button></a></li>
                  </ul>
                </div>
              </div><!-- /.widget-user -->
        <a class="popup-close" href="#closed">X</a>
   <?php } ?>
    </div>
</div>
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>Copyright &copy; 2016 <a href="http://ptlampungjayaabadi.com">PT Lampung Jaya Abadi</a>.</strong>
      </footer>

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url()?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url()?>/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url()?>/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url()?>/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url()?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url()?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url()?>/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url()?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url()?>/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url()?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url()?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()?>/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()?>/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url()?>/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()?>/js/demo.js"></script>
  
  </body>
</html>
