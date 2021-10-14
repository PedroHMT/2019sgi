<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>Painel Administrador<span>Segurança da Informação</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.php#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.php#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.php#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.php#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.php"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $_SESSION['usuario']?></h5>
          <li class="mt">
            <a href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-edit"></i>
              <span>Gerenciamento de Notícias</span>
              </a>
            <ul class="sub">
              <li><a href="cadastrar.php">Cadastrar Notícia</a></li>
              <li><a href="editar.php">Editar Notícia</a></li>
              <li><a href="busca.php">Pesquisar Notícias</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Editar Template</span>
              </a>
            <ul class="sub">
              <li><a href="editar_sobre.php">Página: Sobre o Curso</a></li>
              <li><a href="editar_perfil.php">Página: Perfil</a></li>
              <li><a href="editar_universidades.php">Página: Universidades</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>UI Elements</span>
              </a>
            <ul class="sub">
              <li><a href="general.php">General</a></li>
              <li><a href="buttons.php">Buttons</a></li>
              <li><a href="panels.php">Panels</a></li>
              <li class="active"><a href="flot_chart.php">Font Awesome</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="grids.php">Grids</a></li>
              <li><a href="calendar.php">Calendar</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="todo_list.php">Todo List</a></li>
              <li><a href="dropzone.php">Dropzone File Upload</a></li>
              <li><a href="inline_editor.php">Inline Editor</a></li>
              <li><a href="file_upload.php">Multiple File Upload</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              <li><a href="blank.html">Blank Page</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="lock_screen.php">Lock Screen</a></li>
              <li><a href="profile.php">Profile</a></li>
              <li><a href="invoice.php">Invoice</a></li>
              <li><a href="pricing_table.php">Pricing Table</a></li>
              <li><a href="faq.php">FAQ</a></li>
              <li><a href="404.html">404 Error</a></li>
              <li><a href="500.html">500 Error</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li><a href="form_component.php">Form Components</a></li>
              <li><a href="advanced_form_components.php">Advanced Components</a></li>
              <li><a href="form_validation.php">Form Validation</a></li>
              <li><a href="contactform.php">Contact Form</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Data Tables</span>
              </a>
            <ul class="sub">
              <li><a href="basic_table.php">Basic Table</a></li>
              <li><a href="responsive_table.php">Responsive Table</a></li>
              <li><a href="advanced_table.php">Advanced Table</a></li>
            </ul>
          </li>
          <li>
            <a href="inbox.php">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li><a href="morris.php">Morris</a></li>
              <li><a href="chartjs.php">Chartjs</a></li>
              <li><a href="flot_chart.php">Flot Charts</a></li>
              <li><a href="xchart.php">xChart</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.php">Lobby</a></li>
              <li><a href="chat_room.php"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.php">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper mt">
        <h3><i class="fa fa-angle-right"></i> Font Awesome Icon List - Ver. 4.0</h3>
        <hr>
        <!-- NEW ICONS -->
        <h4><i class="fa fa-angle-right"></i> New Icons</h4>
        <div class="fontawesome-list row">
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-rub"></i> fa-rub</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-pagelines"></i> fa-pagelines</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-stack-exchange"></i> fa-stack-exchange</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-wheelchair"></i> fa-wheelchair</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-vimeo-square"></i> fa-vimeo-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-try"></i> fa-try</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</a></div>
        </div>
        <hr>
        <!-- WEB APPLICATION ICONS -->
        <h4><i class="fa fa-angle-right"></i> Web Application Icons</h4>
        <div class="fontawesome-list row">
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-adjust"></i> fa-adjust</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-anchor"></i> fa-anchor</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-archive"></i> fa-archive</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-arrows"></i> fa-arrows</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-arrows-h"></i> fa-arrows-h</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-arrows-v"></i> fa-arrows-v</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-asterisk"></i> fa-asterisk</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-ban"></i> fa-ban</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-barcode"></i> fa-barcode</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-bars"></i> fa-bars</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-beer"></i> fa-beer</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-bell"></i> fa-bell</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-bell-o"></i> fa-bell-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-bolt"></i> fa-bolt</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-book"></i> fa-book</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-bookmark"></i> fa-bookmark</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-bookmark-o"></i> fa-bookmark-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-briefcase"></i> fa-briefcase</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-bug"></i> fa-bug</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-building-o"></i> fa-building-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-bullhorn"></i> fa-bullhorn</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-bullseye"></i> fa-bullseye</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-calendar"></i> fa-calendar</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-calendar-o"></i> fa-calendar-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-camera"></i> fa-camera</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-camera-retro"></i> fa-camera-retro</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-certificate"></i> fa-certificate</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-check"></i> fa-check</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-check-circle"></i> fa-check-circle</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-check-circle-o"></i> fa-check-circle-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-check-square"></i> fa-check-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-check-square-o"></i> fa-check-square-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-circle"></i> fa-circle</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-circle-o"></i> fa-circle-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-clock-o"></i> fa-clock-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-cloud"></i> fa-cloud</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-cloud-download"></i> fa-cloud-download</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-cloud-upload"></i> fa-cloud-upload</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-code"></i> fa-code</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-code-fork"></i> fa-code-fork</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-coffee"></i> fa-coffee</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-cog"></i> fa-cog</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-cogs"></i> fa-cogs</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-comment"></i> fa-comment</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-comment-o"></i> fa-comment-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-comments"></i> fa-comments</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-comments-o"></i> fa-comments-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-compass"></i> fa-compass</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-credit-card"></i> fa-credit-card</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-crop"></i> fa-crop</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-crosshairs"></i> fa-crosshairs</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-cutlery"></i> fa-cutlery</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-desktop"></i> fa-desktop</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-download"></i> fa-download</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-edit"></i> fa-edit <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-ellipsis-h"></i> fa-ellipsis-h</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-ellipsis-v"></i> fa-ellipsis-v</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-envelope"></i> fa-envelope</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-envelope-o"></i> fa-envelope-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-eraser"></i> fa-eraser</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-exchange"></i> fa-exchange</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-exclamation"></i> fa-exclamation</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-exclamation-circle"></i> fa-exclamation-circle</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-external-link"></i> fa-external-link</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-external-link-square"></i> fa-external-link-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-eye"></i> fa-eye</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-eye-slash"></i> fa-eye-slash</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-female"></i> fa-female</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-fighter-jet"></i> fa-fighter-jet</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-film"></i> fa-film</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-filter"></i> fa-filter</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-fire"></i> fa-fire</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-flag"></i> fa-flag</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-flag-checkered"></i> fa-flag-checkered</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-flag-o"></i> fa-flag-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-flash"></i> fa-flash <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-flask"></i> fa-flask</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-folder"></i> fa-folder</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-folder-o"></i> fa-folder-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-folder-open"></i> fa-folder-open</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-folder-open-o"></i> fa-folder-open-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-frown-o"></i> fa-frown-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-gamepad"></i> fa-gamepad</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-gavel"></i> fa-gavel</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-gears"></i> fa-gears <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-gift"></i> fa-gift</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-glass"></i> fa-glass</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-globe"></i> fa-globe</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-group"></i> fa-group <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-hdd-o"></i> fa-hdd-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-headphones"></i> fa-headphones</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-heart"></i> fa-heart</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-heart-o"></i> fa-heart-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-home"></i> fa-home</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-inbox"></i> fa-inbox</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#"><i class="fa fa-info"></i> fa-info</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#info-circle"><i class="fa fa-info-circle"></i> fa-info-circle</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#key"><i class="fa fa-key"></i> fa-key</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#keyboard-o"><i class="fa fa-keyboard-o"></i> fa-keyboard-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#laptop"><i class="fa fa-laptop"></i> fa-laptop</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#leaf"><i class="fa fa-leaf"></i> fa-leaf</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#gavel"><i class="fa fa-legal"></i> fa-legal <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#lemon-o"><i class="fa fa-lemon-o"></i> fa-lemon-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#level-down"><i class="fa fa-level-down"></i> fa-level-down</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#level-up"><i class="fa fa-level-up"></i> fa-level-up</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#lightbulb-o"><i class="fa fa-lightbulb-o"></i> fa-lightbulb-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#location-arrow"><i class="fa fa-location-arrow"></i> fa-location-arrow</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#lock"><i class="fa fa-lock"></i> fa-lock</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#magic"><i class="fa fa-magic"></i> fa-magic</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#magnet"><i class="fa fa-magnet"></i> fa-magnet</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#share"><i class="fa fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#reply"><i class="fa fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#mail-reply-all"><i class="fa fa-mail-reply-all"></i> fa-mail-reply-all</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#male"><i class="fa fa-male"></i> fa-male</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#map-marker"><i class="fa fa-map-marker"></i> fa-map-marker</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#meh-o"><i class="fa fa-meh-o"></i> fa-meh-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#microphone"><i class="fa fa-microphone"></i> fa-microphone</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#microphone-slash"><i class="fa fa-microphone-slash"></i> fa-microphone-slash</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#minus"><i class="fa fa-minus"></i> fa-minus</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#minus-circle"><i class="fa fa-minus-circle"></i> fa-minus-circle</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#minus-square"><i class="fa fa-minus-square"></i> fa-minus-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#minus-square-o"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#mobile"><i class="fa fa-mobile"></i> fa-mobile</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#mobile"><i class="fa fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#money"><i class="fa fa-money"></i> fa-money</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#moon-o"><i class="fa fa-moon-o"></i> fa-moon-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#music"><i class="fa fa-music"></i> fa-music</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#pencil"><i class="fa fa-pencil"></i> fa-pencil</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#pencil-square"><i class="fa fa-pencil-square"></i> fa-pencil-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#pencil-square-o"><i class="fa fa-pencil-square-o"></i> fa-pencil-square-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#phone"><i class="fa fa-phone"></i> fa-phone</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#phone-square"><i class="fa fa-phone-square"></i> fa-phone-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#picture-o"><i class="fa fa-picture-o"></i> fa-picture-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#plane"><i class="fa fa-plane"></i> fa-plane</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#plus"><i class="fa fa-plus"></i> fa-plus</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#plus-circle"><i class="fa fa-plus-circle"></i> fa-plus-circle</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#plus-square"><i class="fa fa-plus-square"></i> fa-plus-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#plus-square-o"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#power-off"><i class="fa fa-power-off"></i> fa-power-off</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#print"><i class="fa fa-print"></i> fa-print</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#puzzle-piece"><i class="fa fa-puzzle-piece"></i> fa-puzzle-piece</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#qrcode"><i class="fa fa-qrcode"></i> fa-qrcode</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#question"><i class="fa fa-question"></i> fa-question</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#question-circle"><i class="fa fa-question-circle"></i> fa-question-circle</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#quote-left"><i class="fa fa-quote-left"></i> fa-quote-left</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#quote-right"><i class="fa fa-quote-right"></i> fa-quote-right</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#random"><i class="fa fa-random"></i> fa-random</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#refresh"><i class="fa fa-refresh"></i> fa-refresh</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#reply"><i class="fa fa-reply"></i> fa-reply</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#reply-all"><i class="fa fa-reply-all"></i> fa-reply-all</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#retweet"><i class="fa fa-retweet"></i> fa-retweet</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#road"><i class="fa fa-road"></i> fa-road</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#rocket"><i class="fa fa-rocket"></i> fa-rocket</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#rss"><i class="fa fa-rss"></i> fa-rss</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#rss-square"><i class="fa fa-rss-square"></i> fa-rss-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#search"><i class="fa fa-search"></i> fa-search</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#search-minus"><i class="fa fa-search-minus"></i> fa-search-minus</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#search-plus"><i class="fa fa-search-plus"></i> fa-search-plus</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#share"><i class="fa fa-share"></i> fa-share</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#share-square"><i class="fa fa-share-square"></i> fa-share-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#share-square-o"><i class="fa fa-share-square-o"></i> fa-share-square-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#shield"><i class="fa fa-shield"></i> fa-shield</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#shopping-cart"><i class="fa fa-shopping-cart"></i> fa-shopping-cart</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#sign-in"><i class="fa fa-sign-in"></i> fa-sign-in</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#sign-out"><i class="fa fa-sign-out"></i> fa-sign-out</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#signal"><i class="fa fa-signal"></i> fa-signal</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#sitemap"><i class="fa fa-sitemap"></i> fa-sitemap</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#smile-o"><i class="fa fa-smile-o"></i> fa-smile-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#sort"><i class="fa fa-sort"></i> fa-sort</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#sort-alpha-asc"><i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#sort-alpha-desc"><i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#sort-amount-asc"><i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#sort-amount-desc"><i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#sort-asc"><i class="fa fa-sort-asc"></i> fa-sort-asc</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#sort-desc"><i class="fa fa-sort-desc"></i> fa-sort-desc</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#sort-asc"><i class="fa fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#sort-numeric-asc"><i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#sort-numeric-desc"><i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#sort-desc"><i class="fa fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#spinner"><i class="fa fa-spinner"></i> fa-spinner</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#square"><i class="fa fa-square"></i> fa-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#square-o"><i class="fa fa-square-o"></i> fa-square-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#star"><i class="fa fa-star"></i> fa-star</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#star-half"><i class="fa fa-star-half"></i> fa-star-half</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#star-half-o"><i class="fa fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#star-half-o"><i class="fa fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#star-half-o"><i class="fa fa-star-half-o"></i> fa-star-half-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#star-o"><i class="fa fa-star-o"></i> fa-star-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#subscript"><i class="fa fa-subscript"></i> fa-subscript</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#suitcase"><i class="fa fa-suitcase"></i> fa-suitcase</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#sun-o"><i class="fa fa-sun-o"></i> fa-sun-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#superscript"><i class="fa fa-superscript"></i> fa-superscript</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#tablet"><i class="fa fa-tablet"></i> fa-tablet</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#tachometer"><i class="fa fa-tachometer"></i> fa-tachometer</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#tag"><i class="fa fa-tag"></i> fa-tag</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#tags"><i class="fa fa-tags"></i> fa-tags</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#tasks"><i class="fa fa-tasks"></i> fa-tasks</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#terminal"><i class="fa fa-terminal"></i> fa-terminal</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#thumb-tack"><i class="fa fa-thumb-tack"></i> fa-thumb-tack</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#thumbs-down"><i class="fa fa-thumbs-down"></i> fa-thumbs-down</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#thumbs-o-down"><i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#thumbs-o-up"><i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#thumbs-up"><i class="fa fa-thumbs-up"></i> fa-thumbs-up</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#ticket"><i class="fa fa-ticket"></i> fa-ticket</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#times"><i class="fa fa-times"></i> fa-times</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#times-circle"><i class="fa fa-times-circle"></i> fa-times-circle</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#times-circle-o"><i class="fa fa-times-circle-o"></i> fa-times-circle-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#tint"><i class="fa fa-tint"></i> fa-tint</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#caret-square-o-down"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#caret-square-o-left"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#caret-square-o-right"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#caret-square-o-up"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#trash-o"><i class="fa fa-trash-o"></i> fa-trash-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#trophy"><i class="fa fa-trophy"></i> fa-trophy</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#truck"><i class="fa fa-truck"></i> fa-truck</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#umbrella"><i class="fa fa-umbrella"></i> fa-umbrella</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#unlock"><i class="fa fa-unlock"></i> fa-unlock</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#unlock-alt"><i class="fa fa-unlock-alt"></i> fa-unlock-alt</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#sort"><i class="fa fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#upload"><i class="fa fa-upload"></i> fa-upload</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#user"><i class="fa fa-user"></i> fa-user</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#users"><i class="fa fa-users"></i> fa-users</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#video-camera"><i class="fa fa-video-camera"></i> fa-video-camera</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#volume-down"><i class="fa fa-volume-down"></i> fa-volume-down</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#volume-off"><i class="fa fa-volume-off"></i> fa-volume-off</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#volume-up"><i class="fa fa-volume-up"></i> fa-volume-up</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#exclamation-triangle"><i class="fa fa-warning"></i> fa-warning <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#wheelchair"><i class="fa fa-wheelchair"></i> fa-wheelchair</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#wrench"><i class="fa fa-wrench"></i> fa-wrench</a></div>
        </div>
        <!--/row -->
        <hr>
        <!-- FORM CONTROL ICONS -->
        <h4><i class="fa fa-angle-right"></i> Form Control Icons</h4>
        <div class="fontawesome-list row">
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#check-square"><i class="fa fa-check-square"></i> fa-check-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#check-square-o"><i class="fa fa-check-square-o"></i> fa-check-square-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#circle"><i class="fa fa-circle"></i> fa-circle</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#circle-o"><i class="fa fa-circle-o"></i> fa-circle-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#dot-circle-o"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#minus-square"><i class="fa fa-minus-square"></i> fa-minus-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#minus-square-o"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#plus-square"><i class="fa fa-plus-square"></i> fa-plus-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#plus-square-o"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#square"><i class="fa fa-square"></i> fa-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#square-o"><i class="fa fa-square-o"></i> fa-square-o</a></div>
        </div>
        <!-- /row -->
        <hr>
        <!-- CURRENCY ICONS -->
        <h4><i class="fa fa-angle-right"></i> Currency Icons</h4>
        <div class="fontawesome-list row">
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#btc"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#btc"><i class="fa fa-btc"></i> fa-btc</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#jpy"><i class="fa fa-cny"></i> fa-cny <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#usd"><i class="fa fa-dollar"></i> fa-dollar <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#eur"><i class="fa fa-eur"></i> fa-eur</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#eur"><i class="fa fa-euro"></i> fa-euro <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#gbp"><i class="fa fa-gbp"></i> fa-gbp</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#inr"><i class="fa fa-inr"></i> fa-inr</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#jpy"><i class="fa fa-jpy"></i> fa-jpy</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#krw"><i class="fa fa-krw"></i> fa-krw</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#money"><i class="fa fa-money"></i> fa-money</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#jpy"><i class="fa fa-rmb"></i> fa-rmb <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#rub"><i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#rub"><i class="fa fa-rub"></i> fa-rub</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#rub"><i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#inr"><i class="fa fa-rupee"></i> fa-rupee <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#try"><i class="fa fa-try"></i> fa-try</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#try"><i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#usd"><i class="fa fa-usd"></i> fa-usd</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#krw"><i class="fa fa-won"></i> fa-won <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#jpy"><i class="fa fa-yen"></i> fa-yen <span class="text-muted">(alias)</span></a></div>
        </div>
        <!-- /row -->
        <hr>
        <!-- TEXT EDITOR ICONS -->
        <h4><i class="fa fa-angle-right"></i> Text Icons</h4>
        <div class="fontawesome-list row">
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#align-center"><i class="fa fa-align-center"></i> fa-align-center</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#align-justify"><i class="fa fa-align-justify"></i> fa-align-justify</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#align-left"><i class="fa fa-align-left"></i> fa-align-left</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#align-right"><i class="fa fa-align-right"></i> fa-align-right</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#bold"><i class="fa fa-bold"></i> fa-bold</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#link"><i class="fa fa-chain"></i> fa-chain <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#chain-broken"><i class="fa fa-chain-broken"></i> fa-chain-broken</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#clipboard"><i class="fa fa-clipboard"></i> fa-clipboard</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#columns"><i class="fa fa-columns"></i> fa-columns</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#files-o"><i class="fa fa-copy"></i> fa-copy <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#scissors"><i class="fa fa-cut"></i> fa-cut <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#outdent"><i class="fa fa-dedent"></i> fa-dedent <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#eraser"><i class="fa fa-eraser"></i> fa-eraser</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#file"><i class="fa fa-file"></i> fa-file</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#file-o"><i class="fa fa-file-o"></i> fa-file-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#file-text"><i class="fa fa-file-text"></i> fa-file-text</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#file-text-o"><i class="fa fa-file-text-o"></i> fa-file-text-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#files-o"><i class="fa fa-files-o"></i> fa-files-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#floppy-o"><i class="fa fa-floppy-o"></i> fa-floppy-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#font"><i class="fa fa-font"></i> fa-font</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#indent"><i class="fa fa-indent"></i> fa-indent</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#italic"><i class="fa fa-italic"></i> fa-italic</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#link"><i class="fa fa-link"></i> fa-link</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#list"><i class="fa fa-list"></i> fa-list</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#list-alt"><i class="fa fa-list-alt"></i> fa-list-alt</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#list-ol"><i class="fa fa-list-ol"></i> fa-list-ol</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#list-ul"><i class="fa fa-list-ul"></i> fa-list-ul</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#outdent"><i class="fa fa-outdent"></i> fa-outdent</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#paperclip"><i class="fa fa-paperclip"></i> fa-paperclip</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#clipboard"><i class="fa fa-paste"></i> fa-paste <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#repeat"><i class="fa fa-repeat"></i> fa-repeat</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#undo"><i class="fa fa-rotate-left"></i> fa-rotate-left <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#repeat"><i class="fa fa-rotate-right"></i> fa-rotate-right <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#floppy-o"><i class="fa fa-save"></i> fa-save <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#scissors"><i class="fa fa-scissors"></i> fa-scissors</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#strikethrough"><i class="fa fa-strikethrough"></i> fa-strikethrough</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#table"><i class="fa fa-table"></i> fa-table</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#text-height"><i class="fa fa-text-height"></i> fa-text-height</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#text-width"><i class="fa fa-text-width"></i> fa-text-width</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#th"><i class="fa fa-th"></i> fa-th</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#th-large"><i class="fa fa-th-large"></i> fa-th-large</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#th-list"><i class="fa fa-th-list"></i> fa-th-list</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#underline"><i class="fa fa-underline"></i> fa-underline</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#undo"><i class="fa fa-undo"></i> fa-undo</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#chain-broken"><i class="fa fa-unlink"></i> fa-unlink <span class="text-muted">(alias)</span></a></div>
        </div>
        <!-- /row -->
        <hr>
        <!-- DIRECTIONAL ICONS -->
        <h4><i class="fa fa-angle-right"></i> Directional Icons</h4>
        <div class="fontawesome-list row">
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#angle-double-down"><i class="fa fa-angle-double-down"></i> fa-angle-double-down</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#angle-double-left"><i class="fa fa-angle-double-left"></i> fa-angle-double-left</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#angle-double-right"><i class="fa fa-angle-double-right"></i> fa-angle-double-right</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#angle-double-up"><i class="fa fa-angle-double-up"></i> fa-angle-double-up</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#angle-down"><i class="fa fa-angle-down"></i> fa-angle-down</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#angle-left"><i class="fa fa-angle-left"></i> fa-angle-left</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#angle-right"><i class="fa fa-angle-right"></i> fa-angle-right</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#angle-up"><i class="fa fa-angle-up"></i> fa-angle-up</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrow-circle-down"><i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrow-circle-left"><i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrow-circle-o-down"><i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrow-circle-o-left"><i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrow-circle-o-right"><i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrow-circle-o-up"><i class="fa fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrow-circle-right"><i class="fa fa-arrow-circle-right"></i> fa-arrow-circle-right</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrow-circle-up"><i class="fa fa-arrow-circle-up"></i> fa-arrow-circle-up</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrow-down"><i class="fa fa-arrow-down"></i> fa-arrow-down</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrow-left"><i class="fa fa-arrow-left"></i> fa-arrow-left</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrow-right"><i class="fa fa-arrow-right"></i> fa-arrow-right</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrow-up"><i class="fa fa-arrow-up"></i> fa-arrow-up</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrows"><i class="fa fa-arrows"></i> fa-arrows</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrows-alt"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrows-h"><i class="fa fa-arrows-h"></i> fa-arrows-h</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrows-v"><i class="fa fa-arrows-v"></i> fa-arrows-v</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#caret-down"><i class="fa fa-caret-down"></i> fa-caret-down</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#caret-left"><i class="fa fa-caret-left"></i> fa-caret-left</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#caret-right"><i class="fa fa-caret-right"></i> fa-caret-right</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#caret-square-o-down"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#caret-square-o-left"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#caret-square-o-right"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#caret-square-o-up"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#caret-up"><i class="fa fa-caret-up"></i> fa-caret-up</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#chevron-circle-down"><i class="fa fa-chevron-circle-down"></i> fa-chevron-circle-down</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#chevron-circle-left"><i class="fa fa-chevron-circle-left"></i> fa-chevron-circle-left</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#chevron-circle-right"><i class="fa fa-chevron-circle-right"></i> fa-chevron-circle-right</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#chevron-circle-up"><i class="fa fa-chevron-circle-up"></i> fa-chevron-circle-up</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#chevron-down"><i class="fa fa-chevron-down"></i> fa-chevron-down</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#chevron-left"><i class="fa fa-chevron-left"></i> fa-chevron-left</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#chevron-right"><i class="fa fa-chevron-right"></i> fa-chevron-right</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#chevron-up"><i class="fa fa-chevron-up"></i> fa-chevron-up</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#hand-o-down"><i class="fa fa-hand-o-down"></i> fa-hand-o-down</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#hand-o-left"><i class="fa fa-hand-o-left"></i> fa-hand-o-left</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#hand-o-right"><i class="fa fa-hand-o-right"></i> fa-hand-o-right</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#hand-o-up"><i class="fa fa-hand-o-up"></i> fa-hand-o-up</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#long-arrow-down"><i class="fa fa-long-arrow-down"></i> fa-long-arrow-down</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#long-arrow-left"><i class="fa fa-long-arrow-left"></i> fa-long-arrow-left</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#long-arrow-right"><i class="fa fa-long-arrow-right"></i> fa-long-arrow-right</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#long-arrow-up"><i class="fa fa-long-arrow-up"></i> fa-long-arrow-up</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#caret-square-o-down"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#caret-square-o-left"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#caret-square-o-right"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#caret-square-o-up"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></a></div>
        </div>
        <!-- /row -->
        <hr>
        <!-- VIDEO PLAYER ICONS -->
        <h4><i class="fa fa-angle-right"></i> Video Player Icons</h4>
        <div class="fontawesome-list row">
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#arrows-alt"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#backward"><i class="fa fa-backward"></i> fa-backward</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#compress"><i class="fa fa-compress"></i> fa-compress</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#eject"><i class="fa fa-eject"></i> fa-eject</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#expand"><i class="fa fa-expand"></i> fa-expand</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#fast-backward"><i class="fa fa-fast-backward"></i> fa-fast-backward</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#fast-forward"><i class="fa fa-fast-forward"></i> fa-fast-forward</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#forward"><i class="fa fa-forward"></i> fa-forward</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#pause"><i class="fa fa-pause"></i> fa-pause</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#play"><i class="fa fa-play"></i> fa-play</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#play-circle"><i class="fa fa-play-circle"></i> fa-play-circle</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#play-circle-o"><i class="fa fa-play-circle-o"></i> fa-play-circle-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#step-backward"><i class="fa fa-step-backward"></i> fa-step-backward</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#step-forward"><i class="fa fa-step-forward"></i> fa-step-forward</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#stop"><i class="fa fa-stop"></i> fa-stop</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#youtube-play"><i class="fa fa-youtube-play"></i> fa-youtube-play</a></div>
        </div>
        <!-- /row -->
        <hr>
        <!-- BRAND ICONS -->
        <h4><i class="fa fa-angle-right"></i> Brand Icons</h4>
        <div class="fontawesome-list row">
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#adn"><i class="fa fa-adn"></i> fa-adn</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#android"><i class="fa fa-android"></i> fa-android</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#apple"><i class="fa fa-apple"></i> fa-apple</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#bitbucket"><i class="fa fa-bitbucket"></i> fa-bitbucket</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#bitbucket-square"><i class="fa fa-bitbucket-square"></i> fa-bitbucket-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#btc"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#btc"><i class="fa fa-btc"></i> fa-btc</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#css3"><i class="fa fa-css3"></i> fa-css3</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#dribbble"><i class="fa fa-dribbble"></i> fa-dribbble</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#dropbox"><i class="fa fa-dropbox"></i> fa-dropbox</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#facebook"><i class="fa fa-facebook"></i> fa-facebook</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#facebook-square"><i class="fa fa-facebook-square"></i> fa-facebook-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#flickr"><i class="fa fa-flickr"></i> fa-flickr</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#foursquare"><i class="fa fa-foursquare"></i> fa-foursquare</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#github"><i class="fa fa-github"></i> fa-github</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#github-alt"><i class="fa fa-github-alt"></i> fa-github-alt</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#github-square"><i class="fa fa-github-square"></i> fa-github-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#gittip"><i class="fa fa-gittip"></i> fa-gittip</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#google-plus"><i class="fa fa-google-plus"></i> fa-google-plus</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#google-plus-square"><i class="fa fa-google-plus-square"></i> fa-google-plus-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#html5"><i class="fa fa-html5"></i> fa-html5</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#instagram"><i class="fa fa-instagram"></i> fa-instagram</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#linkedin"><i class="fa fa-linkedin"></i> fa-linkedin</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#linkedin-square"><i class="fa fa-linkedin-square"></i> fa-linkedin-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#linux"><i class="fa fa-linux"></i> fa-linux</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#maxcdn"><i class="fa fa-maxcdn"></i> fa-maxcdn</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#pagelines"><i class="fa fa-pagelines"></i> fa-pagelines</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#pinterest"><i class="fa fa-pinterest"></i> fa-pinterest</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#pinterest-square"><i class="fa fa-pinterest-square"></i> fa-pinterest-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#renren"><i class="fa fa-renren"></i> fa-renren</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#skype"><i class="fa fa-skype"></i> fa-skype</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#stack-exchange"><i class="fa fa-stack-exchange"></i> fa-stack-exchange</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#stack-overflow"><i class="fa fa-stack-overflow"></i> fa-stack-overflow</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#trello"><i class="fa fa-trello"></i> fa-trello</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#tumblr"><i class="fa fa-tumblr"></i> fa-tumblr</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#tumblr-square"><i class="fa fa-tumblr-square"></i> fa-tumblr-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#twitter"><i class="fa fa-twitter"></i> fa-twitter</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#twitter-square"><i class="fa fa-twitter-square"></i> fa-twitter-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#vimeo-square"><i class="fa fa-vimeo-square"></i> fa-vimeo-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#vk"><i class="fa fa-vk"></i> fa-vk</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#weibo"><i class="fa fa-weibo"></i> fa-weibo</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#windows"><i class="fa fa-windows"></i> fa-windows</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#xing"><i class="fa fa-xing"></i> fa-xing</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#xing-square"><i class="fa fa-xing-square"></i> fa-xing-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#youtube"><i class="fa fa-youtube"></i> fa-youtube</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#youtube-play"><i class="fa fa-youtube-play"></i> fa-youtube-play</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#youtube-square"><i class="fa fa-youtube-square"></i> fa-youtube-square</a></div>
        </div>
        <!-- /row -->
        <hr>
        <!-- MEDICAL ICONS -->
        <h4><i class="fa fa-angle-right"></i> Medical Icons</h4>
        <div class="fontawesome-list row">
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#ambulance"><i class="fa fa-ambulance"></i> fa-ambulance</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#h-square"><i class="fa fa-h-square"></i> fa-h-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#hospital-o"><i class="fa fa-hospital-o"></i> fa-hospital-o</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#medkit"><i class="fa fa-medkit"></i> fa-medkit</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#plus-square"><i class="fa fa-plus-square"></i> fa-plus-square</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#stethoscope"><i class="fa fa-stethoscope"></i> fa-stethoscope</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#user-md"><i class="fa fa-user-md"></i> fa-user-md</a></div>
          <div class="fa-hover col-md-3 col-sm-4"><a href="flot_chart.php#wheelchair"><i class="fa fa-wheelchair"></i> fa-wheelchair</a></div>
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="flot_chart.php#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>
