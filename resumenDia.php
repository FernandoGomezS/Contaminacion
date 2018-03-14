

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo.png" />
    <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Monitoreo de Contaminación </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />

    <style type='text/css'>          
            
            .my-legend .legend-title {
                text-align: center;
                margin-bottom: 5px;
                font-weight: bold;
                font-size: 90%;
            }
            .my-legend .legend-scale ul {
                margin: 0;
                margin-bottom: 5px;
                padding: 0;
                float: left;
                list-style: none;
            }
            .my-legend .legend-scale ul li {
                font-size: 80%;
                list-style: none;
                margin-left: 0;
                line-height: 18px;
                margin-bottom: 2px;
            }
            .my-legend ul.legend-labels li span {
                display: block;
                float: left;
                height: 16px;
                width: 30px;
                margin-right: 5px;
                margin-left: 0;
                border: 1px solid #999;
            }
            .my-legend .legend-source {
                font-size: 70%;
                color: #999;
                clear: both;
            }
            .my-legend a {
                color: #777;
            }
        </style>
        <style type='text/css'>
          .my-legend {
                max-width: 400px !important;
            }
            .my-legend .legend-title {
                text-align: left;
                margin-bottom: 8px;
                font-weight: bold;
                font-size: 90%;
            }
            .my-legend .legend-scale ul {
                margin: 0;
                padding: 0;
                float: left;
                list-style: none;
            }
            .my-legend .legend-scale ul li {
                display: block;
                float: left;
                width: 80px;
                margin-bottom: 6px;
                text-align: center;
                font-size: 80%;
                list-style: none;
            }
            .my-legend ul.legend-labels li span {
                display: block;
                float: left;
                height: 15px;
                width: 80px;
            }
            .my-legend .legend-source {
                font-size: 70%;
                color: #999;
                clear: both;
            }
            .my-legend a {
                color: #777;
            }
        </style>
</head>


