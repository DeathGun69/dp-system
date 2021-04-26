<?php

    include "includes/db.php";
             
    // Подключение к БД
    $connection = mysqli_connect($host,$user,$password,$db);

    if(mysqli_connect_error())
    {
        print mysqli_connect_error();
        exit();
    }

    //название таблицы в базе
    $table_audit="auditories";

    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
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
    <!-- <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" /> -->
    <!-- <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" /> -->
    <!-- easy pie chart-->
    <!-- <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" /> -->
    <!-- owl carousel -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.css" type="text/css"> -->
    <!-- <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet"> -->
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/fullcalendar.css"> -->
    <!-- <link href="css/widgets.css" rel="stylesheet"> -->
    <!-- <link href="css/style-responsive.css" rel="stylesheet" /> -->
    <!-- <link href="css/xcharts.min.css" rel=" stylesheet"> -->
    <!-- <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet"> -->
  
</head>

<body>
    <!-- container section start -->
    <section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="" class="logo"><span class="lite">ИрГУПС</span></a>
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
                        <a href="index.php"><i class="icon_key_alt"></i> Выход</a>
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
            <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Главная</h3>
            </div>
            </div>

            <!-- Вывод блоков с именами серверных -->
            
            <?php

                $result = mysqli_query($connection, "SELECT name FROM $table_audit WHERE id_type='9'");

                while ($row = mysqli_fetch_row($result)) {
                    print '<div class="row">';
                    print '<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">';
                    print '<div class="info-box blue-bg">';
                    print '<div class="count">'.($row).'</div>';
                    print '</div>';
                    print '</div>';
                    print '</div>';
                }
                

            ?>
            
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box blue-bg">
                        <div class="count" >А-508</div>
                    </div>
                </div>                            
            </div>

            

        <!--main content end-->
    </section>
    <!-- container section start -->

    <!-- javascripts -->
    <!-- <script src="js/jquery.js"></script> -->
    <!-- <script src="js/jquery-ui-1.10.4.min.js"></script> -->
    <script src="js/jquery-1.8.3.min.js"></script>
    <!-- <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script> -->
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <!-- <script src="js/jquery.scrollTo.min.js"></script> -->
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <!-- <script src="assets/jquery-knob/js/jquery.knob.js"></script> -->
    <!-- <script src="js/jquery.sparkline.js" type="text/javascript"></script> -->
    <!-- <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script> -->
    <!-- <script src="js/owl.carousel.js"></script> -->
    <!-- jQuery full calendar -->
    <!-- <script src="js/fullcalendar.min.js"></script> -->
    <!-- Full Google Calendar - Calendar -->
    <!-- <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script> -->
    <!--script for this page only-->
    <!-- <script src="js/calendar-custom.js"></script> -->
    <!-- <script src="js/jquery.rateit.min.js"></script> -->
    <!-- custom select -->
    <!-- <script src="js/jquery.customSelect.min.js"></script> -->
    <!-- <script src="assets/chart-master/Chart.js"></script> -->

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <!-- <script src="js/sparkline-chart.js"></script> 
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script> -->
</body>

</html>
