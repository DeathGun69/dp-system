<?php
  include "includes\db.php";

  //название таблицы в базе
  $table_log="log_pak";

  // количество записей на странице
  $number_records = "4";

  // Ограничиваем количество ссылок
  $limit=3;

  // считаем записи
  $count=mysqli_fetch_array($connection -> query("SELECT count(id) FROM `$table_log`"));

  // считаем страницы
  $total=ceil($count[0]/$number_records);

  // страницы
  if(empty($_GET["p"])){$_GET["p"]="1";}
  $p=$_GET["p"];

  $p=mysqli_real_escape_string($connection, $p);
  if(!ctype_digit($p) or $p>$total):
    $p="1";
  endif;

  // формируем запрос
  $first=$p*$number_records-$number_records;
  $result=$connection -> query("SELECT * FROM `$table_log` LIMIT $first, $number_records");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
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
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i>Лог</h3>
          </div>
        </div>      

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Пользователя</th>
                      <th>Команды</th>
                      <th>id Koммутатора</th>
                      <th>Старая информация</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  
                      while($data=mysqli_fetch_array($result)) // цикл вывода
                      {
                        print "<tr>";
                        print "<td>$data[1]</td>";
                        print "<td>$data[2]</td>";
                        print "<td>$data[3]</td>";
                        print "<td>$data[4]</td>";
                        print "</tr>";
                      }
                    ?>                  
                  </tbody>
                </table>
              </div>
            </section>
            
            <?php
              if($total>1):
                #две назад
                print "<br><div class='panel-body'>";
                if(($p-2)>0):
                  $ptwoleft="<a class='first_page_link' href='log.php?p=".($p-2)."'>".($p-2)."</a>  ";
                else:
                  $ptwoleft=null;
                endif;
                    
                #одна назад
                if(($p-1)>0):
                  $poneleft="<a class='first_page_link' href='log.php?p=".($p-1)."'>".($p-1)."</a>  ";
                  $ptemp=($p-1);
                else:
                  $poneleft=null;
                  $ptemp=null;
                endif;
                    
                #две вперед
                if(($p+2)<=$total):
                  $ptworight=" <a class='first_page_link' href='log.php?p=".($p+2)."'>".($p+2)."</a>";
                else:
                  $ptworight=null;
                endif;
                    
                #одна вперед
                if(($p+1)<=$total):
                  $poneright=" <a class='first_page_link' href='log.php?p=".($p+1)."'>".($p+1)."</a>";
                  $ptemp2=($p+1);
                else:
                  $poneright=null;
                  $ptemp2=null;
                endif;		
                    
                # в начало
                if($p!=1 && $ptemp!=1 && $ptemp!=2):
                  $prevp="<a href='log.php' class='first_page_link' title='В начало'><<</a> ";
                else:
                  $prevp=null;
                endif;   
                    
                #в конец (последняя)
                if($p!=$total && $ptemp2!=($total-1) && $ptemp2!=$total):
                  $nextp=" ...  <a href='log.php?p=".$total."'".$total."' class='first_page_link'>$total</a>";
                else:
                  $nextp=null;
                endif;
                  
                print "<br>".$prevp.$ptwoleft.$poneleft.'<span class="num_page_not_link"><b>'.$p.'</b></span>'.$poneright.$ptworight.$nextp; 
                print "</div>";                
                
              endif;
              $connection->close();
            ?>

            <!--pagination start-->
            <section class="panel">
              <div class="panel-body"> 
                <div class="text-center">
                  <ul class="pagination">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
                </div>
              </div>
            </section>
            <!--pagination end-->
          </div>
        </div>

        </div>
        </div>
        <!--/.row-->
      
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
