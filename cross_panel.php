<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>ИрГУПС</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  
  <!-- easy pie chart-->
  
  <!-- owl carousel -->
  
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="glav.php" class="logo"><span class="lite">ИрГУПС</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/users.png">
                            </span>
                            <span class="username">АДМИН</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> Профиль</a>
              </li>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> Выход</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="glav.php">
              <i class="icon_house_alt"></i>
              <span>Главная</span>
            </a>
          </li>
          <li>
            <a class="" href="log.php">
              <i class="icon_genius"></i>
              <span>Лог</span>
            </a>
          </li> 

          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_documents_alt"></i>
              <span>Документы</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="profile.html">Profile</a></li>
              <li><a class="" href="login.html"><span>Login Page</span></a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i>Серверная </h3>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" onclick="document.location='/rack.php'">
            <div class="info-box blue-bg">
              <div class="count" >Стойка 1</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <div class="count">Стойка 2</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <div class="count">Стойка 3</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <div class="count">Стойка 4</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box pink-bg">
              <div class="count" >Стойка 5</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box orange-bg">
              <div class="count">Стойка 6</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
        </div>
        <!--/.row-->
              
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery-1.8.3.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->  
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  
  <!-- jQuery full calendar -->
  
  <!-- Full Google Calendar - Calendar -->
  
  <!--script for this page only-->

  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

  <!-- custom script for this page-->

  <script>
      let link=window.location.href;
      let name=link.split("?");
      let audit=name[1];

      $(".page-header").append(audit);
  </script>  
  
</body>

</html>
