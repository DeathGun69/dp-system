<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template"> -->
  <meta name="author" content="GeeksLabs">
  <!-- <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal"> -->
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
          <div class="col-lg-8">
            <h3 class="page-header"><i class="fa fa-laptop"></i>Серверная 508 Стойка 1</h3>
          </div>
          <form method="POST" action="swit.php">
            <div class="col-lg-4">
              <button class="btn btn-success btn-lg pull-right" type="submit" name="swit" data-toggle="modal" data-target="#myModalAddSw" >Добавить коммутатор</button>
            </div>
          </form>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModalAddSw" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Новый коммутатор:</h4>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                    <label for="place-rack" class="col-form-label">Место на стойке:</label>
                    <select class="form-control">
                      <option value="">- Выбирите коммутатор -</option>
                      <option value="1">Cisco WS-C3560V2-48PS-S</option>
                      <option value="2">Cisco WS-C2960-48PST-S</option>
                      <option value="3">Cisco WS-C3548-XL</option>
                      <option value="4">Cisco WS-C2948</option>
                      <option value="5">Cisco WS-C2950T-24</option>
                      <option value="6">D-link DES-3200-28P</option>
                    </select>
                  </div>
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Закрыть</button>
                <button class="btn btn-primary" type="button">Добавить</button>
              </div>
            </div>
          </div>
        </div>      
        <!--/.modal -->

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="rack"><h3>Cisco WS-C3560V2-48PS-S</h3></div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <section class="panel blue-bg rack-box">
              <div class="rack">Секция 1</div>
            </section>
            <section class="panel">
              <div class="port blue-bg"><a class="blue-bg" data-toggle="modal" href="#myModalPort">1</a></div>
              <div class="port blue-bg">2</div>
              <div class="port blue-bg">3</div>
              <div class="port blue-bg">4</div>
              <div class="port blue-bg">5</div>
              <div class="port blue-bg">6</div>
              <div class="port frame-blue"><a data-toggle="modal" href="#myModalAdd">7</a></div>
              <div class="port frame-blue">8</div>
              <div class="port frame-blue">9</div>
              <div class="port frame-blue">10</div>
              <div class="port frame-blue">11</div>
              <div class="port frame-blue">12</div>
            </section>
          </div>
          <div class="col-lg-3">
            <section class="panel orange-bg rack-box">
              <div class="rack">Секция 2</div>
            </section>
            <section class="panel">
              <div class="port orange-bg">1</div>
              <div class="port orange-bg">2</div>
              <div class="port orange-bg">3</div>
              <div class="port orange-bg">4</div>
              <div class="port orange-bg">5</div>
              <div class="port orange-bg">6</div>
              <div class="port orange-bg">7</div>
              <div class="port orange-bg">8</div>
              <div class="port frame-orange">9</div>
              <div class="port frame-orange">10</div>
              <div class="port frame-orange">11</div>
              <div class="port frame-orange">12</div>
            </section>
          </div>
          <div class="col-lg-3">
            <section class="panel green-bg rack-box">
              <div class="rack">Секция 3</div>
            </section>
            <section class="panel">
              <div class="port green-bg">1</div>
              <div class="port green-bg">2</div>
              <div class="port green-bg">3</div>
              <div class="port green-bg">4</div>
              <div class="port green-bg">5</div>
              <div class="port green-bg">6</div>
              <div class="port green-bg">7</div>
              <div class="port green-bg">8</div>
              <div class="port green-bg">9</div>
              <div class="port green-bg">10</div>
              <div class="port frame-green">11</div>
              <div class="port frame-green">12</div>
            </section>
          </div>
          <div class="col-lg-3">
            <section class="panel pink-bg rack-box">
              <div class="rack">Секция 4</div>
            </section>
            <section class="panel">
              <div class="port pink-bg">1</div>
              <div class="port pink-bg">2</div>
              <div class="port pink-bg">3</div>
              <div class="port pink-bg">4</div>
              <div class="port pink-bg">5</div>
              <div class="port pink-bg">6</div>
              <div class="port pink-bg">7</div>
              <div class="port pink-bg">8</div>
              <div class="port pink-bg">9</div>
              <div class="port pink-bg">10</div>
              <div class="port pink-bg">11</div>
              <div class="port pink-bg">12</div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="rack"><h3>Cisco WS-C2948</h3></div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <section class="panel blue-bg rack-box">
              <div class="rack">Секция 1</div>
            </section>
            <section class="panel">
              <div class="port blue-bg">1</div>
              <div class="port blue-bg">2</div>
              <div class="port blue-bg">3</div>
              <div class="port blue-bg">4</div>
              <div class="port blue-bg">5</div>
              <div class="port blue-bg">6</div>
              <div class="port blue-bg">7</div>
              <div class="port blue-bg">8</div>
              <div class="port blue-bg">9</div>
              <div class="port frame-blue">10</div>
              <div class="port frame-blue">11</div>
              <div class="port frame-blue">12</div>
            </section>
          </div>
          <div class="col-lg-3">
            <section class="panel orange-bg rack-box">
              <div class="rack">Секция 2</div>
            </section>
            <section class="panel">
              <div class="port orange-bg">1</div>
              <div class="port orange-bg">2</div>
              <div class="port orange-bg">3</div>
              <div class="port orange-bg">4</div>
              <div class="port orange-bg">5</div>
              <div class="port orange-bg">6</div>
              <div class="port orange-bg">7</div>
              <div class="port orange-bg">8</div>
              <div class="port orange-bg">9</div>
              <div class="port orange-bg">10</div>
              <div class="port orange-bg">11</div>
              <div class="port frame-orange">12</div>
            </section>
          </div>
          <div class="col-lg-3">
            <section class="panel green-bg rack-box">
              <div class="rack">Секция 3</div>
            </section>
            <section class="panel">
              <div class="port green-bg">1</div>
              <div class="port green-bg">2</div>
              <div class="port green-bg">3</div>
              <div class="port green-bg">4</div>
              <div class="port green-bg">5</div>
              <div class="port green-bg">6</div>
              <div class="port green-bg">7</div>
              <div class="port green-bg">8</div>
              <div class="port green-bg">9</div>
              <div class="port green-bg">10</div>
              <div class="port frame-green">11</div>
              <div class="port frame-green">12</div>
            </section>
          </div>
          <div class="col-lg-3">
            <section class="panel pink-bg rack-box">
              <div class="rack">Секция 4</div>
            </section>
            <section class="panel">
              <div class="port pink-bg">1</div>
              <div class="port pink-bg">2</div>
              <div class="port pink-bg">3</div>
              <div class="port pink-bg">4</div>
              <div class="port pink-bg">5</div>
              <div class="port pink-bg">6</div>
              <div class="port pink-bg">7</div>
              <div class="port pink-bg">8</div>
              <div class="port pink-bg">9</div>
              <div class="port pink-bg">10</div>
              <div class="port pink-bg">11</div>
              <div class="port frame-pink">12</div>
            </section>
          </div>
        </div>

        <div class="row"> 
          <div class="col-lg-12">
            <section class="panel">
              <div class="rack"><h3>Cisco WS-C3508G-XL</h3></div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <section class="panel blue-bg rack-box">
              <div class="rack">Секция 1</div>
            </section>
            <section class="panel">
              <div class="port frame-blue">1</div>
              <div class="port frame-blue">2</div>
              <div class="port frame-blue">3</div>
              <div class="port frame-blue">4</div>
              <div class="port frame-blue">5</div>
              <div class="port frame-blue">6</div>
              <div class="port frame-blue">7</div>
              <div class="port frame-blue">8</div>
              <div class="port frame-blue">9</div>
              <div class="port frame-blue">10</div>
              <div class="port frame-blue">11</div>
              <div class="port frame-blue">12</div>
            </section>
          </div>
          <div class="col-lg-3">
            <section class="panel orange-bg rack-box">
              <div class="rack">Секция 2</div>
            </section>
            <section class="panel">
              <div class="port frame-orange">1</div>
              <div class="port frame-orange">2</div>
              <div class="port frame-orange">3</div>
              <div class="port frame-orange">4</div>
              <div class="port frame-orange">5</div>
              <div class="port frame-orange">6</div>
              <div class="port frame-orange">7</div>
              <div class="port frame-orange">8</div>
              <div class="port frame-orange">9</div>
              <div class="port frame-orange">10</div>
              <div class="port frame-orange">11</div>
              <div class="port frame-orange">12</div>
            </section>
          </div>
          <div class="col-lg-3">
            <section class="panel green-bg rack-box">
              <div class="rack">Секция 3</div>
            </section>
            <section class="panel">
              <div class="port frame-green">1</div>
              <div class="port frame-green">2</div>
              <div class="port frame-green">3</div>
              <div class="port frame-green">4</div>
              <div class="port frame-green">5</div>
              <div class="port frame-green">6</div>
              <div class="port frame-green">7</div>
              <div class="port frame-green">8</div>
              <div class="port frame-green">9</div>
              <div class="port frame-green">10</div>
              <div class="port frame-green">11</div>
              <div class="port frame-green">12</div>
            </section>
          </div>
          <div class="col-lg-3">
            <section class="panel pink-bg rack-box">
              <div class="rack">Секция 4</div>
            </section>
            <section class="panel">
              <div class="port frame-pink">1</div>
              <div class="port frame-pink">2</div>
              <div class="port frame-pink">3</div>
              <div class="port frame-pink">4</div>
              <div class="port frame-pink">5</div>
              <div class="port frame-pink">6</div>
              <div class="port frame-pink">7</div>
              <div class="port frame-pink">8</div>
              <div class="port frame-pink">9</div>
              <div class="port frame-pink">10</div>
              <div class="port frame-pink">11</div>
              <div class="port frame-pink">12</div>
            </section>
          </div>
        </div>

        <div class="row">          

          <!-- Modal -->
          <div class="modal fade" id="myModalPort" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Cisco WS-C3560V2-48PS-S</h4>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="place-rack" class="col-form-label">Место на стойке:</label>
                      <input type="text" readonly class="form-control" id="place-rack" value="1">
                    </div>
                    <div class="form-group">
                      <label for="port-sw" class="col-form-label">Порт коммутатора:</label>
                      <input type="text" readonly class="form-control" id="port-sw" value="25486">
                    </div>
                    <div class="form-group">
                      <label for="audit" class="col-form-label">Аудитория подключения:</label>
                      <input type="text" readonly class="form-control" id="audit" value="А-513">
                    </div>
                    <div class="form-group">
                      <label for="port-audit" class="col-form-label">Порт подключения:</label>
                      <input type="text" readonly class="form-control" id="port-audit" value="K-25">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-default" type="button">Закрыть</button>
                  <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModalUpdate">Изменить</button>
                  <button class="btn btn-danger" type="button">Удалить</button>
                </div>
              </div>
            </div>
          </div>          
          <!--/.modal -->

          <!-- Modal -->
          <div class="modal fade" id="myModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Cisco WS-C3560V2-48PS-S</h4>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="place-rack" class="col-form-label">Корпус подключения:</label>
                      <select class="form-control">
                        <option value="">- Выбирите корпус -</option>
                        <option value="1">А</option>
                        <option value="2">Б</option>
                        <option value="3">В</option>
                        <option value="4">Г</option>
                        <option value="5">Д</option>
                        <option value="6">Е</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="audit" class="col-form-label">Аудитория подключения:</label>
                      <select class="form-control">
                        <option value="">- Выбирите аудиторию -</option>
                        <option value="1">Д313</option>
                        <option value="2">Д414</option>
                        <option value="3">Д416</option>
                        <option value="4">Д503</option>
                        <option value="5">Д505</option>
                        <option value="6">Д507</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="port-audit" class="col-form-label">Порт подключения:</label>
                      <input type="text" class="form-control" id="port-audit" value="K-25">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-default" type="button">Закрыть</button>
                  <button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModalOk">Сохранить</button>
                </div>
              </div>
            </div>
          </div>          
          <!--/.modal -->

          <!-- Modal -->
          <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Cisco WS-C3560V2-48PS-S</h4>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="place-rack" class="col-form-label">Порт коммутатора:</label>
                      <input type="text" class="form-control" id="place-rack" value="">
                    </div>
                    <div class="form-group">
                      <label for="place-rack" class="col-form-label">Корпус подключения:</label>
                      <select class="form-control">
                        <option value="">- Выбирите корпус -</option>
                        <option value="1">А</option>
                        <option value="2">Б</option>
                        <option value="3">В</option>
                        <option value="4">Г</option>
                        <option value="5">Д</option>
                        <option value="6">Е</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="audit" class="col-form-label">Аудитория подключения:</label>
                      <select class="form-control">
                        <option value="">- Выбирите аудиторию -</option>
                        <option value="1">Д313</option>
                        <option value="2">Д414</option>
                        <option value="3">Д416</option>
                        <option value="4">Д503</option>
                        <option value="5">Д505</option>
                        <option value="6">Д507</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="port-audit" class="col-form-label">Порт подключения:</label>
                      <input type="text" class="form-control" id="port-audit" value="">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-default" type="button">Закрыть</button>
                  <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModalOk">Сохранить</button>
                </div>
              </div>
            </div>
          </div>
          <!--/.modal -->

          <!-- Modal -->
          <div class="modal fade" id="myModalOk" tabindex="-1" role="dialog" aria-labelledby="myModalOkLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  Сохранение прошло успешно!
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
              </div>
            </div>
          </div>
          <!--/.modal -->          

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

  <!-- <script>
      let link=window.location.href;
      let name=link.split("?");
      let audit=name[1];

      $(".page-header").append(audit);
  </script>   -->
  
</body>

</html>