<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="blue" data-background-color="black">       
            <div class="logo">
                <a href="index.html" class="simple-text"><img src="assets/img/logo.png" width="40" height="35">
                    Calidad del aire                 
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="index.html" class="simple-text">
                    <img src="assets/img/logo.png" width="25" height="25">
                </a>
            </div>
            <div class="sidebar-wrapper">                
                <ul class="nav">
                    <li  >
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <p>Inicio</p>
                        </a>
                    </li>                      
                    <li class="active">
                        <a href="resumenDia.html">
                            <i class="material-icons">today</i>
                            <p>Resumen del día</p>
                        </a>
                    </li>
                    <li >
                        <a href="historial.html">
                            <i class="material-icons">assessment</i>
                            <p>Historial de datos</p>
                        </a>
                    </li>  
                     <li >
                        <a href="preguntas.html">
                            <i class="material-icons">live_help</i>
                            <p>Preguntas frecuentes</p>
                        </a>
                    </li>              
                    <li>
                        <a href="acercaDe.html">
                            <i class="material-icons">work</i>
                            <p>Acerca de</p>
                        </a>
                    </li>                                                     
                </ul>  
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="resumenDia.html#"> Resumen</a>
                    </div>               
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="green">
                                    <i class="material-icons">today</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Resumen del día</h4>

                                    <div class="col-md-10 col-md-offset-1">
                                        <h3 class="title text-center">Tamaño de Partícula</h3>
                                        <br>
                                        <div class="nav-center">
                                            <ul class="nav nav-pills nav-pills-info nav-pills-icons" role="tablist">                        
                                                <li class="active">
                                                    <a href="#description-1" role="tab" data-toggle="tab" aria-expanded="false">
                                                        <i class="material-icons">cloud</i> PM 2.5
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#schedule-1" role="tab" data-toggle="tab" aria-expanded="true">
                                                        <i class="material-icons">cloud</i> PM 10 
                                                    </a>
                                                </li>                                   
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="description-1">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Contaminación de las ultimas 24 Horas.</h4>
                                                        <div class="card-content">
                                                            <div class="row">  
                                                                <div class="col-md-6 col-md-offset-3">                                             
                                                                   
                                                                           <?php
                                                                           include 'conectBD.php';
                                                                           //$fechafinal=date('Y-m-d h:i:s', time());
                                                                            $fechafinal=date('Y-m-d h:i:s', strtotime("2017-05-17 09:00:00"));
                                                                           $fecha=strtotime ( '-1 day' , strtotime ( $fechafinal ) );
                                                                           $fechaini = date ( 'Y-m-d h:i:s' , $fecha );
                                                                           $result = pg_query($con,"SELECT AVG(valor)
                                                                            FROM registro WHERE id_tipo='1' AND (fecha_registro BETWEEN '$fechaini' AND '$fechafinal')" ) or die($fechafinal);
                                                                           if(!$result) echo pg_error();
                                                                           else{
                                                                            $fila = pg_fetch_array($result);  
                                                                            $valor=number_format($fila['avg'], 2, '.', ''); 
                                                                          
                                                                             if($valor<=50){
                                                                                 echo ("<div class='card-header ' data-background-color='green'> <center><h3 class='card-title'>");

                                                                            } 
                                                                            else if($valor<=80){
                                                                                 echo ("<div class='card-header ' data-background-color='orange'> <center><h3 class='card-title'>");

                                                                            } 
                                                                             else if($valor<=170){
                                                                                 echo ("<div class='card-header ' data-background-color='red'> <center><h3 class='card-title'>");

                                                                            }  
                                                                            else if($valor>170){
                                                                                 echo ("<div class='card-header ' data-background-color='purple'> <center><h3 class='card-title'>");

                                                                            }                                        

                                                                            echo(" Promedio: ");
                                                                            echo $valor;
                                                                            echo(" µg∕m3") ;                                              

                                                                        }
                                                                        pg_free_result($result);
                                                                        pg_close($con);
                                                                        ?>

                                                                    </h3></center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">  
                                                            <div class="col-md-6 col-md-offset-3"> 
                                                                        <?php
                                                                        include 'conectBD.php';
                                                                      //  $fechafinal=date('Y-m-d h:i:s', time());
                                                                         $fechafinal=date('Y-m-d h:i:s', strtotime("2017-05-17 09:00:00"));
                                                                        $fecha=strtotime ( '-1 day' , strtotime ( $fechafinal ) );
                                                                        $fechaini = date ( 'Y-m-d h:i:s' , $fecha );
                                                                        $result = pg_query($con,"SELECT MAX(valor)
                                                                            FROM registro WHERE id_tipo='1' AND (fecha_registro BETWEEN '$fechaini' AND '$fechafinal')" ) or die($fechafinal);
                                                                        if(!$result) echo pg_error();
                                                                        else{
                                                                            $fila = pg_fetch_array($result);  
                                                                            $valor=number_format($fila['max'], 2, '.', ''); 

                                                                             if($valor<=50){
                                                                                 echo ("<div class='card-header ' data-background-color='green'> <center><h3 class='card-title'>");

                                                                            } 
                                                                            else if($valor<=80){
                                                                                 echo ("<div class='card-header ' data-background-color='orange'> <center><h3 class='card-title'>");

                                                                            } 
                                                                             else if($valor<=170){
                                                                                 echo ("<div class='card-header ' data-background-color='red'> <center><h3 class='card-title'>");

                                                                            }  
                                                                            else if($valor>170){
                                                                                 echo ("<div class='card-header ' data-background-color='purple'> <center><h3 class='card-title'>");

                                                                            }                                             

                                                                            echo(" Máxima: ");
                                                                            echo $valor;
                                                                            echo(" µg∕m3") ;                                              

                                                                        }
                                                                        pg_free_result($result);
                                                                        pg_close($con);
                                                                        ?>
                                                                    </h3></center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">   
                                                            <div class="col-md-6 col-md-offset-3"> 
                                                                       <?php
                                                                       include 'conectBD.php';
                                                                        $fechafinal=date('Y-m-d h:i:s', strtotime("2017-05-17 09:00:00"));
                                                                      // $fechafinal=date('Y-m-d h:i:s', time());
                                                                       $fecha=strtotime ( '-1 day' , strtotime ( $fechafinal ) );
                                                                       $fechaini = date ( 'Y-m-d h:i:s' , $fecha );
                                                                       $result = pg_query($con,"SELECT MIN(valor)
                                                                        FROM registro WHERE id_tipo='1' AND (fecha_registro BETWEEN '$fechaini' AND '$fechafinal')" ) or die($fechafinal);
                                                                       if(!$result) echo pg_error();
                                                                       else{
                                                                        $fila = pg_fetch_array($result);  
                                                                        $valor=number_format($fila['min'], 2, '.', '');   

                                                                       
                                                                             if($valor<=50){
                                                                                 echo ("<div class='card-header ' data-background-color='green'> <center><h3 class='card-title'>");

                                                                            } 
                                                                            else if($valor<=80){
                                                                                 echo ("<div class='card-header ' data-background-color='orange'> <center><h3 class='card-title'>");

                                                                            } 
                                                                             else if($valor<=170){
                                                                                 echo ("<div class='card-header ' data-background-color='red'> <center><h3 class='card-title'>");

                                                                            }  
                                                                            else if($valor>170){
                                                                                 echo ("<div class='card-header ' data-background-color='purple'> <center><h3 class='card-title'>");

                                                                            }                                         

                                                                        echo(" Mínima: ");
                                                                        echo $valor;
                                                                        echo(" µg∕m3") ;                                              

                                                                    }
                                                                    pg_free_result($result);
                                                                    pg_close($con);
                                                                    ?>
                                                                </h3></center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">   
                                                            <div class="col-md-6 col-md-offset-3">
                                                                <br> 
                                                                <div class='well well-sm' id='pm25legend'>
                                                                            <div class='my-legend'>
                                                                                <div class='legend-title'>Escala de Colores</div>
                                                                                <div class='legend-scale'>
                                                                                  <ul class='legend-labels'>
                                                                                    <li><span style='background:#14D80D;'></span>Bueno</li>
                                                                                    <li><span style='background:#DDE426;'></span>Regular</li>
                                                                                    <li><span style='background:#EC8704;'></span>Alerta</li>
                                                                                    <li><span style='background:#FC0A0A;'></span>Preemergencia</li>
                                                                                    <li><span style='background:#D50080;'></span>Emergencia</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class='legend-source'>Variable: <a href='#link to source'>Contaminación ambiental PM2.5</a></div>
                                                                        </div>                                                                                                   
                                                                    </div> 
                                                                </div>
                                                            </div>    
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane " id="schedule-1">
                                               <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Contaminación de las ultimas 24 Horas.</h4>
                                                        <div class="card-content">
                                                            <div class="row">  
                                                                <div class="col-md-6 col-md-offset-3">  
                                                                              <?php
                                                                           include 'conectBD.php';
                                                                           $fechafinal=date('Y-m-d h:i:s', strtotime("2017-05-17 09:00:00"));                                                                          
                                                                           $fecha=strtotime ( '-1 day' , strtotime ( $fechafinal ) );
                                                                           $fechaini = date ( 'Y-m-d h:i:s' , $fecha );
                                                                           $result = pg_query($con,"SELECT AVG(valor)
                                                                            FROM registro WHERE id_tipo='2' AND (fecha_registro BETWEEN '$fechaini' AND '$fechafinal')" ) or die($fechafinal);
                                                                           if(!$result) echo pg_error();
                                                                           else{
                                                                            $fila = pg_fetch_array($result);  
                                                                            $valor=number_format($fila['avg'], 2, '.', '');

                                                                             if($valor<=150){
                                                                                 echo ("<div class='card-header ' data-background-color='green'> <center><h3 class='card-title'>");

                                                                            } 
                                                                            else if($valor<=195){
                                                                                 echo ("<div class='card-header ' data-background-color='orange'> <center><h3 class='card-title'>");

                                                                            } 
                                                                             else if($valor<=330){
                                                                                 echo ("<div class='card-header ' data-background-color='red'> <center><h3 class='card-title'>");

                                                                            }  
                                                                            else if($valor>=330){
                                                                                 echo ("<div class='card-header ' data-background-color='purple'> <center><h3 class='card-title'>");

                                                                            }                                              

                                                                            echo(" Promedio: ");
                                                                            echo $valor;
                                                                            echo(" µg∕m3") ;                                              

                                                                        }
                                                                        pg_free_result($result);
                                                                        pg_close($con);
                                                                        ?>

                                                                        </h3></center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">  
                                                                <div class="col-md-6 col-md-offset-3">                                              
                                                                   
                                                                            <?php
                                                                        include 'conectBD.php';
                                                                       // $fechafinal=date('Y-m-d h:i:s', time());
                                                                        $fechafinal=date('Y-m-d h:i:s', strtotime("2017-05-17 09:00:00")); 
                                                                        $fecha=strtotime ( '-1 day' , strtotime ( $fechafinal ) );
                                                                        $fechaini = date ( 'Y-m-d h:i:s' , $fecha );
                                                                        $result = pg_query($con,"SELECT MAX(valor)
                                                                            FROM registro WHERE id_tipo='2' AND (fecha_registro BETWEEN '$fechaini' AND '$fechafinal')" ) or die($fechafinal);
                                                                        if(!$result) echo pg_error();
                                                                        else{
                                                                            $fila = pg_fetch_array($result);  
                                                                            $valor=number_format($fila['max'], 2, '.', '');  

                                                                            if($valor<=150){
                                                                                 echo ("<div class='card-header ' data-background-color='green'> <center><h3 class='card-title'>");

                                                                            } 
                                                                            else if($valor<=195){
                                                                                 echo ("<div class='card-header ' data-background-color='orange'> <center><h3 class='card-title'>");

                                                                            } 
                                                                             else if($valor<=330){
                                                                                 echo ("<div class='card-header ' data-background-color='red'> <center><h3 class='card-title'>");

                                                                            }  
                                                                            else if($valor>=330){
                                                                                 echo ("<div class='card-header ' data-background-color='purple'> <center><h3 class='card-title'>");

                                                                            }                                              

                                                                            echo(" Máxima: ");
                                                                            echo $valor;
                                                                            echo(" µg∕m3") ;                                              

                                                                        }
                                                                        pg_free_result($result);
                                                                        pg_close($con);
                                                                        ?>
                                                                        </h3></center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">   
                                                                <div class="col-md-6 col-md-offset-3">                                              
                                                                   
                                                                            <?php
                                                                       include 'conectBD.php';
                                                                      // $fechafinal=date('Y-m-d h:i:s', time());
                                                                       $fechafinal=date('Y-m-d h:i:s', strtotime("2017-05-17 09:00:00")); 
                                                                       $fecha=strtotime ( '-1 day' , strtotime ( $fechafinal ) );
                                                                       $fechaini = date ( 'Y-m-d h:i:s' , $fecha );
                                                                       $result = pg_query($con,"SELECT MIN(valor)
                                                                        FROM registro WHERE id_tipo='2' AND (fecha_registro BETWEEN '$fechaini' AND '$fechafinal')" ) or die($fechafinal);
                                                                       if(!$result) echo pg_error();
                                                                       else{
                                                                        $fila = pg_fetch_array($result);  
                                                                        $valor=number_format($fila['min'], 2, '.', '');    

                                                                          if($valor<=150){
                                                                                 echo ("<div class='card-header ' data-background-color='green'> <center><h3 class='card-title'>");

                                                                            } 
                                                                            else if($valor<=195){
                                                                                 echo ("<div class='card-header ' data-background-color='orange'> <center><h3 class='card-title'>");

                                                                            } 
                                                                             else if($valor<=330){
                                                                                 echo ("<div class='card-header ' data-background-color='red'> <center><h3 class='card-title'>");

                                                                            }  
                                                                            else if($valor>=330){
                                                                                 echo ("<div class='card-header ' data-background-color='purple'> <center><h3 class='card-title'>");

                                                                            }                                           

                                                                        echo(" Mínima: ");
                                                                        echo $valor;
                                                                        echo(" µg∕m3") ;                                              

                                                                    }
                                                                    pg_free_result($result);
                                                                    pg_close($con);
                                                                    ?>
                                                                        </h3></center>
                                                                    </div>
                                                                </div>
                                                                 <div class="row">   
                                                            <div class="col-md-6 col-md-offset-3">
                                                                <br> 
                                                                <div class='well well-sm' id='pm25legend'>
                                                                                <div class='my-legend'>
                                                                                    <div class='legend-title'>Escala de Colores</div>
                                                                                    <div class='legend-scale'>
                                                                                      <ul class='legend-labels'>
                                                                                        <li><span style='background:#14D80D;'></span>Bueno</li>
                                                                                        <li><span style='background:#DDE426;'></span>Regular</li>
                                                                                        <li><span style='background:#EC8704;'></span>Alerta</li>
                                                                                        <li><span style='background:#FC0A0A;'></span>Preemergencia</li>
                                                                                        <li><span style='background:#D50080;'></span>Emergencia</li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class='legend-source'>Variable: <a href='#link to source'>Contaminación ambiental PM10</a></div>
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
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <footer class="footer">
            </footer>
        </div>
    </div>    
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery-3.1.1.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<script src="assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="assets/js/moment.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="assets/js/nouislider.min.js"></script>
<!-- Select Plugin -->
<script src="assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="assets/js/sweetalert2.js"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js"></script>


</html>

