<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
        <!-- Hammer reload -->
          <script>
            setInterval(function(){
              try {
                if(typeof ws != 'undefined' && ws.readyState == 1){return true;}
                ws = new WebSocket('ws://'+(location.host || 'localhost').split(':')[0]+':35353')
                ws.onopen = function(){ws.onclose = function(){document.location.reload()}}
                ws.onmessage = function(){
                  var links = document.getElementsByTagName('link'); 
                    for (var i = 0; i < links.length;i++) { 
                    var link = links[i]; 
                    if (link.rel === 'stylesheet' && !link.href.match(/typekit/)) { 
                      href = link.href.replace(/((&|\?)hammer=)[^&]+/,''); 
                      link.href = href + (href.indexOf('?')>=0?'&':'?') + 'hammer='+(new Date().valueOf());
                    }
                  }
                }
              }catch(e){}
            }, 1000)
          </script>
        <!-- /Hammer reload -->
      

  <link rel='stylesheet' href='../resources/assets/css/fullcalendar.css'>
<link rel='stylesheet' href='assets/css/datatables/datatables.css'>
<link rel='stylesheet' href='assets/css/datatables/bootstrap.datatables.css'>
<link rel='stylesheet' href='assets/scss/chosen.css'>
<link rel='stylesheet' href='assets/scss/font-awesome/font-awesome.css'>
<link rel='stylesheet' href='assets/css/app.css'>

  <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700|Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

  <link href="assets/favicon.ico" rel="shortcut icon">
  <link href="assets/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    @javascript html5shiv respond.min
  <![endif]-->

  <title>Administrador de Periodo Académico</title>

</head>

<body>


<div class="all-wrapper">
  <div class="row">
    <div class="col-md-2">
      <div class="text-center">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
</div>
<div class="side-bar-wrapper collapse navbar-collapse navbar-ex1-collapse">
  <a href="#" class="logo hidden-sm hidden-xs">
  <i class="icon-coffee"></i>
    
    <span>SEMADMIN</span>
  </a>
  <div class="search-box">
    <input type="text" placeholder="SEARCH" class="form-control">
  </div>
  <ul class="side-menu">
    <li>
      <a href="notifications.html">
        <span class="badge badge-notifications pull-right alert-animated">5</span>
        <i class="icon-flag"></i> Avisos
      </a>
    </li>
  </ul>
  <div class="relative-w">
    <ul class="side-menu">
      <li class='current'>
        <a class='current' href="index.html">
          
          <i class="icon-dashboard"></i> Principal
        </a>
      </li>
      <li>
        <a href="charts.html" class="is-dropdown-menu">
          
          <i class="icon-bar-chart"></i> Gráficos
        </a>
        <ul>
          <li>
            <a href="charts.html#area_chart_anchor">
              <i class="icon-random"></i>
              
            </a>
          </li>
          </ul>
      </li>
      <li>
        <a href="forms.html">
          <!--<span class="badge pull-right">12</span>-->
          <i class="icon-ok-sign"></i> Notas
        </a>
      </li>
      
      <li>
        <a href="calendar.html">
         
          <i class="icon-calendar"></i> Calendario
        </a>
      </li>
     
    </ul>
  </div>
</div>
    </div>
    
<!-- ------------------------------------------------------------CONTENIDO-------------------------------------->
    <div class="col-md-10">
      <div class="content-wrapper wood-wrapper">
        <div class="content-inner">
          <div class="page-header">
  <div class="header-links hidden-xs">
    
    
    <!--<a href="#"><i class="icon-signout"></i> Logout</a> -->
  </div>
  <h1><i class="icon-bar-chart"></i> PRINCIPAL</h1>
</div>
<ol class="breadcrumb">
  <li><a href="#">Registrar</a></li>
  <li><a href="#">Visualizar</a></li>
  <li><a href="#">Modificar</a></li>
  
</ol>

          <div class="main-content">
                    <div class="row">
              
              <div class="col-md-11">
                <div class="widget">
                  <div class="widget-content-white glossed">
                    <div class="padded">
                      <form action="" role="form" class="form-horizontal">
                        <div class="widget-controls pull-right">
                          <a href="#" class="widget-link-remove"><i class="icon-minus-sign"></i></a>
                          <a href="#" class="widget-link-remove"><i class="icon-remove-sign"></i></a>
                        </div>
                        <h3 class="form-title form-title-first"><i class="icon-th-list"></i> Registro de Semestre</h3>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Nombre del Periodo</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Ingrese nombre del Periodo" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label">Fecha de Inicio</label>
                          <div class="col-md-8">
                            <input type="date" class="form-control" placeholder="Enter date"required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label">Fecha de Cierre</label>
                          <div class="col-md-8">
                            <input type="date" class="form-control" placeholder="Enter date">
                          </div>
                        </div>
                       
                        
                        <div class="form-group">
                          <label class="col-md-4 control-label">Cantidad de Materias</label>
                          <div class="col-md-8">
                            <select class="form-control" required>
                            <option value="">Seleccione</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                            </select>
                          </div>
                        </div>
                       

                        <div class="form-group">
                          <div class="col-md-offset-4 col-md-8">
                            <button type="submit" class="btn btn-success">Registrar</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div> 


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src='assets/js/jquery.sparkline.min.js'></script>
<script src='assets/js/bootstrap/tab.js'></script>
<script src='assets/js/bootstrap/dropdown.js'></script>
<script src='assets/js/bootstrap/collapse.js'></script>
<script src='assets/js/bootstrap/transition.js'></script>
<script src='assets/js/bootstrap/tooltip.js'></script>
<script src='assets/js/jquery.knob.js'></script>
<script src='assets/js/fullcalendar.min.js'></script>
<script src='assets/js/datatables/datatables.min.js'></script>
<script src='assets/js/chosen.jquery.min.js'></script>
<script src='assets/js/datatables/bootstrap.datatables.js'></script>
<script src='assets/js/raphael-min.js'></script>
<script src='assets/js/morris-0.4.3.min.js'></script>
<script src='assets/js/for_pages/color_settings.js'></script>
<script src='assets/js/application.js'></script>

<script src='assets/js/for_pages/dashboard.js'></script>

</body>

</html>