
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
    <link rel="stylesheet" href="https://openlayers.org/en/v4.1.1/css/ol.css" type="text/css">
</head>


<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="blue" data-background-color="black">
            <div class="logo">
                <a href="index.html" class="simple-text">
                    <img src="assets/img/logo.png" width="40" height="35">
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
                    <li>
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li>
                        <a href="resumenDia.php">
                            <i class="material-icons">today</i>
                            <p>Resumen del día</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="historial.html">
                            <i class="material-icons">assessment</i>
                            <p>Historial de datos</p>
                        </a>
                    </li>
                    <li>
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
                        <a class="navbar-brand" href="historial.html"> Estacion </a>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="green">
                                    <i class="material-icons">location_on</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title" id="estacionNombre">
                                        <?php
                                        include 'conectBD.php';

                                        $cadena = $_GET['id'];
                                        $id =preg_replace("/[^0-9]/", "", $cadena);

                                        $result = pg_query($con,"SELECT  propietario FROM estacion WHERE id_estacion='$id'" ) or die("Estación no Válida");
                                        if(!$result) echo pg_error();
                                        else{
                                        $fila = pg_fetch_array($result);

                                        echo $fila['propietario'];
                                        }
                                        pg_free_result($result);
                                        pg_close($con);
                                        ?>
                                    </h4>
                                    <div id="map" class="map" style="width: 100%; height: 57%"><div id="popup"></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="green">
                                    <i class="material-icons">info</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Información general</h4>
                                    <div class="table-responsive table-sales">
                                        <table class="table">
                                            <tbody>
                                                <?php
                                                include 'conectBD.php';

                                                $cadena = $_GET['id'];
                                                $id =preg_replace("/[^0-9]/", "", $cadena);

                                                $result = pg_query($con,"SELECT  propietario , lat, lon, fecha_primer_registro , fecha_ultimo_registro , id_comuna
                                                FROM estacion WHERE id_estacion='$id'" ) or die("Error en la consulta SQL");
                                                if(!$result) echo pg_error();
                                                else{
                                                $fila = pg_fetch_array($result);

                                                $id=$fila['id_comuna'];
                                                $result2 = pg_query($con,"SELECT \"COMUNA_NOMBRE\" FROM comuna WHERE \"COMUNA_ID\" = '$id'") or die("Estación no Válida");

                                                if(!$result2) echo pg_error();
                                                else{
                                                $fila2 = pg_fetch_array($result2);

                                                echo("
                                                <tr>
                                                    <td>Propietario</td>
                                                    <td>
                                                        ");
                                                        echo $fila['propietario'];
                                                        echo("
                                                    </td>
                                                </tr>");

                                                echo("
                                                <tr>
                                                    <td>Comuna</td>
                                                    <td>
                                                        ");
                                                        echo $fila2['COMUNA_NOMBRE'];
                                                        echo("
                                                    </td>
                                                </tr>");

                                                echo("
                                                <tr>
                                                    <td>Latitud</td>
                                                    <td id='lat'>
                                                        ");
                                                        echo $fila['lat'];
                                                        echo("
                                                    </td>
                                                </tr>");

                                                echo("
                                                <tr>
                                                    <td>Longitud</td>
                                                    <td id='lon'>
                                                        ");
                                                        echo $fila['lon'];
                                                        echo("
                                                    </td>
                                                </tr>");

                                                echo("
                                                <tr>
                                                    <td>Fecha Primer Registro</td>
                                                    <td>
                                                        ");
                                                        echo $fila['fecha_primer_registro'];
                                                        echo("
                                                    </td>
                                                </tr>");

                                                echo("
                                                <tr>
                                                    <td>Fecha Último Registro</td>
                                                    <td>
                                                        ");
                                                        echo $fila['fecha_ultimo_registro'];
                                                        echo("
                                                    </td>
                                                </tr>");

                                                }

                                                }
                                                pg_free_result($result);
                                                pg_close($con);
                                                ?>
                                            <td>
                                                Tipo Mediciones
                                            </td>
                                            <td>PM 2.5 / PM 10</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="green">
                                    <i class="material-icons">cloud</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Mediciones</h4>
                                    <div class="card-content">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Parámetros</th>
                                                        <th>Fecha último registro</th>
                                                        <th class="text-center">Gráficos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Material particulado MP 10 (μg/m3)</td>
                                                        <?php
                                                        include 'conectBD.php';

                                                        $cadena = $_GET['id'];
                                                        $id =preg_replace("/[^0-9]/", "", $cadena);

                                                        $result = pg_query($con,"SELECT MAX(fecha_registro)
                                                        FROM registro WHERE id_estacion='$id' AND  id_tipo='2'" ) or die("Error en la consulta SQL");
                                                        if(!$result) echo pg_error();
                                                        else{
                                                        $fila = pg_fetch_array($result);

                                                        echo("
                                                        <td>
                                                            ");
                                                            echo $fila['max'];
                                                            echo("
                                                        </td>");

                                                        }
                                                        pg_free_result($result);
                                                        pg_close($con);
                                                        ?>
                                                        <td class="td-actions text-center">
                                                            <button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="" data-toggle="modal" data-target="#myModal" onclick="cargarGrafico(2,'MP 10')">
                                                                <i class="material-icons">assessment</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Material particulado MP 2.5 (μg/m3)</td>
                                                        <?php
                                                        include 'conectBD.php';

                                                        $cadena = $_GET['id'];
                                                        $id =preg_replace("/[^0-9]/", "", $cadena);

                                                        $result = pg_query($con,"SELECT MAX(fecha_registro)
                                                        FROM registro WHERE id_estacion='$id' AND  id_tipo='1'" ) or die("Error en la consulta SQL");
                                                        if(!$result) echo pg_error();
                                                        else{
                                                        $fila = pg_fetch_array($result);

                                                        echo("
                                                        <td>
                                                            ");
                                                            echo $fila['max'];
                                                            echo("
                                                        </td>");

                                                        }
                                                        pg_free_result($result);
                                                        pg_close($con);
                                                        ?>
                                                        <td class="td-actions text-center">
                                                            <button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="" data-toggle="modal" data-target="#myModal" onclick="cargarGrafico(1,'MP 2.5')">
                                                                <i class="material-icons">assessment</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> <button class="btn" onclick="history.back()">
                        <span class="btn-label">
                            <i class="material-icons">keyboard_arrow_left</i>
                        </span>
                        volver atrás
                        <div class="ripple-container"></div>
                    </button>
                </div>
            </div>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" id="tituloModal"></h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-2 ">
                                    <div class="card-content">
                                        <div class="info info-horizontal">
                                            <div class="form-group">
                                                <h6>Gráfico</h6>
                                                <label class="label-control">Desde:</label>
                                                <!--
                                                <input type="text" id="desdeTiempo" class="form-control datepicker" value="<?php echo date('d/m/Y', time()); ?>">
                                                -->
                                                <input type="text" id="desdeTiempo" class="form-control datepicker" value="16/05/2017">                                                
                                                <span class="material-input"></span>
                                            </div>
                                            <div class="form-group ">
                                                <label class="label-control">Hasta:</label>
                                                <!--
                                                <input type="text" id="hastaTiempo" class="form-control datepicker" value="<?php echo date('d/m/Y', time()); ?>">
                                                -->
                                                <input type="text" id="hastaTiempo" class="form-control datepicker" value="18/05/2017">
                                                <span class="material-input"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info info-horizontal">

                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="highcharts-container" id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>

                                    <p>Descargar:</p>

                                    <div class=" chart-export" data-chart-selector="#container">
                                        <button type="button" class="btn btn-success btn-sm" data-type="image/svg+xml">SVG</button>
                                        <button type="button" class="btn btn-success  btn-sm" data-type="image/png">PNG</button>
                                        <button type="button" class="btn btn-success  btn-sm" data-type="image/jpeg">JPEG</button>
                                        <button type="button" class="btn btn-success  btn-sm" data-type="application/pdf">PDF</button>
                                        <button type="button" class="btn btn-success  btn-sm" data-type="text/csv">CSV</button>
                                        <button type="button" class="btn btn-success  btn-sm" data-type="application/vnd.ms-excel">XLS</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer"></footer>
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
<!--openlayer3 -->
<script src="https://openlayers.org/en/v4.1.1/build/ol.js"></script>
<!--highchart-->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="//a----.github.io/highcharts-export-clientside/bower_components/highcharts/modules/canvas-tools.js"></script>
<script src="//a----.github.io/highcharts-export-clientside/bower_components/export-csv/export-csv.js"></script>
<script type="application/javascript" src="//a----.github.io/highcharts-export-clientside/bower_components/jspdf/dist/jspdf.min.js"></script>
<!-- Export Client-Side module -->
<script src="//a----.github.io/highcharts-export-clientside/bower_components/highcharts-export-clientside/highcharts-export-clientside.js"></script>
<!-- traduccion Datepicker -->
<script src="assets/js/es.js"></script>
<script src="assets/js/moment.js"></script>




<script>
    var iconFeature = new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.transform([Number(document.getElementById( "lon" ).innerText) ,Number(document.getElementById( "lat" ).innerText)], 'EPSG:4326', 'EPSG:3857')),
        name: document.getElementById( "estacionNombre" ).innerText,
        population: 4000,
        rainfall: 500
    });

    var iconStyle = new ol.style.Style({
        image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
            anchor: [30, 46],
        anchorXUnits: 'pixels',
        anchorYUnits: 'pixels',
        src: 'assets/img/icon_estacion.png'
    }))
    });

    iconFeature.setStyle(iconStyle);

    var vectorSource = new ol.source.Vector({
        features: [iconFeature]
    });

    var vectorLayer = new ol.layer.Vector({
        source: vectorSource
    });

    var mapas1 = new ol.layer.Group({
        title: 'Mapas',
        layers: [
            new ol.layer.Tile({
                title: 'OSM',
                type: 'base',
                visible: true,
                source: new ol.source.OSM()
            }),
        ]
    });

    var map = new ol.Map({
        layers: [ mapas1,vectorLayer],
        target: document.getElementById('map'),
        view: new ol.View({
            center:ol.proj.transform([Number(document.getElementById( "lon" ).innerText) ,Number(document.getElementById( "lat" ).innerText)], 'EPSG:4326', 'EPSG:3857') ,
            zoom: 12
        })
    });

    var element = document.getElementById('popup');

    var popup = new ol.Overlay({
        element: element,
        positioning: 'bottom-center',
        stopEvent: false,
        offset: [0, -50]
    });
    map.addOverlay(popup);

    // display popup on click
    map.on('click', function(evt) {
        var feature = map.forEachFeatureAtPixel(evt.pixel,
            function(feature) {
                return feature;
            });
        if (feature) {
            var coordinates = feature.getGeometry().getCoordinates();
            popup.setPosition(coordinates);
            $(element).popover({
                'placement': 'top',
                'html': true,
                'content': feature.get('name')
            });
            $(element).popover('show');
        } else {
            $(element).popover('destroy');
        }
    });

    // change mouse cursor when over marker
    map.on('pointermove', function(e) {
        if (e.dragging) {
            $(element).popover('destroy');
            return;
        }
        var pixel = map.getEventPixel(e.originalEvent);
        var hit = map.hasFeatureAtPixel(pixel);
        map.getTarget().style.cursor = hit ? 'pointer' : '';
    });

    var paramstr = window.location.search.substr(1);
    var paramarr = paramstr.split ("&");
    var params = {};
    var id;


    for ( var i = 0; i < paramarr.length; i++) {
        var tmparr = paramarr[i].split("=");
        params[tmparr[0]] = tmparr[1];
    }
    if (params['id']) {
        id=params['id'];
    } else {
        id=-1;
        console.log('No se envió el parámetro variable');
    }
    
    var varIdTipo;
    var chart;
    var varNombreTipo;
    document.getElementById("tituloModal").innerHTML = document.getElementById( "estacionNombre" ).innerText;
    var i=0;
    function cargarGrafico (idTipo, nombreTipo){

        varIdTipo=idTipo;
        varNombreTipo=nombreTipo;

        var desde = $('#desdeTiempo').val()+" 00:00:00";
        var hasta = $('#hastaTiempo').val()+" 23:59:59";

        $.ajax({
            data: {"id" : id, "idTipo":idTipo ,"inicial" : desde,"final":hasta},
            type: "POST",
            dataType: "json",
            url: "registros.php",
        })
        .done(function( datos, textStatus, jqXHR ) {

            chart = Highcharts.chart('container', {
                chart: {
                    zoomType: 'x'
                },
                title: {
                    text: 'Contaminación Ciudad Curicó'
                },
                subtitle: {
                    text: document.ontouchstart === undefined ?
                            'Haga clic y arrastre en el área de trazado para acercar': 'Pinche el gráfico para acercar'
                },
                xAxis: {
                    type: 'datetime',

                    labels: {
                        overflow: 'justify'
                    }
                },
                yAxis: {
                    title: {
                        text: 'μg/m3'
                    },
                    min: 0
                },
                tooltip: {
                    valueSuffix: ' μg/m3'
                },
                credits: {
                    enabled: false
                },
                plotOptions: {
                    area: {
                        fillColor: {
                            linearGradient: {
                                x1: 0,
                                y1: 0,
                                x2: 0,
                                y2: 1
                            },
                            stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                            ]
                        },
                        marker: {
                            radius: 2
                        },
                        lineWidth: 1,
                        states: {
                            hover: {
                                lineWidth: 1
                            }
                        },
                        threshold: null
                    }
                },
                series: [{
                    type: 'area',
                    name: nombreTipo,
                    data:datos

                }],
                navigation: {
                    menuItemStyle: {
                        fontSize: '10px'
                    }
                }
            });

            $(".chart-export").each(function() {
                var jThis = $(this),
                chartSelector = jThis.data("chartSelector"),
                chart = $(chartSelector).highcharts();


                $("*[data-type]", this).each(function() {
                    var jThis = $(this),
                    type = jThis.data("type");
                    if(Highcharts.exporting.supports(type)) {
                        jThis.click(function() {
                            chart.exportChartLocal({ type: type });
                        });
                    }
                    else {
                        jThis.attr("disabled", "disabled");

                    }
                });
            });

            //traduccion español
            Highcharts.setOptions({
                lang: {
                    loading: 'Cargando...',
                    months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    weekdays: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                    shortMonths: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                    exportButtonTitle: "Exportar",
                    printButtonTitle: "Importar",
                    rangeSelectorFrom: "Desde",
                    rangeSelectorTo: "Hasta",
                    rangeSelectorZoom: "Período",
                    downloadPNG: 'Descargar imagen PNG',
                    downloadJPEG: 'Descargar imagen JPEG',
                    downloadPDF: 'Descargar imagen PDF',
                    downloadSVG: 'Descargar imagen SVG',
                    printChart: 'Imprimir',
                    resetZoom: 'Reiniciar zoom',
                    resetZoomTitle: 'Reiniciar zoom',
                    thousandsSep: ",",
                    decimalPoint: '.'
                }
            });

        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            if ( console && console.log ) {
                console.log( "La solicitud a fallado: " +  textStatus);
            }
        });
    }

    $('.datepicker').datetimepicker({
        format: 'DD/MM/YYYY',
        locale: 'es',
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove',
            inline: true
        },
        defaultDate:moment()
    }).on('dp.change',function(e){

        var desde = $('#desdeTiempo').val()+" 00:00:00";
        var hasta = $('#hastaTiempo').val()+" 23:59:59";

        $.ajax({
            data: {"id" : id, "idTipo":varIdTipo ,"inicial" : desde,"final":hasta},
            type: "POST",
            dataType: "json",
            url: "registros.php",
        })
        .done(function( datos, textStatus, jqXHR ) {
            chart.series[0].setData(datos);
        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            if ( console && console.log ) {
                console.log( "La solicitud a fallado: " +  textStatus);
            }
        });
    });
</script>


</html>
