<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="resources/assets/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="resources/assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="resources/assets/css/skins/_all-skins.min.css">
  
  <!-- Custom style -->
  <link rel="stylesheet" href="resources/assets/css/header.css">
  <link rel="stylesheet" href="resources/assets/css/style.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">es<b>H</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">es<b>Hustle</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="resources/assets/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="resources/assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{ URL::to('home') }}">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li>
          <a href="{{ URL::to('mobile') }}">
            <i class="fa fa-mobile"></i> <span>Mobile App</span>
          </a>
        </li>
        <li>
          <a href="{{ URL::to('option') }}">
            <i class="fa fa-edit"></i> <span>OptionAA</span>
          </a>
        </li>
        <li>
          <a href="{{ URL::to('support') }}">
            <i class="fa fa-life-ring"></i> <span>Support</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Mobile App</h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-xs-12">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th rowspan="2">User Name</th>
                    <th rowspan="2">Device</th>
                    <th rowspan="2">Password(s)</th>
                    <th rowspan="2">Offline</th>
                    <th rowspan="2">ScouterMode</th>
                    <th colspan="2">Primary Market</th>
                    <th colspan="2">Secondary Market</th>
                    <th rowspan="2"></th>
                  </tr>
                  <tr>
                    <th>Advisor</th>
                    <th>Market</th>
                    <th>Advisor</th>
                    <th>Market</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>name1</td>
                    <td>Internet</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Win 95+</td>
                    <td>X</td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td class="td-button-group">
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-gear" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>No</button>
                    </td>
                    <td>C</td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td class="td-button-group">
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-gear" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 6.0
                    </td>
                    <td>Yes</td>
                    <td>C</td>
                    <td>Win 95+</td>
                    <td>6</td>
                    <td>C</td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td class="td-button-group">
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-gear" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th rowspan="2">User Name</th>
                  <th rowspan="2">Device</th>
                  <th rowspan="2">Password(s)</th>
                  <th rowspan="2">Offline</th>
                  <th rowspan="2">ScouterMode</th>
                  <th colspan="2">Primary Market</th>
                  <th colspan="2">Secondary Market</th>
                  <th rowspan="2"></th>
                </tr>
                <tr>
                  <th>Advisor</th>
                  <th>Market</th>
                  <th>Advisor</th>
                  <th>Market</th>
                </tr>
                </tfoot>
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; 2017 <a href="http://www.eshustle.com">esHustle</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.4 -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<!-- jQuery UI 1.12.0 -->
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="resources/assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="resources/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="resources/assets/js/app.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
