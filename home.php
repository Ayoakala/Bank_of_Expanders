<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');


$url = 'http://23.94.68.76/api.php/accountinfo/588d4d601756fc834d903dc6';

ini_set("allow_url_fopen", 1);

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url );
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result, true);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home | Bank of Expanders</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="Assets/AdminLTE/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Assets/AdminLTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="Assets/AdminLTE/dist/css/skins/_all-skins.min.css">
  <style type = "text/css">
  .img-circle {
    border-radius: 50%;
}
  </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Bo<b>E</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Bank of <b>Expanders</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-danger">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 2 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img class = "img-circle" src="Logo.png" alt="User Image">
                      </div>
                      <h4>
                        Security
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Log in location: College Park, MD</p>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="Logo.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Welcome!
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Welcome to Bank of Expanders!</p>
                    </a>
                  </li>
                </ul>
              </li>
             
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img class="img-circle" width = 25px src="profile_pic.jpg">
              <span class="hidden-xs">John Smith</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img CLASS="img-circle" src="profile_pic.jpg" alt="User Image">
                <p>
                  John Smith
                </p>
              </li>
              <!-- Menu Body -->
             <!--  <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div> -->
                <!-- /.row -->
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
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="treeview active">
          <a href="http://23.94.68.76/home.php">
            <i  class="fa fa-bank"></i> <span >Home</span>
          </a>
        </li><li class="treeview">
          <a href="http://23.94.68.76/activity.html#">
            <i class="fa fa-align-left"></i>
            <span >Activity Detail</span>
          </a>
        </li>
        <li class="treeview">
          <a href="http://23.94.68.76/branch.html">
            <i  class="fa fa-globe"></i> <span >Branch</span>
          </a>
        </li>
        <li class="treeview">
          <a href="http://23.94.68.76/atm.html#">
            <i class="fa fa-money"></i>
            <span >ATM</span>
          </a>
        </li>
        <li  class="treeview ">
          <a  href="http://23.94.68.76/deposit.html#">
            <i class="fa fa-dollar active"></i>
            <span  >Deposit</span>
          </a>
        </li>
        <li class="treeview">
          <a href="http://23.94.68.76/withdraw.html#">
            <i class="fa fa-credit-card"></i>
            <span>Withdraw</span>
          </a>
        </li>
        <li class="treeview">
          <a href="http://23.94.68.76/stock.html#">
            <i class="fa fa-bar-chart"></i> <span >Stocks</span>
          </a>
        </li>
        <li class="treeview">
          <a href="http://23.94.68.76/cscore.html#">
            <i class="fa fa-file-text-o"></i>
            <span >FICO Score</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content-header">
      <h1>
        Home
       
      </h1>

    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-3">
          <!-- general form elements -->

          <!-- /.box -->

          <!-- Input addon -->

          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

           <div class="box box-info">

            <!-- /.box-header -->
            <!-- form start -->
             
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label" align='center'>Account Number</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="amount" placeholder="<?php echo $obj['_id']; ?>" disabled>
                    </div>
                  </div>
                 <br> <br>  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label" align='center'>Customer ID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="amount" placeholder="<?php echo $obj['customer_id']?>" disabled>
                    </div>
                  </div>


 <br> <br>

<div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label" align='center'>Type</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="amount" placeholder="Checking Account" disabled>
                    </div>
                  </div>
 <br> <br>
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label" align='center'>Balance</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="amount" placeholder="<?php echo '$ ' . $obj['balance'] .'.00'?>" disabled>
                    </div>
                  </div>


 <br> <br>

 <hr>

<a href="http://www.accuweather.com/en/us/college-park-md/20740/weather-forecast/333562" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1485683046419" class="aw-widget-current"  data-locationkey="333562" data-unit="f" data-language="en-us" data-useip="true" data-uid="awcc1485683046419"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
 <hr>

 <h2 align = "center">Note</h2>
<p align = "center">There will be a slight delay on balance. Please wait at least one minute after operation to check for balance update.
</p>



                </div>
          
              <!-- /.box-footer -->
          </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer> -->

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="Assets/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="Assets/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="Assets/AdminLTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="Assets/AdminLTE/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Assets/AdminLTE/dist/js/demo.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/588d6b03c9a1bb25a1018931/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
